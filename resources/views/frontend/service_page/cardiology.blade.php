@extends('frontend.layouts.app')
@vite('resources/scss/frontend/base/reset.scss')
@section('title', 'Cardiology Services')

@section('content')
    @include('frontend.welcome_page.header')

    <section class="service-page-two">
        <div class="service-container-two">

            <div class="service-header-two">
                <h1>Cardiology Services</h1>
                <p>Comprehensive heart care services with modern medical approaches.</p>
            </div>

            <div class="service-card-two">

                <p>
                    Our cardiology department is dedicated to providing comprehensive care for patients with
                    heart-related conditions. From early diagnosis to advanced treatment and long-term
                    management, we focus on delivering high-quality medical services tailored to individual needs.
                </p>

                <p>
                    Cardiovascular health is essential for overall well-being, and our team of specialists works
                    closely with patients to ensure accurate diagnosis, effective treatment, and continuous care.
                    We combine modern medical technology with clinical expertise to achieve the best outcomes.
                </p>

                <h4>Scope of Our Cardiology Services</h4>

                <p>
                    We offer a wide range of cardiology services designed to address various heart conditions.
                    Each service is structured to provide both preventive and corrective care, ensuring patients
                    receive the attention they need at every stage of their health journey.
                </p>

                <ul>
                    <li>Diagnosis and management of heart diseases</li>
                    <li>Preventive cardiology and risk assessment</li>
                    <li>Advanced cardiac consultation and second opinions</li>
                    <li>Monitoring and management of chronic conditions</li>
                    <li>Lifestyle and dietary guidance for heart health</li>
                </ul>

                <h4>Personalized Patient Care</h4>

                <p>
                    Every patient is unique, and we believe that treatment plans should reflect individual health
                    conditions and lifestyle factors. Our cardiology services are designed to provide personalized
                    care, ensuring that each patient receives a treatment plan suited to their specific needs.
                </p>

                <p>
                    We take the time to understand patient history, symptoms, and risk factors before recommending
                    any diagnostic or treatment procedure. This approach helps improve accuracy and enhances
                    patient confidence.
                </p>

                <h4>Preventive Cardiology</h4>

                <p>
                    Prevention is a key component of heart health. Our preventive cardiology services focus on
                    identifying risk factors early and implementing strategies to reduce the likelihood of
                    developing serious heart conditions.
                </p>

                <ul>
                    <li>Regular health screenings and checkups</li>
                    <li>Blood pressure and cholesterol monitoring</li>
                    <li>Diabetes management support</li>
                    <li>Smoking cessation guidance</li>
                    <li>Weight management programs</li>
                </ul>

                <h4>Advanced Consultation</h4>

                <p>
                    Our cardiology team provides expert consultations for complex heart conditions. Whether you
                    require a second opinion or detailed evaluation, our specialists ensure thorough analysis
                    and clear communication regarding your condition and treatment options.
                </p>

                <p>
                    We emphasize transparency and patient education so that individuals can make informed
                    decisions about their health.
                </p>

                <h4>Long-Term Management</h4>

                <p>
                    Managing heart conditions requires continuous monitoring and follow-up care. Our services
                    include long-term management plans that focus on maintaining heart health and preventing
                    complications.
                </p>

                <ul>
                    <li>Routine follow-up consultations</li>
                    <li>Medication management</li>
                    <li>Lifestyle modification support</li>
                    <li>Rehabilitation and recovery guidance</li>
                </ul>

                <h4>Our Commitment</h4>

                <p>
                    We are committed to delivering high-quality cardiology services that prioritize patient
                    safety, comfort, and satisfaction. Our goal is to help patients achieve better heart health
                    through accurate diagnosis, effective treatment, and ongoing care.
                </p>

                <p>
                    With a patient-centered approach and a focus on medical excellence, we aim to build long-term
                    relationships with our patients and support them throughout their healthcare journey.
                </p>

            </div>

        </div>
    </section>

    @include('frontend.welcome_page.footer')
@endsection
