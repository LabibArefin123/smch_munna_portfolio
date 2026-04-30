document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll(".nav-item.dropdown");

    dropdowns.forEach((dropdown) => {
        const toggle = dropdown.querySelector(".dropdown-toggle");
        const menu = dropdown.querySelector(".dropdown-menu");

        toggle.addEventListener("click", function (e) {
            e.preventDefault();

            // Close other dropdowns
            document
                .querySelectorAll(".dropdown-menu.show")
                .forEach((openMenu) => {
                    if (openMenu !== menu) {
                        openMenu.classList.remove("show");
                    }
                });

            // Toggle current
            menu.classList.toggle("show");

            // Rotate arrow
            const expanded = toggle.getAttribute("aria-expanded") === "true";
            toggle.setAttribute("aria-expanded", !expanded);
        });
    });

    // Close when clicking outside
    document.addEventListener("click", function (e) {
        if (!e.target.closest(".dropdown")) {
            document.querySelectorAll(".dropdown-menu.show").forEach((menu) => {
                menu.classList.remove("show");
            });

            document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
                toggle.setAttribute("aria-expanded", false);
            });
        }
    });
});
