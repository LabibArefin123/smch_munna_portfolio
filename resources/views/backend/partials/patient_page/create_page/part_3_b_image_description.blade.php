<div class="col-md-12">
    <div class="form-group">
        <label>Description Images</label>

        <input type="file"
               name="description_images[]"
               id="description_images"
               class="form-control @error('description_images.*') is-invalid @enderror"
               multiple
               accept="image/*">

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