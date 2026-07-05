<div class="card mt-4">

    <div class="card-header bg-success">

        <h5 class="mb-0">

            <i class="fas fa-images"></i>

            Patient Images

        </h5>

    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <label>Patient Image</label>
                <br>
                @if (!empty($patient->patient_image))
                    <img src="{{ asset('uploads/images/patients/' . $patient->patient_image) }}"
                        class="img-thumbnail shadow" style="width:220px;height:220px;object-fit:cover;">
                @else
                    <img src="{{ asset('uploads/default.jpg') }}" class="img-thumbnail shadow"
                        style="width:220px;height:220px;object-fit:cover;">
                @endif
            </div>

            <div class="col-md-9">
                <label>Description Images</label>

                <div class="row mt-2">

                    @if ($patient->descriptionImages && !empty($patient->descriptionImages->images))

                        @foreach ($patient->descriptionImages->images as $image)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">

                                <div class="card shadow-sm">

                                    <img src="{{ asset('uploads/images/patients/' . $image) }}"
                                        class="card-img-top img-thumbnail" style="height:170px;object-fit:cover;">

                                </div>

                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <img src="{{ asset('uploads/default.jpg') }}" class="img-thumbnail shadow"
                                style="height:170px;width:100%;object-fit:cover;">

                        </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
