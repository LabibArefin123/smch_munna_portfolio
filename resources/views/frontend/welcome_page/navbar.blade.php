<nav class="navbar navbar-expand-lg portfolio-navbar fixed-top">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand brand-text-wrap" href="{{ route('welcome') }}">

            <div class="brand-name">
                Dr. Mohammad Faisal Ibn Kabir
            </div>

            <div class="brand-degree">
                Professor & Head – Cardiology
            </div>

        </a>


        <!-- MOBILE BUTTON -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- MENU -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
            <ul class="navbar-nav portfolio-menu">

                <li class="nav-item">
                    <a href="{{ route('welcome') }}"
                        class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                        About Doctor
                    </a>
                </li>

                <li class="nav-item dropdown">

                    <div class="d-flex align-items-center gap-1">

                        <!-- MAIN LINK (clickable) -->
                        <a href="{{ route('service') }}"
                            class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}">
                            Services
                        </a>

                        <!-- DROPDOWN TOGGLE (separate click) -->
                        <a href="#" class="nav-link dropdown-toggle p-0" id="servicesDropdown" role="button"
                            aria-expanded="false">
                        </a>

                    </div>

                    <ul class="dropdown-menu text-center" aria-labelledby="servicesDropdown">

                        <li>
                            <a class="dropdown-item" href="{{ route('cardiology_page_1') }}">
                                <i class="bi bi-heart-pulse"></i> Heart Disease Diagnosis
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('cardiology_page_2') }}">
                                <i class="bi bi-person-check"></i> Cardiology Consultation
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('cardiology_page_3') }}">
                                <i class="bi bi-activity"></i> Interventional Cardiology
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('cardiology_page_4') }}">
                                <i class="bi bi-graph-up-arrow"></i> Hypertension Management
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('cardiology_page_5') }}">
                                <i class="bi bi-shield-check"></i> Preventive Cardiology
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('cardiology_page_6') }}">
                                <i class="bi bi-clipboard2-pulse"></i> Cardiac Risk Assessment
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('gallery') }}"
                        class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">
                        Gallery
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contact') }}"
                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                        Contact
                    </a>
                </li>

            </ul>
        </div>


        <!-- CTA -->
        <a href="{{ route('contact') }}" class="btn portfolio-btn ms-lg-3">
            Book Appointment
        </a>

    </div>
</nav>
