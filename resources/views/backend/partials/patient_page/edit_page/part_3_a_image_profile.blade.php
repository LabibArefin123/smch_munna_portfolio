<div class="col-md-6">
    <div class="form-group">
        <label>Patient Profile Image</label>

        <input type="file" name="patient_image" id="patient_image"
            class="form-control @error('patient_image') is-invalid @enderror" accept="image/*">

        <small class="text-muted">
            JPG, PNG, JPEG, WEBP (Max: 5 MB)
        </small>

        @error('patient_image')
            <span class="invalid-feedback">
                {{ $message }}
            </span>
        @enderror
    </div>
</div>

<div class="col-md-6 text-center">
    <label>Preview</label>
    <br>

    <img id="patientPreview"
        src="{{ !empty($patient->patient_image) ? asset($patient->patient_image) : 'https://placehold.co/220x220?text=No+Image' }}"
        class="img-thumbnail shadow" style="width:220px;height:220px;object-fit:cover;">
</div>
