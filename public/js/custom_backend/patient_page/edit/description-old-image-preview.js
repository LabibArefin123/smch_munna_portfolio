$(document).ready(function () {
    $(document).on("click", ".remove-old-description", function () {
        let card = $(this).closest(".old-description-card");

        let hiddenInput = card.find(".delete-old-image");

        hiddenInput.val($(this).data("id"));

        card.fadeOut(300);
    });
});
