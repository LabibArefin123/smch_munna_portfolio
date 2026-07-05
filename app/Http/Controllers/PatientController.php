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
    public function index(Request $request)
    {
        $patients = Patient::query();

        if ($request->filled('recommended')) {
            $patients->where('recommended', $request->recommended);
        }

        if ($request->filled('sex')) {
            $patients->where('sex', $request->sex);
        }

        $patients = $patients->latest()->get();

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
            'description_images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',

            'recommended' => 'required|boolean',
            'recommended_doctor' => 'nullable|string|max:255',
            'recommendation_information' => 'nullable|string',
        ]);

        /*
    |--------------------------------------------------------------------------
    | Create patient folder name from patient name
    |--------------------------------------------------------------------------
    */
        $patientFolder = \Illuminate\Support\Str::slug($request->name);

        $destination = public_path('uploads/images/patients/' . $patientFolder);

        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }

        /*
    |--------------------------------------------------------------------------
    | Upload patient profile image
    |--------------------------------------------------------------------------
    */
        $patientImage = null;

        if ($request->hasFile('patient_image')) {
            $image = $request->file('patient_image');

            $patientImage = 'patient_' . uniqid() . '_' . now()->format('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($destination, $patientImage);
        }

        /*
    |--------------------------------------------------------------------------
    | Create patient
    |--------------------------------------------------------------------------
    | Save folder name too if you have a folder column.
    | If not, just remove 'image_folder' from here.
    |--------------------------------------------------------------------------
    */
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
            // 'image_folder' => $patientFolder, // optional if you add this column
        ]);

        /*
    |--------------------------------------------------------------------------
    | Upload description images
    |--------------------------------------------------------------------------
    */
        if ($request->hasFile('description_images')) {
            $images = [];

            foreach ($request->file('description_images') as $image) {
                $imageName = 'description_' . uniqid() . '_' . now()->format('YmdHis') . '.' . $image->getClientOriginalExtension();

                $image->move($destination, $imageName);

                $images[] = $imageName;
            }

            PatientDescriptionImage::create([
                'patient_id' => $patient->id,
                'images' => $images,
            ]);
        }

        return redirect()
            ->route('patients.index')
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

        if (!$patient->descriptionImages) {
            $patient->setRelation('descriptionImages', new PatientDescriptionImage([
                'images' => [],
            ]));
        }

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
            'description_images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',

            'delete_description_images' => 'nullable|array',
            'delete_description_images.*' => 'nullable',

            'recommended' => 'required|boolean',
            'recommended_doctor' => 'nullable|string|max:255',
            'recommendation_information' => 'nullable|string',
        ]);

        /*
    |--------------------------------------------------------------------------
    | Resolve patient image folder
    |--------------------------------------------------------------------------
    | If old patient has no image_folder yet, create one and save it.
    |--------------------------------------------------------------------------
    */
        if (empty($patient->image_folder)) {
            $patient->image_folder = \Illuminate\Support\Str::slug($patient->name) . '_' . $patient->id;
        }

        $destination = public_path('uploads/images/patients/' . $patient->image_folder);

        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }

        /*
    |--------------------------------------------------------------------------
    | Update Main Patient Image
    |--------------------------------------------------------------------------
    */
        if ($request->hasFile('patient_image')) {
            // delete old patient image from patient folder
            if (
                $patient->patient_image &&
                file_exists($destination . '/' . $patient->patient_image)
            ) {
                unlink($destination . '/' . $patient->patient_image);
            }
            // fallback: old image may still be in root patients folder
            elseif (
                $patient->patient_image &&
                file_exists(public_path('uploads/images/patients/' . $patient->patient_image))
            ) {
                unlink(public_path('uploads/images/patients/' . $patient->patient_image));
            }

            $image = $request->file('patient_image');

            $patientImageName =
                'patient_' . uniqid() . '_' . now()->format('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($destination, $patientImageName);

            $patient->patient_image = $patientImageName;
        }

        /*
    |--------------------------------------------------------------------------
    | Update Patient Basic Info
    |--------------------------------------------------------------------------
    */
        $patient->name = $request->name;
        $patient->sex = $request->sex;
        $patient->phone = $request->phone;
        $patient->age = $request->age;
        $patient->description = $request->description;
        $patient->recommended = $request->recommended;
        $patient->recommended_doctor = $request->recommended_doctor;
        $patient->recommendation_information = $request->recommendation_information;

        // keep folder stable once created
        $patient->save();

        /*
    |--------------------------------------------------------------------------
    | Handle Description Images (Delete old + Add new)
    |--------------------------------------------------------------------------
    */
        $hasNewImages = $request->hasFile('description_images');

        $hasDeleteRequest = collect($request->delete_description_images ?? [])
            ->filter(fn($value) => $value !== null && $value !== '')
            ->isNotEmpty();

        if ($hasNewImages || $hasDeleteRequest) {
            $patientDescription = PatientDescriptionImage::firstOrCreate(
                ['patient_id' => $patient->id],
                ['images' => []]
            );

            $images = $patientDescription->images ?? [];

            /*
        |--------------------------------------------------------------------------
        | Delete selected old images
        |--------------------------------------------------------------------------
        */
            if ($hasDeleteRequest) {
                $deleteIndexes = collect($request->delete_description_images)
                    ->filter(fn($value) => $value !== null && $value !== '')
                    ->map(fn($value) => (int) $value)
                    ->unique()
                    ->sortDesc()
                    ->values()
                    ->all();

                foreach ($deleteIndexes as $index) {
                    if (isset($images[$index])) {
                        $oldImageName = $images[$index];

                        $oldImagePath = $destination . '/' . $oldImageName;
                        $fallbackOldImagePath = public_path('uploads/images/patients/' . $oldImageName);

                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        } elseif (file_exists($fallbackOldImagePath)) {
                            unlink($fallbackOldImagePath);
                        }

                        unset($images[$index]);
                    }
                }

                $images = array_values($images);
            }

            /*
        |--------------------------------------------------------------------------
        | Upload new description images
        |--------------------------------------------------------------------------
        */
            if ($hasNewImages) {
                foreach ($request->file('description_images') as $image) {
                    $imageName =
                        'description_' . uniqid() . '_' . now()->format('YmdHis') . '.' . $image->getClientOriginalExtension();

                    $image->move($destination, $imageName);

                    $images[] = $imageName;
                }
            }

            $patientDescription->update([
                'images' => $images,
            ]);
        }

        return redirect()
            ->route('patients.index')
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
