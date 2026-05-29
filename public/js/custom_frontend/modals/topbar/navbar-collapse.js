document.addEventListener("DOMContentLoaded", function () {
    const navbarCollapse = document.getElementById("navbarCollapse");
    const navbarToggler = document.querySelector(".navbar-toggler");
    const navbar = document.querySelector(".portfolio-navbar");

    if (!navbarCollapse || !navbarToggler || !navbar) {
        return;
    }

    /* =========================================
       BOOTSTRAP COLLAPSE INSTANCE
    ========================================= */

    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
        toggle: false,
    });

    /* =========================================
       UPDATE TOGGLER STATE
    ========================================= */

    function setNavbarState(isOpen) {
        navbarToggler.setAttribute("aria-expanded", isOpen ? "true" : "false");

        navbarToggler.classList.toggle("collapsed", !isOpen);

        navbar.classList.toggle("menu-open", isOpen);
    }

    /* =========================================
       OPEN NAVBAR
    ========================================= */

    function openNavbar() {
        bsCollapse.show();

        setNavbarState(true);
    }

    /* =========================================
       CLOSE NAVBAR
    ========================================= */

    function closeNavbar() {
        bsCollapse.hide();

        setNavbarState(false);
    }

    /* =========================================
       TOGGLER CLICK
    ========================================= */

    navbarToggler.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();

        const isOpen = navbarCollapse.classList.contains("show");

        if (isOpen) {
            closeNavbar();
        } else {
            openNavbar();
        }
    });

    /* =========================================
       BOOTSTRAP EVENTS
    ========================================= */

    navbarCollapse.addEventListener("show.bs.collapse", function () {
        setNavbarState(true);
    });

    navbarCollapse.addEventListener("hide.bs.collapse", function () {
        setNavbarState(false);
    });

    /* =========================================
       CLOSE WHEN MENU LINK CLICKED
    ========================================= */

    document
        .querySelectorAll(
            "#navbarCollapse .nav-link, #navbarCollapse .dropdown-item",
        )
        .forEach(function (link) {
            link.addEventListener("click", function () {
                if (window.innerWidth < 992) {
                    closeNavbar();
                }
            });
        });

    /* =========================================
       CLOSE WHEN CLICK OUTSIDE
    ========================================= */

    function handleOutsideClick(event) {
        if (window.innerWidth >= 992) {
            return;
        }

        const isOpen = navbarCollapse.classList.contains("show");

        if (!isOpen) {
            return;
        }

        const clickedInsideNavbar = navbar.contains(event.target);

        if (!clickedInsideNavbar) {
            closeNavbar();
        }
    }

    document.addEventListener("click", handleOutsideClick);

    document.addEventListener("touchstart", handleOutsideClick);

    /* =========================================
       RESET ON WINDOW RESIZE
    ========================================= */

    window.addEventListener("resize", function () {
        if (window.innerWidth >= 992) {
            navbarCollapse.classList.remove("show");

            setNavbarState(false);
        }
    });
});
