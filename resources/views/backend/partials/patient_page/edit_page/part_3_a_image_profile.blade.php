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

    @php
        $patientFolder = \Illuminate\Support\Str::slug($patient->name);

        $patientImagePath = public_path('uploads/images/patients/' . $patientFolder . '/' . $patient->patient_image);

        $legacyPatientImagePath = public_path('uploads/images/patients/' . $patient->patient_image);

        if (!empty($patient->patient_image) && file_exists($patientImagePath)) {
            $patientImageUrl = asset('uploads/images/patients/' . $patientFolder . '/' . $patient->patient_image);
        } elseif (!empty($patient->patient_image) && file_exists($legacyPatientImagePath)) {
            $patientImageUrl = asset('uploads/images/patients/' . $patient->patient_image);
        } else {
            $patientImageUrl = asset('uploads/images/default.jpg');
        }
    @endphp

    <img id="patientPreview" src="{{ $patientImageUrl }}" class="img-thumbnail shadow"
        style="width:220px;height:220px;object-fit:cover;" alt="{{ $patient->name }}">
</div>
