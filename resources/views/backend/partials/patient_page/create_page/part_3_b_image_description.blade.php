<div class="col-md-12">
    <div class="form-group">
        <label>
            <i class="fas fa-images text-primary"></i>
            Description Images
        </label>

        <input type="file" name="description_images[]" id="description_images"
            class="form-control @error('description_images.*') is-invalid @enderror" multiple accept="image/*">

        <small class="text-muted">
            You can upload multiple medical images, prescriptions, X-rays,
            MRI, CT Scan, Ultrasound, Lab Reports, etc.
        </small>

        @error('description_images.*')
            <span class="invalid-feedback">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div id="descriptionPreview" class="row mt-3"></div>
</div>
