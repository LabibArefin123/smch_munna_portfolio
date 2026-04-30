@extends('frontend.layouts.app')

@section('title', 'Heart Disease Diagnosis')

@section('content')
    @include('frontend.welcome_page.header')
    <section class="service-page">
        <div class="service-container">

            <div class="service-header">
                <h1>Heart Disease Diagnosis</h1>
                <p>Accurate and early detection of cardiovascular conditions.</p>
            </div>

            <div class="service-card">
                <p>
                    Early diagnosis is essential for effective treatment of heart disease.
                    Advanced diagnostic techniques are used to identify cardiovascular problems.
                </p>

                <h4>Diagnostic Approach</h4>
                <ul>
                    <li>Clinical evaluation and patient history</li>
                    <li>ECG, Echocardiography, and imaging</li>
                    <li>Blood pressure and cholesterol analysis</li>
                </ul>

                <p>
                    The goal is to detect issues early and prevent complications through
                    timely medical intervention.
                </p>
            </div>

        </div>
    </section>
    @include('frontend.welcome_page.footer')
@endsection
