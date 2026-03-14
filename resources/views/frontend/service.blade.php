@extends('frontend.layouts.app')
@section('title', 'Cardiology Services | Dr. Mohammad Faisal Ibn Kabir')
@section('meta')
    <meta name="description"
        content="Explore cardiology services provided by Dr. Mohammad Faisal Ibn Kabir including heart disease diagnosis, interventional cardiology, hypertension management, ECG, echocardiography and preventive cardiology.">
    <meta name="keywords"
        content="cardiologist services Dhaka, heart specialist Bangladesh, cardiology treatment, ECG echo cardiology">
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/frontend/services/custom_services.css') }}">

@section('content')
    @include('frontend.welcome_page.header')
    <!-- PAGE BANNER -->
    <div class="service-banner" style="background-image:url('{{ asset('uploads/images/welcome_page/cover.png') }}')">
        <div class="service-overlay"></div>
        <div class="service-breadcrumb">
            <a href="{{ route('welcome') }}">Home</a>
            <span>></span>
            <span>Services</span>
        </div>
        <div class="service-title">
            <h1>Cardiology Services</h1>
            <p>
                Advanced Heart Care with Compassion and Expertise
            </p>
        </div>
    </div>

    <!-- INTRO SECTION -->
    <section class="service-intro">
        <div class="container">
            <h2>
                Comprehensive Cardiac Care
            </h2>
            <p>
                :contentReference[oaicite:1]{index=1} provides comprehensive cardiology services focusing on prevention,
                diagnosis, and treatment of heart diseases. Using modern diagnostic technologies and international clinical
                standards, patients receive accurate evaluation and personalized treatment plans for optimal heart health.
            </p>
        </div>
    </section>

    <!-- SERVICES GRID -->
    <section class="services-section">
        <div class="container">
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h4>Heart Disease Diagnosis</h4>
                        <p>
                            Accurate diagnosis of coronary artery disease, heart valve disorders, cardiomyopathy, and other
                            cardiovascular conditions using modern clinical evaluation techniques.
                        </p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h4>Cardiology Consultation</h4>
                        <p>
                            Comprehensive cardiology consultation for chest pain, shortness of breath, palpitations,
                            dizziness, and other heart-related symptoms.
                        </p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <h4>Interventional Cardiology</h4>
                        <p>
                            Advanced interventional cardiology procedures and treatment planning for coronary artery
                            blockages and complex cardiovascular conditions.
                        </p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-notes-medical"></i>
                        </div>
                        <h4>Hypertension Management</h4>
                        <p>
                            Diagnosis and treatment of high blood pressure with personalized lifestyle guidance and
                            medication plans.
                        </p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Preventive Cardiology</h4>
                        <p>
                            Early detection and prevention strategies for heart disease including risk assessment,
                            cholesterol management, and lifestyle counseling.
                        </p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>Cardiac Risk Assessment</h4>
                        <p>
                            Evaluation of cardiovascular risk factors including diabetes, cholesterol, smoking, and family
                            history to prevent heart disease.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE SECTION -->
    <section class="why-section">
        <div class="container">
            <h2>Why Choose Our Cardiology Care</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="why-box">
                        <h5>Expert Cardiologist</h5>
                        <p>
                            Extensive experience in clinical and interventional cardiology with international training.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="why-box">
                        <h5>Advanced Diagnosis</h5>
                        <p>
                            Modern diagnostic methods ensure accurate detection of heart conditions.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="why-box">
                        <h5>Patient-Centered Care</h5>
                        <p>
                            Individualized treatment plans designed for each patient's heart health needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="service-cta">
        <div class="container text-center">
            <h3>
                Need a Cardiology Consultation?
            </h3>

            <p>
                Schedule an appointment today with
                <strong>Dr. Mohammad Faisal Ibn Kabir</strong>
                for expert heart care.
            </p>

            <a href="{{ route('contact') }}" class="btn btn-primary">

                Book Appointment

            </a>
        </div>
    </section>
    @include('frontend.welcome_page.footer')

@endsection
