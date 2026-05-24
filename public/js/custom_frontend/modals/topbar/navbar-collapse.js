document.addEventListener("DOMContentLoaded", function () {
    const navbarCollapse = document.getElementById("navbarCollapse");
    const navbarToggler = document.querySelector(".navbar-toggler");
    const navbar = document.querySelector(".portfolio-navbar");

    if (!navbarCollapse) return;

    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
        toggle: false,
    });

    /* =========================
       CLOSE WHEN MENU CLICKED
    ========================== */
    document
        .querySelectorAll(
            "#navbarCollapse .nav-link, #navbarCollapse .dropdown-item",
        )
        .forEach(function (link) {
            link.addEventListener("click", function () {
                if (window.innerWidth < 992) {
                    bsCollapse.hide();
                }
            });
        });

    /* =========================
       CLOSE WHEN CLICK OUTSIDE
    ========================== */
    document.addEventListener("click", function (event) {
        if (window.innerWidth >= 992) return;

        const isInsideNavbar = navbar.contains(event.target);
        const isToggler = navbarToggler.contains(event.target);
        const isNavbarOpen = navbarCollapse.classList.contains("show");

        if (!isInsideNavbar && !isToggler && isNavbarOpen) {
            bsCollapse.hide();
        }
    });

    /* =========================
       CLOSE ON TOUCH OUTSIDE
    ========================== */
    document.addEventListener("touchstart", function (event) {
        if (window.innerWidth >= 992) return;

        const isInsideNavbar = navbar.contains(event.target);
        const isToggler = navbarToggler.contains(event.target);
        const isNavbarOpen = navbarCollapse.classList.contains("show");

        if (!isInsideNavbar && !isToggler && isNavbarOpen) {
            bsCollapse.hide();
        }
    });
});
