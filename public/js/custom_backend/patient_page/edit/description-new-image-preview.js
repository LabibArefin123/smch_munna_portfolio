$(document).ready(function () {
    const $input = $("#description_images");
    const $preview = $("#descriptionPreview");

    let selectedFiles = [];

    function getOrientation(width, height) {
        if (width > height) return "Landscape";
        if (height > width) return "Portrait";
        return "Square";
    }

    function syncInputFiles() {
        const dataTransfer = new DataTransfer();

        selectedFiles.forEach((file) => {
            dataTransfer.items.add(file);
        });

        $input[0].files = dataTransfer.files;
    }

    function renderPreview() {
        $preview.html("");

        if (!selectedFiles.length) {
            return;
        }

        selectedFiles.forEach((file, index) => {
            const reader = new FileReader();

            reader.onload = function (e) {
                const image = new Image();

                image.onload = function () {
                    const width = image.width;
                    const height = image.height;
                    const orientation = getOrientation(width, height);
                    const extension = file.name.split(".").pop().toUpperCase();
                    const size = (file.size / 1024).toFixed(2);

                    const html = `
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4 description-preview-card" data-index="${index}">
                            <div class="card shadow border-0 h-100">
                                <img
                                    src="${e.target.result}"
                                    class="card-img-top"
                                    style="height:180px;object-fit:cover;"
                                    alt="${file.name}"
                                >

                                <div class="card-body p-2">
                                    <h6 class="text-truncate mb-2">${file.name}</h6>

                                    <table class="table table-sm table-borderless mb-2">
                                        <tr>
                                            <th style="width:90px;">Type</th>
                                            <td>${file.type || "Image"}</td>
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
                                        class="btn btn-danger btn-block btn-sm remove-description-preview"
                                        data-index="${index}"
                                    >
                                        <i class="fas fa-trash"></i>
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;

                    $preview.append(html);
                };

                image.src = e.target.result;
            };

            reader.readAsDataURL(file);
        });
    }

    $input.on("change", function (event) {
        selectedFiles = Array.from(event.target.files);
        renderPreview();
    });

    $(document).on("click", ".remove-description-preview", function () {
        const index = $(this).data("index");

        selectedFiles.splice(index, 1);
        syncInputFiles();
        renderPreview();
    });
});
