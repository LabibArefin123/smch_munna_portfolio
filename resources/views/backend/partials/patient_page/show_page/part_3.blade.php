<div class="card mt-4">

    <div class="card-header bg-success">

        <h5 class="mb-0">

            <i class="fas fa-images"></i>

            Patient Images

        </h5>

    </div>

    <div class="card-body">
        @php
            $patientFolder = \Illuminate\Support\Str::slug($patient->name);

            /*
        |--------------------------------------------------------------------------
        | Patient main image
        |--------------------------------------------------------------------------
        */
            $patientImagePath = public_path(
                'uploads/images/patients/' . $patientFolder . '/' . $patient->patient_image,
            );

            $legacyPatientImagePath = public_path('uploads/images/patients/' . $patient->patient_image);

            if (!empty($patient->patient_image) && file_exists($patientImagePath)) {
                $patientImageUrl = asset('uploads/images/patients/' . $patientFolder . '/' . $patient->patient_image);
            } elseif (!empty($patient->patient_image) && file_exists($legacyPatientImagePath)) {
                $patientImageUrl = asset('uploads/images/patients/' . $patient->patient_image);
            } else {
                $patientImageUrl = asset('uploads/images/default.jpg');
            }

            $descriptionImages = $patient->descriptionImages?->images ?? [];
        @endphp

        <div class="row">
            <div class="col-md-3">
                <label>Patient Image</label>
                <br>

                <img src="{{ $patientImageUrl }}" class="img-thumbnail shadow"
                    style="width:220px;height:220px;object-fit:cover;" alt="{{ $patient->name }}">
            </div>

            <div class="col-md-9">
                <label>Description Images</label>

                <div class="row mt-2">
                    @if (!empty($descriptionImages))
                        @foreach ($descriptionImages as $image)
                            @php
                                $descriptionImagePath = public_path(
                                    'uploads/images/patients/' . $patientFolder . '/' . $image,
                                );

                                $legacyDescriptionImagePath = public_path('uploads/images/patients/' . $image);

                                if (file_exists($descriptionImagePath)) {
                                    $descriptionImageUrl = asset(
                                        'uploads/images/patients/' . $patientFolder . '/' . $image,
                                    );
                                } elseif (file_exists($legacyDescriptionImagePath)) {
                                    $descriptionImageUrl = asset('uploads/images/patients/' . $image);
                                } else {
                                    $descriptionImageUrl = asset('uploads/images/default.jpg');
                                }
                            @endphp

                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                <div class="card shadow-sm">
                                    <img src="{{ $descriptionImageUrl }}" class="card-img-top img-thumbnail"
                                        style="height:170px;object-fit:cover;" alt="Description Image">
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <img src="{{ asset('uploads/images/default.jpg') }}" class="img-thumbnail shadow"
                                style="height:170px;width:100%;object-fit:cover;" alt="No Image">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
