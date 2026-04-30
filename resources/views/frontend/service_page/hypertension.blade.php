@extends('frontend.layouts.app')

@section('title', 'Hypertension Management')

@section('content')
@include('frontend.welcome_page.header')
<section class="service-page">
    <div class="service-container">

        <div class="service-header">
            <h1>Hypertension Management</h1>
            <p>Effective control and treatment of high blood pressure.</p>
        </div>

        <div class="service-card">
            <p>
                Hypertension is a major risk factor for heart disease.
                Proper management is essential to prevent complications.
            </p>

            <h4>Management Plan</h4>
            <ul>
                <li>Regular blood pressure monitoring</li>
                <li>Medication management</li>
                <li>Lifestyle and diet guidance</li>
            </ul>

            <p>
                The focus is on maintaining stable blood pressure levels
                and reducing long-term health risks.
            </p>
        </div>

    </div>
</section>
@include('frontend.welcome_page.footer')
@endsection