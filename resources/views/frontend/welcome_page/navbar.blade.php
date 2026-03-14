<link rel="stylesheet" href="{{ asset('css/frontend/custom_navbar.css') }}">

<nav class="navbar navbar-expand-lg portfolio-navbar fixed-top">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('welcome') }}">

            <img src="{{ asset('uploads/images/icon.png') }}" class="brand-logo">

            <div class="brand-text">

                <div class="brand-name">
                    Dr. Mohammad Faisal Ibn Kabir
                </div>

                <div class="brand-degree">
                    Professor & Head – Cardiology
                </div>

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

                <li class="nav-item">

                    <a href="{{ route('service') }}"
                        class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}">
                        Services
                    </a>

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
