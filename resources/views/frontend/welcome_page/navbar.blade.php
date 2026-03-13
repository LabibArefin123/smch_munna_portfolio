<link rel="stylesheet" href="{{ asset('css/frontend/custom_navbar.css') }}">

<nav class="navbar navbar-expand-lg portfolio-navbar fixed-top">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('welcome') }}">
            <img src="{{ asset('uploads/images/icon.png') }}" alt="Dr Asif Logo" class="brand-logo">

            <div class="brand-text">
                <div class="brand-name">
                    Dr. Asif Almas Haque
                </div>
                <div class="brand-degree">
                    Consultant Colorectal & Laparoscopic Surgeon
                </div>
            </div>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span> </button>
        <!-- Menu -->

        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
            <ul class="navbar-nav portfolio-menu">
                <li class="nav-item"> <a href="{{ route('welcome') }}"
                        class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}"> Home </a> </li>
                <li class="nav-item"> <a href="{{ route('about') }}"
                        class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"> About </a> </li>
                <li class="nav-item dropdown" id="profile_dropdown"> <a href="#"
                        class="nav-link custom-link dropdown-toggle" role="button" aria-expanded="false"> Professional
                        Profile </a>
                    <ul class="dropdown-menu">
                        <li> <a href="{{ route('page_1') }}"
                                class="dropdown-item {{ request()->routeIs('page_1') ? 'active' : '' }}"> Educational
                                Background </a> </li>
                        <li> <a href="{{ route('page_2') }}"
                                class="dropdown-item {{ request()->routeIs('page_2') ? 'active' : '' }}"> International
                                Conference </a> </li>
                        <li> <a href="{{ route('page_3') }}"
                                class="dropdown-item {{ request()->routeIs('page_3') ? 'active' : '' }}"> Journal
                                Publication </a> </li>
                        <li> <a href="{{ route('page_4') }}"
                                class="dropdown-item {{ request()->routeIs('page_4') ? 'active' : '' }}"> Membership
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item dropdown" id="conditions_dropdown"> <a href="#"
                        class="nav-link custom-link dropdown-toggle" role="button" aria-expanded="false"> Conditions We
                        Treat </a>
                    <ul class="dropdown-menu">
                        <li> <a href="{{ route('piles') }}"
                                class="dropdown-item {{ request()->routeIs('piles') ? 'active' : '' }}"> Piles </a>
                        </li>
                        <li> <a href="{{ route('fissure') }}"
                                class="dropdown-item {{ request()->routeIs('fissure') ? 'active' : '' }}"> Fissure </a>
                        </li>
                        <li> <a href="{{ route('fistula') }}"
                                class="dropdown-item {{ request()->routeIs('fistula') ? 'active' : '' }}"> Fistula </a>
                        </li>
                        <li> <a href="{{ route('ibs') }}"
                                class="dropdown-item {{ request()->routeIs('ibs') ? 'active' : '' }}"> Irritable Bowel
                                Syndrome (IBS) </a> </li>
                        <li> <a href="{{ route('colorectal_cancer') }}"
                                class="dropdown-item {{ request()->routeIs('colorectal_cancer') ? 'active' : '' }}">
                                Colorectal Cancer </a> </li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('gallery') }}"
                        class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}"> Gallery </a> </li>
                <li class="nav-item"> <a href="{{ route('book') }}"
                        class="nav-link {{ request()->routeIs('book') ? 'active' : '' }}"> Book </a> </li>
                <li class="nav-item"> <a href="{{ route('faq') }}"
                        class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}"> FAQ </a> </li>
                <li class="nav-item"> <a href="{{ route('contact') }}"
                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"> Contact </a> </li>
            </ul>
        </div>

        <!-- CTA -->
        <a href="{{ route('contact') }}" class="btn portfolio-btn ml-lg-3">
            Book Appointment
        </a>
    </div>

    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const dropdown = document.getElementById('conditions_dropdown');
        const toggleLink = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');

        // Toggle on click
        toggleLink.addEventListener('click', function(e) {
            e.preventDefault();

            const isOpen = menu.classList.contains('show');

            // Close any other open dropdowns
            document.querySelectorAll('.dropdown-menu.show').forEach(el => {
                el.classList.remove('show');
            });

            // Toggle current dropdown
            menu.classList.toggle('show', !isOpen);
            toggleLink.setAttribute('aria-expanded', !isOpen);
        });

        // Close when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                menu.classList.remove('show');
                toggleLink.setAttribute('aria-expanded', 'false');
            }
        });

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const dropdown = document.getElementById('profile_dropdown');
        const toggleLink = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');

        // Toggle on click
        toggleLink.addEventListener('click', function(e) {
            e.preventDefault();

            const isOpen = menu.classList.contains('show');

            // Close any other open dropdowns
            document.querySelectorAll('.dropdown-menu.show').forEach(el => {
                el.classList.remove('show');
            });

            // Toggle current dropdown
            menu.classList.toggle('show', !isOpen);
            toggleLink.setAttribute('aria-expanded', !isOpen);
        });

        // Close when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                menu.classList.remove('show');
                toggleLink.setAttribute('aria-expanded', 'false');
            }
        });

    });
</script>
