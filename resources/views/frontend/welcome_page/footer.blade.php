<footer class="footer-pro">
    <div class="container">
        <div class="row g-5">
            <!-- Doctor Brand -->

            <div class="col-lg-4">
                <h4 class="footer-doctor-name">
                    Dr. Mohammad Faisal Ibn Kabir
                </h4>
                <p class="footer-title">
                    Professor & Head, Department of Cardiology
                </p>
                <p class="footer-hospital">
                   MH Samorita Hospital & Medical College
                </p>

                <div class="footer-degree">

                    <span>MD (Cardiology)</span>
                    <span>FCPS (Medicine)</span>
                    <span>MBBS – Dhaka Medical College</span>
                    <span>Fellowship – Cardiovascular Intervention (China)</span>

                </div>

            </div>


            <!-- Quick Links -->

            <div class="col-lg-2 col-md-6">
                <h6 class="footer-heading">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">Doctor Profile</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('service') }}">Service</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>


            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-heading">Cardiology Services</h6>
                <ul class="footer-links">
                    <li><a href="{{ route('cardiology_page_1') }}">Heart Disease Diagnosis</a></li>
                    <li><a href="{{ route('cardiology_page_2') }}">Cardiology Consultation</a></li>
                    <li><a href="{{ route('cardiology_page_3') }}">Interventional Cardiology</a></li>
                    <li><a href="{{ route('cardiology_page_4') }}">Hypertension Management</a></li>
                    <li><a href="{{ route('cardiology_page_5') }}">Preventive Cardiology</a></li>
                    <li><a href="{{ route('cardiology_page_6') }}">Cardiac Risk Assessment</a></li>
                </ul>
            </div>


            <!-- Contact -->
            <div class="col-lg-3">
                <h6 class="footer-heading">Contact</h6>
                <p class="footer-contact">
                    <i class="bi bi-geo-alt"></i>
                    Tejgaon, Dhaka – Bangladesh
                </p>
                <p class="footer-contact">
                    <i class="bi bi-telephone"></i>
                    +8801755697173
                </p>
                <p class="footer-contact">
                    <i class="bi bi-envelope"></i>
                    mfikabir1980@gmail.com
                </p>
                <div class="footer-social">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                </div>
                <a href="{{ route('contact') }}" class="footer-appointment-btn">
                    Book Appointment
                </a>
            </div>
        </div>


        <!-- Chamber Schedule -->
        <div class="footer-chamber">
            <h5 class="chamber-title">
                Consultation Chambers
            </h5>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="chamber-card">
                        <h6>Authentic Diagnostic & Consultation Ltd</h6>
                        <p>Chankharphul, Dhaka</p>
                        <span>Sat • Mon • Wed</span>
                        <strong>3:30 PM – 6:30 PM</strong>
                        <span>Sun • Tue • Thu</span>
                        <strong>3:30 PM – 8:00 PM</strong>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="chamber-card">
                        <h6>MH Samorita Hospital & Medical College</h6>
                        <p>Tejgaon, Dhaka</p>
                        <span>Morning</span>
                        <strong>9:00 AM – 1:30 PM</strong>
                        <span>Sun • Tue • Thu (Night)</span>
                        <strong>8:30 PM – 10:00 PM</strong>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="chamber-card">
                        <h6>Popular Diagnostic Center</h6>
                        <p>North Badda, Dhaka</p>
                        <span>Sun • Tue • Thu</span>
                        <strong>8:00 PM – 10:00 PM</strong>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bottom -->
        <div class="footer-bottom">
            © {{ date('Y') }} Dr. Mohammad Faisal Ibn Kabir. All Rights Reserved.
        </div>
    </div>
</footer>
