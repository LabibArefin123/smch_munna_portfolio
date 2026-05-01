<?php

namespace App\Http\Controllers;

use App\Mail\ContactConfirmationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\SystemProblem;
use App\Models\Gallery;
use App\Models\ContactRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WelcomePageController extends Controller
{
    public function index()
    {
        return view('frontend.welcome');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function service()
    {
        return view('frontend.service');
    }


    public function faq()
    {
        return view('frontend.faq');
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        return view('frontend.gallery', compact('galleries'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function cardiology_page_1()
    {
        return view('frontend.service_page.heart_diagnosis');
    }
    public function cardiology_page_2()
    {
        return view('frontend.service_page.cardiology');
    }
    public function cardiology_page_3()
    {
        return view('frontend.service_page.interventional');
    }
    public function cardiology_page_4()
    {
        return view('frontend.service_page.hypertension');
    }
    public function cardiology_page_5()
    {
        return view('frontend.service_page.preventive');
    }
    public function cardiology_page_6()
    {
        return view('frontend.service_page.risk_assessment');
    }

    public function system_problem_store(Request $request)
    {
        $request->validate([
            'problem_title' => 'required|string|max:255',
            'problem_description' => 'required|string',
            'status' => 'required|in:low,medium,high,critical',
            'problem_file' => 'nullable|file|max:4096',
            'multiple_images.*' => 'nullable|image|max:4096',
            'multiple_pdfs.*' => 'nullable|file|max:4096',
        ]);

        $uid = 'SHMC-PROB-' . strtoupper(Str::random(6));

        // SINGLE FILE
        $fileName = null;
        if ($request->hasFile('problem_file')) {
            $file = $request->file('problem_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/problem/files'), $fileName);
        }

        // MULTIPLE IMAGES
        $images = [];
        if ($request->hasFile('multiple_images')) {
            foreach ($request->file('multiple_images') as $img) {
                $name = time() . '_' . $img->getClientOriginalName();
                $img->move(public_path('uploads/problem/images'), $name);
                $images[] = $name;
            }
        }

        // MULTIPLE FILES
        $files = [];
        if ($request->hasFile('multiple_pdfs')) {
            foreach ($request->file('multiple_pdfs') as $f) {
                $name = time() . '_' . $f->getClientOriginalName();
                $f->move(public_path('uploads/problem/files'), $name);
                $files[] = $name;
            }
        }

        SystemProblem::create([
            'problem_uid' => $uid,
            'problem_title' => $request->problem_title,
            'problem_description' => $request->problem_description,
            'status' => $request->status,
            'problem_file' => $fileName,
            'multiple_images' => $images,
            'multiple_pdfs' => $files,
        ]);

        return back()->with('success', '✅ Problem submitted successfully!');
    }

    public function contactStore(Request $request)
    {
        $ip = $request->ip();
        $today = Carbon::today();

        // Find last request from this IP
        $lastRequest = ContactRequest::where('ip_address', $ip)
            ->latest()
            ->first();

        // Lifetime count
        $totalCount = $lastRequest ? $lastRequest->total_count + 1 : 1;

        // Today's count
        $todayCount = ContactRequest::where('ip_address', $ip)
            ->whereDate('created_at', $today)
            ->count() + 1;

        // Store contact request
        $contact = ContactRequest::create([
            'name'        => $request->name,
            'phone'       => $request->phone,
            'email'       => $request->email,
            'subject'     => $request->subject,
            'message'     => $request->message,
            'type'        => 'contact',
            'ip_address'  => $ip,
            'total_count' => $totalCount,
        ]);

        // ✅ Send confirmation email (ONLY if email exists)
        if (!empty($request->email)) {
            try {
                Mail::to($request->email)
                    ->send(new ContactConfirmationMail($request->name));
            } catch (\Exception $e) {
                // Optional: log but never break user flow
                Log::error('Contact mail failed: ' . $e->getMessage());
            }
        }

        session()->flash('contact_success', [
            'count' => $todayCount,
            'time'  => now()->format('d M Y, h:i A'),
        ]);

        return back();
    }
}
