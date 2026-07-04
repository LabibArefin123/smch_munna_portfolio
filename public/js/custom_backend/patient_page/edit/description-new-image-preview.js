$(document).ready(function () {
    $("#description_images").on("change", function (event) {
        const files = event.target.files;
        const preview = $("#descriptionPreview");

        preview.empty();

        if (!files.length) {
            preview.html(`
                <div class="col-12 text-center text-muted">
                    No new images selected.
                </div>
            `);

            return;
        }

        Array.from(files).forEach(function (file, index) {
            if (!file.type.startsWith("image/")) {
                return;
            }

            const reader = new FileReader();

            reader.onload = function (e) {
                preview.append(`

                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 description-preview-card">

                        <div class="card shadow-sm h-100">

                            <img
                                src="${e.target.result}"
                                class="card-img-top"
                                style="height:160px;object-fit:cover;">

                            <div class="card-body text-center p-2">

                                <small class="d-block text-truncate mb-2">

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

                `);
            };

            reader.readAsDataURL(file);
        });
    });

    $(document).on("click", ".remove-description-preview", function () {
        $(this).closest(".description-preview-card").remove();
    });
});
