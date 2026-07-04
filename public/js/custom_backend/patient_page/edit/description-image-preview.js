$(document).ready(function () {
    $("#description_images").on("change", function (event) {
        const files = event.target.files;
        const preview = $("#descriptionPreview");

        // Clear previous previews
        preview.empty();

        if (!files || files.length === 0) {
            return;
        }

        Array.from(files).forEach(function (file, index) {
            if (!file.type.startsWith("image/")) {
                return;
            }

            const reader = new FileReader();

            reader.onload = function (e) {
                const card = `
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 description-preview-card" data-index="${index}">
                        <div class="card shadow-sm h-100">

                            <img
                                src="${e.target.result}"
                                class="card-img-top"
                                style="height:160px;object-fit:cover;">

                            <div class="card-body text-center p-2">

                                <small class="text-truncate d-block mb-2">
                                    ${file.name}
                                </small>

                                <button
                                    type="button"
                                    class="btn btn-danger btn-sm remove-description-preview">

                                    <i class="fas fa-times"></i>

                                </button>

                            </div>

                        </div>
                    </div>
                `;

                preview.append(card);
            };

            reader.readAsDataURL(file);
        });
    });

    $(document).on("click", ".remove-description-preview", function () {
        $(this).closest(".description-preview-card").remove();
    });
});
