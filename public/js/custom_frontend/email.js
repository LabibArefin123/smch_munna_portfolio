document.addEventListener("DOMContentLoaded", function () {
    const locationBtn = document.getElementById("open-location-modal");
    const locationModalElement = document.getElementById("locationModal");

    if (!locationBtn || !locationModalElement) return;

    const locationModal = new bootstrap.Modal(locationModalElement);

    locationBtn.addEventListener("click", function (e) {
        e.preventDefault();
        locationModal.show();
    });
});
