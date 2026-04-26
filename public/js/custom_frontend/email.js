document.addEventListener("DOMContentLoaded", function () {
    const emailBtn = document.getElementById("openEmailModal");
    const emailModalElement = document.getElementById("emailModal");

    if (!emailBtn || !emailModalElement) return;

    const emailModal = new bootstrap.Modal(emailModalElement);

    emailBtn.addEventListener("click", function (e) {
        e.preventDefault();
        emailModal.show();
    });
});
