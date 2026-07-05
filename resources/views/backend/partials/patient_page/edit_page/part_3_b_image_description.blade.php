<div class="col-md-12">
    <div class="form-group">
        <label>Description Image</label>

        <input type="file" name="description_images[]" id="description_images"
            class="form-control @error('description_images') is-invalid @enderror @error('description_images.*') is-invalid @enderror"
            multiple accept="image/*">

        <small class="text-muted">
            You can select multiple medical images, reports, prescriptions, X-rays, MRI, CT Scan, etc.
        </small>

        @error('description_images')
            <span class="invalid-feedback d-block">{{ $message }}</span>
        @enderror

        @error('description_images.*')
            <span class="invalid-feedback d-block">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="card-body">
    <div class="row" id="oldDescriptionPreview">

        @php
            $oldImages = $patient->descriptionImages?->images ?? [];
        @endphp

        @if (!empty($oldImages))
            @foreach ($oldImages as $index => $image)
                @php
                    $path = public_path('uploads/images/patients/' . $image);

                    $size = file_exists($path) ? round(filesize($path) / 1024, 2) . ' KB' : '-';

                    $extension = strtoupper(pathinfo($image, PATHINFO_EXTENSION));

                    $width = '-';
                    $height = '-';
                    $orientation = '-';

                    if (file_exists($path)) {
                        $imageInfo = @getimagesize($path);

                        if ($imageInfo) {
                            $width = $imageInfo[0];
                            $height = $imageInfo[1];

                            if ($width > $height) {
                                $orientation = 'Landscape';
                            } elseif ($height > $width) {
                                $orientation = 'Portrait';
                            } else {
                                $orientation = 'Square';
                            }
                        }
                    }
                @endphp

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 old-description-card">
                    <div class="card shadow h-100 border-0">

                        <img src="{{ asset('uploads/images/patients/' . $image) }}" class="card-img-top"
                            style="height:180px;object-fit:cover;" alt="Description Image">

                        <div class="card-body p-2">
                            <table class="table table-sm table-borderless mb-2">
                                <tr>
                                    <th style="width:90px;">Name</th>
                                    <td class="text-truncate">{{ $image }}</td>
                                </tr>
                                <tr>
                                    <th>Extension</th>
                                    <td>{{ $extension }}</td>
                                </tr>
                                <tr>
                                    <th>Size</th>
                                    <td>{{ $size }}</td>
                                </tr>
                                <tr>
                                    <th>Dimension</th>
                                    <td>{{ $width }} × {{ $height }}</td>
                                </tr>
                                <tr>
                                    <th>Shape</th>
                                    <td>{{ $orientation }}</td>
                                </tr>
                            </table>

                            <button type="button" class="btn btn-danger btn-block btn-sm remove-old-description"
                                data-index="{{ $index }}">
                                <i class="fas fa-trash"></i>
                                Remove
                            </button>

                            <input type="hidden" name="delete_description_images[]" value=""
                                class="delete-old-image">
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12 text-center">
                <img src="{{ asset('uploads/images/default.jpg') }}" class="img-thumbnail" style="max-height:220px;"
                    alt="No Image">
            </div>
        @endif

    </div>
</div>

<hr>

<h5 class="mb-3">
    <i class="fas fa-plus-circle text-success"></i>
    New Images
</h5>

<div class="row" id="descriptionPreview"></div>
