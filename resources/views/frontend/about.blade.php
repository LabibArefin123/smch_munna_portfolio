@extends('frontend.layouts.app')

@section('title', 'About Dr. Mohammad Faisal Ibn Kabir | Cardiologist in Bangladesh')

@section('meta')

    <meta name="description"
        content="Learn about Dr. Mohammad Faisal Ibn Kabir, Professor & Head of Cardiology at MH Samorita Medical College & Hospital. Experienced Clinical and Interventional Cardiologist specializing in cardiovascular intervention, electrophysiology, and heart disease management in Dhaka.">

    <meta property="og:title" content="About Dr. Mohammad Faisal Ibn Kabir | Cardiologist in Bangladesh">

    <meta property="og:description"
        content="Professor & Head of Cardiology at MH Samorita Medical College & Hospital. Specialist in clinical cardiology, cardiovascular intervention and electrophysiology.">

    <meta property="og:image" content="{{ asset('uploads/images/welcome_page/doctors/image_2.jpg') }}">

    <meta property="og:type" content="profile">
    <meta property="og:url" content="{{ url()->current() }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "Physician",
 "name": "Dr. Mohammad Faisal Ibn Kabir",
 "medicalSpecialty": "Cardiology",
 "jobTitle": "Professor & Head of Cardiology",
 "areaServed": "Bangladesh",
 "worksFor": "MH Samorita Medical College and Hospital"
}
</script>

@endsection


<link rel="stylesheet" href="{{ asset('css/frontend/about/custom_about.css') }}">


@section('content')

    @include('frontend.welcome_page.header')


    <div class="doctor-banner" style="background-image: url('{{ asset('uploads/images/welcome_page/cover.png') }}');">

        <nav class="breadcrumb-custom">

            <a href="{{ route('welcome') }}" class="doc-link text-decoration-none">
                Home
            </a>

            <span>></span>

            <a href="{{ route('about') }}" class="doc-link text-decoration-none">
                Dr. Mohammad Faisal Ibn Kabir
            </a>

        </nav>

    </div>



    <section class="doctor-profile">

        <div class="doctor-card">

            <div class="row align-items-start">


                <!-- IMAGE -->
                <div class="col-lg-4 col-md-5 mb-4 mb-md-0">

                    <div class="doctor-image">

                        <img src="{{ asset('uploads/images/welcome_page/doctors/image_2.jpg') }}" class="magnify-img"
                            alt="Dr. Mohammad Faisal Ibn Kabir">

                        <a href="{{ route('contact') }}" class="book-btn">
                            Book Appointment
                        </a>

                    </div>

                </div>



                <!-- CONTENT -->
                <div class="col-lg-8 col-md-7 doctor-content">


                    <h2 class="doctor-name">
                        Dr. Mohammad Faisal Ibn Kabir
                    </h2>


                    <p class="doctor-degree">

                        MD (Cardiology)<br>
                        FCPS (Medicine)<br>
                        MBBS (Dhaka Medical College)

                    </p>


                    <p class="doctor-designation">

                        Professor & Head of the Department of Cardiology<br>
                        MH Samorita Medical College and Hospital

                    </p>


                    <p>

                        Fellowship in Cardiovascular Intervention & Electrophysiology<br>
                        Beijing, China

                    </p>


                    <p>

                        Clinical & Interventional Cardiologist & Medicine Specialist

                    </p>



                    <h5 class="section-title">Areas of Expertise</h5>

                    <ul class="expertise-list">

                        <li>Clinical Cardiology</li>
                        <li>Interventional Cardiology</li>
                        <li>Electrophysiology</li>
                        <li>Heart Disease Diagnosis & Treatment</li>
                        <li>Hypertension Management</li>
                        <li>Cardiac Risk Prevention</li>

                    </ul>



                    <h5 class="section-title">About Doctor</h5>


                    <p>

                        Dr. Mohammad Faisal Ibn Kabir is a highly experienced Clinical and Interventional Cardiologist
                        currently serving as the Professor and Head of the Department of Cardiology at MH Samorita Medical
                        College and Hospital.

                    </p>


                    <p>

                        He completed his MBBS from Dhaka Medical College and later obtained FCPS in Medicine and MD in
                        Cardiology. To further enhance his expertise in advanced cardiac care, he received specialized
                        fellowship training in Cardiovascular Intervention and Electrophysiology in Beijing, China.

                    </p>


                    <p>

                        Dr. Kabir has extensive experience in diagnosing and treating a wide range of cardiovascular
                        conditions including coronary artery disease, hypertension, heart rhythm disorders, and heart
                        failure. His clinical approach focuses on accurate diagnosis, modern treatment techniques, and
                        patient-centered care.

                    </p>


                    <p>

                        In addition to his academic and hospital responsibilities, he also serves as Director, Consultant
                        Cardiologist and Medical Advisor at the Cardiac, Diabetic, Nutrition & Rehab Centre with Foot Care
                        Lab under Authentic Diagnostic & Consultation Ltd.

                    </p>


                    <p>

                        Through his dedication to advanced cardiac care, research, and patient education, Dr. Kabir
                        continues to contribute significantly to improving cardiovascular health services in Bangladesh.

                    </p>
                </div>

            </div>

        </div>

    </section>


    @include('frontend.welcome_page.footer')

@endsection
