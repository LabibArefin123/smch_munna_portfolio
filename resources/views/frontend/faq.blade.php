@extends('frontend.layouts.app')

@section('title', 'Frequently Asked Questions | Dr. Asif Almas Haque')

@section('meta')

    <meta name="description"
        content="Frequently asked questions about heart disease, cardiology consultation, hypertension, ECG, and cardiovascular treatment with Dr. Mohammad Faisal Ibn Kabir in Dhaka.">

    <meta name="keywords"
        content="cardiologist FAQ Bangladesh, heart specialist Dhaka, heart disease questions, cardiology consultation Bangladesh">

    <meta property="og:title" content="Frequently Asked Questions | Dr. Mohammad Faisal Ibn Kabir">

    <meta property="og:description"
        content="Common questions answered about heart disease, cardiology consultation, diagnosis, and treatment by Dr. Mohammad Faisal Ibn Kabir.">

    <meta property="og:image" content="{{ asset('uploads/images/welcome_page/doctors/image_2.jpg') }}">

    <meta property="og:type" content="website">

    <meta property="og:url" content="{{ url()->current() }}">


    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="Frequently Asked Questions | Dr. Mohammad Faisal Ibn Kabir">

    <meta name="twitter:description"
        content="Answers to common questions about heart disease, cardiology consultation, hypertension management, and cardiovascular care.">

    <meta name="twitter:image" content="{{ asset('uploads/images/welcome_page/doctors/image_2.jpg') }}">
    <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "FAQPage",
 "mainEntity": [
 {
 "@type": "Question",
 "name": "What heart conditions do you commonly treat?",
 "acceptedAnswer": {
 "@type": "Answer",
 "text": "Dr. Mohammad Faisal Ibn Kabir treats various cardiovascular conditions including coronary artery disease, hypertension, heart failure, arrhythmias, and other heart-related disorders."
 }
 },
 {
 "@type": "Question",
 "name": "When should I consult a cardiologist?",
 "acceptedAnswer": {
 "@type": "Answer",
 "text": "You should consult a cardiologist if you experience symptoms such as chest pain, shortness of breath, palpitations, dizziness, high blood pressure, or if you have a family history of heart disease."
 }
 },
 {
 "@type": "Question",
 "name": "Do you provide preventive heart care?",
 "acceptedAnswer": {
 "@type": "Answer",
 "text": "Yes. Preventive cardiology is an important part of treatment. Patients receive risk assessment, cholesterol management, blood pressure monitoring, and lifestyle guidance to prevent heart disease."
 }
 },
 {
 "@type": "Question",
 "name": "What diagnostic tests are available for heart disease?",
 "acceptedAnswer": {
 "@type": "Answer",
 "text": "Common diagnostic tests include ECG, echocardiography, stress testing, blood pressure monitoring, and other advanced cardiac evaluations depending on the patient’s condition."
 }
 },
 {
 "@type": "Question",
 "name": "How can I book an appointment?",
 "acceptedAnswer": {
 "@type": "Answer",
 "text": "Appointments can be booked through the website contact page or by calling the chamber directly."
 }
 }
 ]
}
</script>
@endsection

<link rel="stylesheet" href="{{ asset('css/frontend/faq/custom_faq.css') }}">

@section('content')

    @include('frontend.welcome_page.header')

    <!-- Banner -->
    <div class="doctor-banner" style="background-image: url('{{ asset('uploads/images/welcome_page/cover.png') }}');">
        <nav class="breadcrumb-custom">
            <a href="{{ route('welcome') }}" class="doc-link text-decoration-none">Home</a>
            <span>></span>
            <a href="{{ route('faq') }}" class="doc-link text-decoration-none">FAQ</a>
        </nav>
    </div>

    <section class="doctor-profile">
        <div class="doctor-card">

            <h2 class="doctor-name text-center mb-5">
                Frequently Asked Questions
            </h2>

            <div class="faq-container">

                <!-- FAQ Item -->
                <div class="faq-item">
                    <div class="faq-question">
                        What heart conditions do you commonly treat?
                        <span class="faq-icon">+</span>
                    </div>

                    <div class="faq-answer">
                        Dr. Mohammad Faisal Ibn Kabir treats a wide range of cardiovascular
                        conditions including coronary artery disease, hypertension, heart
                        failure, arrhythmias, and other heart-related disorders.
                    </div>
                </div>


                <div class="faq-item">
                    <div class="faq-question">
                        When should I consult a cardiologist?
                        <span class="faq-icon">+</span>
                    </div>

                    <div class="faq-answer">
                        You should consult a cardiologist if you experience symptoms such
                        as chest pain, shortness of breath, irregular heartbeat, dizziness,
                        or persistent high blood pressure.
                    </div>
                </div>


                <div class="faq-item">
                    <div class="faq-question">
                        Do you provide preventive heart care?
                        <span class="faq-icon">+</span>
                    </div>

                    <div class="faq-answer">
                        Yes. Preventive cardiology focuses on identifying risk factors
                        early and helping patients manage cholesterol, blood pressure,
                        diabetes, and lifestyle habits to prevent heart disease.
                    </div>
                </div>


                <div class="faq-item">
                    <div class="faq-question">
                        What tests are used to diagnose heart disease?
                        <span class="faq-icon">+</span>
                    </div>

                    <div class="faq-answer">
                        Heart disease diagnosis may include ECG, echocardiography,
                        blood pressure monitoring, stress tests, and other cardiac
                        evaluations depending on the patient’s condition.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        How can I book an appointment?
                        <span class="faq-icon">+</span>
                    </div>

                    <div class="faq-answer">
                        You can book an appointment through the website contact
                        page or by calling the chamber directly.
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('frontend.welcome_page.footer')

    <!-- FAQ JavaScript -->
    <script>
        document.querySelectorAll(".faq-question").forEach(item => {
            item.addEventListener("click", function() {
                const parent = this.parentElement;
                const answer = parent.querySelector(".faq-answer");
                const icon = this.querySelector(".faq-icon");

                // Close other items
                document.querySelectorAll(".faq-item").forEach(faq => {
                    if (faq !== parent) {
                        faq.classList.remove("active");
                        faq.querySelector(".faq-answer").style.maxHeight = null;
                        faq.querySelector(".faq-icon").textContent = "+";
                    }
                });

                // Toggle current
                parent.classList.toggle("active");

                if (parent.classList.contains("active")) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                    icon.textContent = "–";
                } else {
                    answer.style.maxHeight = null;
                    icon.textContent = "+";
                }
            });
        });
    </script>

@endsection
