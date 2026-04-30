@extends('frontend.layouts.app')

@section('title', 'Contact | Dr. Mohammad Faisal Ibn Kabir')

@section('meta')
    <meta name="description"
        content="Contact Dr. Mohammad Faisal Ibn Kabir, Professor & Head of Cardiology at MH Samorita Medical College and Hospital. Book an appointment for cardiology consultation in Dhaka.">
    <meta name="keywords"
        content="Dr Mohammad Faisal Ibn Kabir, cardiologist Dhaka, heart specialist Bangladesh, cardiology consultation Dhaka">
    <meta property="og:title" content="Contact | Dr. Mohammad Faisal Ibn Kabir">
    <meta property="og:description"
        content="Book an appointment with Dr. Mohammad Faisal Ibn Kabir, Clinical & Interventional Cardiologist in Dhaka.">
    <meta property="og:image" content="{{ asset('uploads/images/welcome_page/doctors/image_2.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact | Dr. Mohammad Faisal Ibn Kabir">
    <meta name="twitter:description"
        content="Consult Dr. Mohammad Faisal Ibn Kabir for cardiology and heart disease treatment in Dhaka.">
    <meta name="twitter:image" content="{{ asset('uploads/images/welcome_page/doctors/image_2.jpg') }}">
    <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "Physician",
 "name": "Dr. Mohammad Faisal Ibn Kabir",
 "medicalSpecialty": "Cardiology",
 "jobTitle": "Professor & Head of Cardiology",
 "worksFor": "MH Samorita Medical College and Hospital",
 "address": {
   "@type": "PostalAddress",
   "addressLocality": "Dhaka",
   "addressCountry": "BD"
 },
 "telephone": "+8801732189966",
 "url": "{{ url()->current() }}"
}
</script>
@endsection

@section('content')
    @include('frontend.welcome_page.header')

    <!-- Banner -->
    <div class="contact-banner" style="background-image:url('{{ asset('uploads/images/welcome_page/cover.png') }}')">

        <div class="contact-overlay"></div>

        <div class="contact-title">
            <h1>Contact Us</h1>
            <p>
                Get in touch for appointments and consultations
            </p>
        </div>

    </div>
    <section class="contact-section">
        <div class="contact-container">
            <!-- Appointment Form -->
            <div class="contact-form-wrapper">
                <h2 class="contact-title">
                    Book a Consultation
                </h2>

                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <input type="hidden" name="type" value="contact">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Full Name</label>
                            <input name="name" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Phone Number</label>
                            <input name="phone" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Subject</label>
                            <input name="subject" class="form-control">
                        </div>

                        <div class="col-12">
                            <label>Message</label>
                            <textarea name="message" rows="4" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-success w-100">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info-wrapper">
                <h3>Doctor Information</h3>

                <div class="info-item">
                    <strong>Doctor</strong>
                    <p>Dr. Mohammad Faisal Ibn Kabir</p>
                </div>

                <div class="info-item">
                    <strong>Specialty</strong>
                    <p>Clinical & Interventional Cardiologist</p>
                </div>

                <div class="info-item">
                    <strong>Hospital</strong>
                    <p>MH Samorita Medical College and Hospital</p>
                </div>

                <div class="info-item">
                    <strong>Phone</strong>
                    <p>01732189966</p>
                </div>

                <div class="info-item">
                    <strong>Email</strong>
                    <p>mfikabir1980@gmail.com</p>
                </div>

                <div class="info-item">
                    <strong>Consultation Locations</strong>
                    <p>Authentic Diagnostic & Consultation Ltd.</p>
                    <p>MH Samorita Medical College & Hospital</p>
                    <p>Popular Diagnostic Centre (Badda)</p>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.welcome_page.footer')
@endsection
