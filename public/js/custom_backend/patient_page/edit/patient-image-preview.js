$(document).ready(function () {
    $("#patient_image").on("change", function (event) {
        let file = event.target.files[0];

        if (!file) {
            return;
        }

        let reader = new FileReader();

        reader.onload = function (e) {
            $("#patientPreview").attr("src", e.target.result);
        };

        reader.readAsDataURL(file);
    });
});
