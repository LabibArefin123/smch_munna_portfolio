<!-- Footer -->
<footer class="footer bg-dark text-white pt-5">
    <link rel="stylesheet" href="{{ asset('css/frontend/custom_footer.css') }}">

    <div class="container">
        <div class="row g-4">

            <!-- Doctor Overview -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold text-warning mb-3">
                    Dr. Mohammad Faisal Ibn Kabir
                </h5>

                <p class="small">
                    Professor & Head, Department of Cardiology<br>
                    MH Samorita Medical College & Hospital
                </p>

                <ul class="list-unstyled small mt-3">
                    <li>MD (Cardiology)</li>
                    <li>FCPS (Medicine)</li>
                    <li>MBBS (Dhaka Medical College)</li>
                    <li>Fellowship – Cardiovascular Intervention (China)</li>
                </ul>

            </div>


            <!-- Professional Profile -->
            <div class="col-lg-3 col-md-6">

                <h6 class="fw-bold text-warning mb-3">Professional Profile</h6>

                <ul class="list-unstyled small footer-links">

                    <li>
                        <a href="{{ route('about') }}">Doctor Profile</a>
                    </li>

                    <li>
                        <a href="{{ route('page_1') }}">Education & Training</a>
                    </li>

                    <li>
                        <a href="{{ route('page_2') }}">International Conferences</a>
                    </li>

                    <li>
                        <a href="{{ route('page_3') }}">Journal Publications</a>
                    </li>

                    <li>
                        <a href="{{ route('page_4') }}">Professional Membership</a>
                    </li>

                </ul>

            </div>


            <!-- Cardiology Services -->
            <div class="col-lg-3 col-md-6">

                <h6 class="fw-bold text-warning mb-3">Cardiology Services</h6>

                <ul class="list-unstyled small footer-links">

                    <li>Heart Disease Diagnosis</li>

                    <li>Cardiology Consultation</li>

                    <li>Interventional Cardiology</li>

                    <li>Hypertension Management</li>

                    <li>Preventive Cardiology</li>

                    <li>Cardiac Risk Assessment</li>

                </ul>

            </div>


            <!-- Contact -->
            <div class="col-lg-3 col-md-6">

                <h6 class="fw-bold text-warning mb-3">Contact Information</h6>

                <p class="small mb-2">
                    <i class="bi bi-geo-alt-fill me-2"></i>
                    MH Samorita Medical College & Hospital<br>
                    Dhaka, Bangladesh
                </p>

                <p class="small mb-2">
                    <i class="bi bi-telephone-fill me-2"></i>
                    +8801XXXXXXXXX
                </p>

                <p class="small mb-3">
                    <i class="bi bi-envelope-fill me-2"></i>
                    info@samorita.com
                </p>


                <!-- Social -->
                <div class="footer-social">

                    <a href="#" target="_blank">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#" target="_blank">
                        <i class="bi bi-youtube"></i>
                    </a>

                    <a href="#" target="_blank">
                        <i class="bi bi-linkedin"></i>
                    </a>

                </div>

            </div>

        </div>


        <!-- Chamber Hours -->
        <div class="row mt-5 pt-3 border-top border-secondary">

            <div class="col-12 text-center">

                <h6 class="fw-bold text-warning mb-3">
                    Chamber Hours
                </h6>

                <div class="d-flex flex-wrap justify-content-center gap-4 small">

                    <div>Sat <strong>5PM – 9PM</strong></div>

                    <div>Sun <strong>5PM – 9PM</strong></div>

                    <div>Mon <strong>5PM – 9PM</strong></div>

                    <div>Tue <strong>5PM – 9PM</strong></div>

                    <div>Wed <strong>5PM – 9PM</strong></div>

                    <div>Thu <strong>5PM – 9PM</strong></div>

                    <div class="text-danger">Friday Off</div>

                </div>

            </div>

        </div>


        <!-- Copyright -->
        <div class="text-center small mt-4 pt-3 border-top border-secondary">

            © {{ date('Y') }} Dr. Mohammad Faisal Ibn Kabir. All Rights Reserved.

        </div>

    </div>
</footer>
