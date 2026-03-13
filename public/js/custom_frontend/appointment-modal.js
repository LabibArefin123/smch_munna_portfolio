document.addEventListener("DOMContentLoaded", function () {
    const modal = document.querySelector(".custom-appointment-modal");
    const openBtn = document.querySelector(".portfolio-btn");
    const closeBtn = document.querySelector(".close-modal");

    if (!modal) return;

    // Open Modal
    if (openBtn) {
        openBtn.addEventListener("click", function (e) {
            e.preventDefault();
            modal.classList.add("active");
            document.body.style.overflow = "hidden";
        });
    }

    // Close Modal Function
    function closeModal() {
        modal.classList.remove("active");
        document.body.style.overflow = "auto";
    }

    // Close Button Click
    if (closeBtn) {
        closeBtn.addEventListener("click", closeModal);
    }

    // Close when clicking outside content
    modal.addEventListener("click", function (e) {
        if (!e.target.closest(".custom-appointment-modal-content")) {
            closeModal();
        }
    });

    // ESC key close
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            closeModal();
        }
    });
});
