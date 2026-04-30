@extends('frontend.layouts.app')

@section('title', 'Cardiology Services')

@section('content')
@include('frontend.welcome_page.header')
<section class="service-page">
    <div class="service-container">

        <div class="service-header">
            <h1>Cardiology Services</h1>
            <p>Comprehensive heart care services with modern medical approaches.</p>
        </div>

        <div class="service-card">
            <p>
                Our cardiology services focus on complete cardiovascular care, including diagnosis,
                treatment, and long-term management of heart-related conditions.
            </p>

            <h4>What We Provide</h4>
            <ul>
                <li>Heart disease diagnosis and management</li>
                <li>Preventive cardiology care</li>
                <li>Advanced cardiac consultation</li>
                <li>Risk assessment and lifestyle guidance</li>
            </ul>

            <p>
                Each patient receives personalized care based on their medical condition,
                ensuring accurate diagnosis and effective treatment planning.
            </p>
        </div>

    </div>
</section>
@include('frontend.welcome_page.footer')
@endsection