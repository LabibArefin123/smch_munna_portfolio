<div class="col-md-12">
    <div class="form-group">
        <label>Description Images</label>

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

        <div class="row">

            @forelse($patient->descriptionImages as $image)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">

                    <div class="card shadow-sm">

                        <img src="{{ asset('uploads/images/patients/' . $image->image) }}" class="card-img-top"
                            style="height:170px;object-fit:cover;">

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
