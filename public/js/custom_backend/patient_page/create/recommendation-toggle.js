$(document).ready(function () {
    toggleRecommendation();

    $("#recommended").on("change", function () {
        toggleRecommendation();
    });
});

function toggleRecommendation() {
    if ($("#recommended").val() == 1) {
        $(".recommendation-fields").stop(true, true).slideDown();
    } else {
        $(".recommendation-fields").stop(true, true).slideUp();

        $('input[name="recommended_doctor"]').val("");
        $('textarea[name="recommendation_information"]').val("");
    }
}
