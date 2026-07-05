$(function () {
    $(document).on("click", ".remove-old-description", function () {
        const $button = $(this);
        const $card = $button.closest(".old-description-card");
        const index = $button.data("index");

        $card.find(".delete-old-image").val(index);

        $card.fadeOut(250, function () {
            $(this).addClass("d-none");
        });
    });
});
