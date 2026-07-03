$(document).ready(function () {
    $("#description_images").on("change", function (event) {
        let files = event.target.files;
        let $preview = $("#descriptionPreview");

        $preview.html("");

        if (!files || files.length === 0) {
            return;
        }

        Array.from(files).forEach(function (file, index) {
            let reader = new FileReader();

            reader.onload = function (e) {
                let html = `
                    <div class="card mr-3 mb-3 shadow-sm description-preview-card"
                         data-index="${index}"
                         style="width:180px;">
                        <img src="${e.target.result}"
                             class="card-img-top"
                             style="height:160px; object-fit:cover;">

                        <div class="card-body p-2 text-center">
                            <small class="text-truncate d-block">
                                ${file.name}
                            </small>

                            <button type="button"
                                    class="btn btn-danger btn-sm mt-2 remove-description-preview">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                `;

                $preview.append(html);
            };

            reader.readAsDataURL(file);
        });
    });

    $(document).on("click", ".remove-description-preview", function () {
        $(this).closest(".description-preview-card").remove();
    });
});
