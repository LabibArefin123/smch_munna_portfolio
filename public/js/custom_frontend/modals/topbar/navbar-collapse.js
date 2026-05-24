document.addEventListener("DOMContentLoaded", function () {
    const navbarCollapse = document.getElementById("navbarCollapse");

    if (!navbarCollapse) return;

    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
        toggle: false,
    });

    /* ALL NAV LINKS */
    document
        .querySelectorAll(
            "#navbarCollapse .nav-link, #navbarCollapse .dropdown-item",
        )
        .forEach(function (link) {
            link.addEventListener("click", function () {
                /* mobile only */
                if (window.innerWidth < 992) {
                    bsCollapse.hide();
                }
            });
        });
});
