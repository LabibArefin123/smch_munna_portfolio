<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\PatientDescriptionImage;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Create Patient
     */
    public function index()
    {
        $patients = Patient::latest()->get();

        return view('backend.patient_management.index', compact('patients'));
    }

    public function filter(Request $request)
    {
        $patients = Patient::query();
        if ($request->filled('search')) {

            $patients->where(function ($q) use ($request) {

                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('phone', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('sex')) {
            $patients->where('sex', $request->sex);
        }

        if ($request->recommended !== null) {
            $patients->where('recommended', $request->recommended);
        }

        if ($request->filled('age')) {
            $patients->where('age', $request->age);
        }

        return response()->json(
            $patients->latest()->get()
        );
    }

    public function create()
    {
        return view('backend.patient_management.create');
    }

    /**
     * Store Patient
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:patients,name',
            'sex' => 'required|in:Male,Female',
            'phone' => 'required|string|max:20|unique:patients,phone',
            'age' => 'required|integer|min:0|max:120',
            'patient_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'description' => 'nullable|string',
            'description_images' => 'nullable|array',
            'description_images.*' => 'image|mimes:jpg,jpeg,png,webp|max:5120',
            'recommended' => 'required|boolean',
            'recommended_doctor' => 'nullable|string|max:255',
            'recommendation_information' => 'nullable|string',
        ]);

        $patientImage = null;
        $destination = public_path('uploads/images/patients');

        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }

        // Patient Image
        if ($request->hasFile('patient_image')) {

            $image = $request->file('patient_image');

            $patientImage = 'patient_' . date('d_m_Y_H_i_s') . '.' . $image->getClientOriginalExtension();

            $image->move($destination, $patientImage);
        }

        $patient = Patient::create([

            'name' => $request->name,
            'sex' => $request->sex,
            'phone' => $request->phone,
            'age' => $request->age,
            'patient_image' => $patientImage,
            'description' => $request->description,
            'recommended' => $request->recommended,
            'recommended_doctor' => $request->recommended_doctor,
            'recommendation_information' => $request->recommendation_information,

        ]);

        if ($request->hasFile('description_images')) {
            $destination = public_path('uploads/images/patients');
            foreach ($request->file('description_images') as $key => $image) {
                $imageName = 'description_' . date('d_m_Y_H_i_s')
                    . '_' . $key . '_'
                    . uniqid()
                    . '.'
                    . $image->getClientOriginalExtension();

                $image->move($destination, $imageName);

                PatientDescriptionImage::create([
                    'patient_id' => $patient->id,
                    'image' => $imageName

                ]);
            }
        }

        return redirect()->route('patients.index')
            ->with('success', 'Patient created successfully.');
    }

    public function show(Patient $patient)
    {
        $patient->load('descriptionImages');

        return view('backend.patient_management.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        $patient->load('descriptionImages');
        return view('backend.patient_management.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:patients,name,' . $patient->id,
            'sex' => 'required|in:Male,Female',
            'phone' => 'required|string|max:20|unique:patients,phone,' . $patient->id,
            'age' => 'required|integer|min:0|max:120',

            'patient_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',

            'description' => 'nullable|string',

            'description_images' => 'nullable|array',
            'description_images.*' => 'image|mimes:jpg,jpeg,png,webp|max:5120',

            'recommended' => 'required|boolean',

            'recommended_doctor' => 'nullable|string|max:255',

            'recommendation_information' => 'nullable|string',
        ]);

        $destination = public_path('uploads/images/patients');

        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }

        // Patient Image
        if ($request->hasFile('patient_image')) {

            if ($patient->patient_image && file_exists($destination . '/' . $patient->patient_image)) {
                unlink($destination . '/' . $patient->patient_image);
            }

            $image = $request->file('patient_image');

            $patientImage = 'patient_' . date('d_m_Y_H_i_s') . '.' . $image->getClientOriginalExtension();

            $image->move($destination, $patientImage);

            $patient->patient_image = $patientImage;
        }

        foreach ($patient->descriptionImages as $photo) {

            $path = public_path('uploads/images/patients/' . $photo->image);

            if (file_exists($path)) {
                unlink($path);
            }

            $photo->delete();
        }

        $patient->name = $request->name;
        $patient->sex = $request->sex;
        $patient->phone = $request->phone;
        $patient->age = $request->age;
        $patient->description = $request->description;
        $patient->recommended = $request->recommended;
        $patient->recommended_doctor = $request->recommended_doctor;
        $patient->recommendation_information = $request->recommendation_information;

        $patient->save();

        if ($request->hasFile('description_images')) {

            foreach ($request->file('description_images') as $key => $image) {

                $imageName = 'description_'
                    . date('d_m_Y_H_i_s')
                    . '_' . $key
                    . '_'
                    . uniqid()
                    . '.'
                    . $image->getClientOriginalExtension();

                $image->move($destination, $imageName);

                PatientDescriptionImage::create([
                    'patient_id' => $patient->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route('patients.index')
            ->with('success', 'Patient updated successfully.');
    }

    public function destroy(Patient $patient)
    {
        $destination = public_path('uploads/images/patients');

        if ($patient->patient_image) {

            $image = $destination . '/' . $patient->patient_image;

            if (file_exists($image)) {
                unlink($image);
            }
        }

        foreach ($patient->descriptionImages as $photo) {

            $path = $destination . '/' . $photo->image;

            if (file_exists($path)) {
                unlink($path);
            }

            $photo->delete();
        }

        $patient->delete();

        return redirect()->route('patients.index')
            ->with('success', 'Patient deleted successfully.');
    }
}
