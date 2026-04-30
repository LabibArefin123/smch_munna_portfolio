@extends('frontend.layouts.app')
@vite('resources/scss/frontend/base/reset.scss')
@section('title', 'Heart Disease Diagnosis')
@section('content')
    @include('frontend.welcome_page.header')

    <section class="service-page-one">
        <div class="service-container-one">

            <div class="service-header-one">
                <h1>Heart Disease Diagnosis</h1>
                <p>Accurate and early detection of cardiovascular conditions.</p>
            </div>

            <div class="service-card-one">

                <p>
                    Heart disease remains one of the leading causes of death worldwide. Early detection plays a critical
                    role in improving survival rates and ensuring better treatment outcomes.
                </p>

                <p>
                    Our diagnostic services are designed to identify cardiovascular conditions at the earliest possible
                    stage using modern medical technology and expert clinical evaluation.
                </p>

                <h4>Understanding Heart Disease</h4>

                <p>
                    Heart disease includes a range of conditions such as coronary artery disease, arrhythmias, and heart
                    valve disorders.
                </p>

                <p>
                    Each condition requires a specific diagnostic approach to ensure accurate identification and treatment
                    planning.
                </p>

                <h4>Symptoms to Watch</h4>
                <ul>
                    <li>Chest pain or discomfort</li>
                    <li>Shortness of breath</li>
                    <li>Fatigue</li>
                    <li>Irregular heartbeat</li>
                    <li>Dizziness or fainting</li>
                </ul>

                <h4>Diagnostic Approach</h4>
                <ul>
                    <li>Clinical evaluation and detailed patient history</li>
                    <li>Electrocardiogram (ECG)</li>
                    <li>Echocardiography</li>
                    <li>Blood pressure monitoring</li>
                    <li>Cholesterol testing</li>
                    <li>Advanced imaging techniques</li>
                </ul>

                <p>
                    Each diagnostic test provides valuable insights into heart function, structure, and overall
                    cardiovascular health.
                </p>

                <h4>Advanced Technology</h4>

                <p>
                    We use state-of-the-art diagnostic tools to ensure accurate and reliable results. These include digital
                    ECG machines, high-resolution imaging, and real-time monitoring systems.
                </p>

                <p>
                    Technology allows faster diagnosis and reduces the chances of human error.
                </p>

                <h4>Importance of Early Detection</h4>

                <p>
                    Detecting heart disease early allows for timely medical intervention, reducing complications and
                    improving long-term health outcomes.
                </p>

                <p>
                    Preventive care is always more effective than emergency treatment.
                </p>

                <h4>Risk Factors</h4>
                <ul>
                    <li>Smoking</li>
                    <li>High cholesterol</li>
                    <li>High blood pressure</li>
                    <li>Diabetes</li>
                    <li>Obesity</li>
                    <li>Sedentary lifestyle</li>
                </ul>

                <h4>Preventive Measures</h4>

                <p>
                    Maintaining a healthy lifestyle can significantly reduce the risk of heart disease.
                </p>

                <ul>
                    <li>Regular exercise</li>
                    <li>Balanced diet</li>
                    <li>Routine health checkups</li>
                    <li>Stress management</li>
                </ul>

                <h4>Patient Care</h4>

                <p>
                    We prioritize patient comfort and ensure that every diagnostic procedure is explained clearly before
                    execution.
                </p>

                <p>
                    Our goal is to provide a stress-free and informative diagnostic experience.
                </p>

                {{-- REPEATED STRUCTURED CONTENT TO REACH LARGE SIZE --}}

                @for ($i = 0; $i < 1; $i++)
                    <h4>Additional Diagnostic Insight {{ $i + 1 }}</h4>
                    <p>
                        Continuous monitoring and evaluation help in identifying subtle changes in heart activity. These
                        insights are essential for long-term cardiovascular health management.
                    </p>

                    <ul>
                        <li>Routine screening improves accuracy</li>
                        <li>Early intervention reduces risk</li>
                        <li>Technology enhances detection</li>
                    </ul>
                @endfor

                <p>
                    The ultimate goal of our service is to ensure early detection, accurate diagnosis, and effective
                    treatment planning for every patient.
                </p>

            </div>
        </div>
    </section>

    @include('frontend.welcome_page.footer')
@endsection
