<div class="col-md-12">
    <div class="form-group">
        <label>Description Image</label>

        <input type="file" name="description_images[]" id="description_images"
            class="form-control @error('description_images.*') is-invalid @enderror" multiple accept="image/*">

        <small class="text-muted">
            You can select multiple medical images, reports, prescriptions,
            X-rays, MRI, CT Scan, etc.
        </small>

        @error('description_images.*')
            <span class="invalid-feedback">
                {{ $message }}
            </span>
        @enderror
    </div>
</div>

<div class="card mt-3">
    <div class="card-header bg-info">
        <strong>Old Description Images</strong>
    </div>

    <div class="card-body">
        <div class="row" id="oldDescriptionPreview">
            @forelse($patient->descriptionImages as $image)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3 old-description-card">
                    <div class="card shadow-sm h-100">
                        <img src="{{ asset('uploads/images/patients/' . $image->image) }}" class="card-img-top"
                            style="height:170px;object-fit:cover;">
                        <div class="card-body text-center">

                            <small class="text-muted d-block mb-2">
                                {{ $image->image }}
                            </small>

                            <button type="button" class="btn btn-danger btn-sm remove-old-description"
                                data-id="{{ $image->id }}">

                                <i class="fas fa-trash"></i>

                            </button>

                            <input type="hidden" name="delete_description_images[]" value=""
                                class="delete-old-image">

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <img src="{{ asset('uploads/images/default.jpg') }}" class="img-thumbnail">

                </div>
            @endforelse

        </div>

    </div>

</div>
