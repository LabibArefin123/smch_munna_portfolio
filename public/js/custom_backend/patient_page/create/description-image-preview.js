$(document).ready(function () {
    $("#description_images").on("change", function (event) {
        let files = event.target.files;

        let preview = $("#descriptionPreview");

        preview.html("");

        if (!files.length) {
            return;
        }

        Array.from(files).forEach(function (file, index) {
            let reader = new FileReader();

            reader.onload = function (e) {
                let image = new Image();

                image.onload = function () {
                    let width = image.width;
                    let height = image.height;

                    let orientation = "Square";

                    if (width > height) {
                        orientation = "Landscape";
                    } else if (height > width) {
                        orientation = "Portrait";
                    }

                    let extension = file.name.split(".").pop().toUpperCase();

                    let size = (file.size / 1024).toFixed(2);

                    let html = `
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4 description-preview-card"
                         data-index="${index}">

                        <div class="card shadow border-0 h-100">

                            <img src="${e.target.result}"
                                 class="card-img-top"
                                 style="height:180px;object-fit:cover;">

                            <div class="card-body p-2">

                                <h6 class="text-truncate mb-2">
                                    ${file.name}
                                </h6>

                                <table class="table table-sm table-borderless mb-2">

                                    <tr>
                                        <th>Type</th>
                                        <td>${file.type}</td>
                                    </tr>

                                    <tr>
                                        <th>Extension</th>
                                        <td>${extension}</td>
                                    </tr>

                                    <tr>
                                        <th>Size</th>
                                        <td>${size} KB</td>
                                    </tr>

                                    <tr>
                                        <th>Dimension</th>
                                        <td>${width} × ${height}</td>
                                    </tr>

                                    <tr>
                                        <th>Shape</th>
                                        <td>${orientation}</td>
                                    </tr>

                                </table>

                                <button
                                    type="button"
                                    class="btn btn-danger btn-block btn-sm remove-description-preview">

                                    <i class="fas fa-trash"></i>

                                    Remove

                                </button>

                            </div>

                        </div>

                    </div>`;

                    preview.append(html);
                };

                image.src = e.target.result;
            };

            reader.readAsDataURL(file);
        });
    });

    $(document).on("click", ".remove-description-preview", function () {
        $(this).closest(".description-preview-card").remove();
    });
});
