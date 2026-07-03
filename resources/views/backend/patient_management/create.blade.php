@extends('adminlte::page')

@section('title', 'Create Patient')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">

                <div class="card card-primary card-outline shadow">

                    <div class="card-header">

                        <h3 class="card-title">

                            <i class="fas fa-user-plus mr-2"></i>

                            Create New Patient

                        </h3>

                        <div class="card-tools">

                            <a href="{{ route('patients.index') }}" class="btn btn-sm btn-secondary">

                                <i class="fas fa-arrow-left"></i>

                                Back

                            </a>

                        </div>

                    </div>

                    <form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="card-body">

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible">

                                    <button class="close" data-dismiss="alert">&times;</button>

                                    {{ session('success') }}

                                </div>
                            @endif

                            @if ($errors->any())

                                <div class="alert alert-danger">

                                    <strong>Please fix the following errors:</strong>

                                    <ul class="mb-0 mt-2">

                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach

                                    </ul>

                                </div>

                            @endif


                            <div class="card">

                                <div class="card-header bg-primary">

                                    <h5 class="mb-0">

                                        <i class="fas fa-user-injured"></i>

                                        Patient Information

                                    </h5>

                                </div>

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label>

                                                    Patient Name

                                                    <span class="text-danger">*</span>

                                                </label>

                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name') }}" placeholder="Enter Patient Name">

                                                @error('name')
                                                    <span class="invalid-feedback">

                                                        {{ $message }}

                                                    </span>
                                                @enderror

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label>

                                                    Phone Number

                                                    <span class="text-danger">*</span>

                                                </label>

                                                <input type="text" name="phone"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    value="{{ old('phone') }}" placeholder="01XXXXXXXXX">

                                                @error('phone')
                                                    <span class="invalid-feedback">

                                                        {{ $message }}

                                                    </span>
                                                @enderror

                                            </div>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label>

                                                    Gender

                                                    <span class="text-danger">*</span>

                                                </label>

                                                <select name="sex"
                                                    class="form-control @error('sex') is-invalid @enderror">

                                                    <option value="">Choose Gender</option>

                                                    <option value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>
                                                        Male
                                                    </option>

                                                    <option value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>
                                                        Female
                                                    </option>

                                                </select>

                                                @error('sex')
                                                    <span class="invalid-feedback">

                                                        {{ $message }}

                                                    </span>
                                                @enderror

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label>

                                                    Age

                                                    <span class="text-danger">*</span>

                                                </label>

                                                <input type="number" name="age"
                                                    class="form-control @error('age') is-invalid @enderror"
                                                    value="{{ old('age') }}" min="0" max="120"
                                                    placeholder="Age">

                                                @error('age')
                                                    <span class="invalid-feedback">

                                                        {{ $message }}

                                                    </span>
                                                @enderror

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="card mt-4">

                                <div class="card-header bg-info">

                                    <h5 class="mb-0">

                                        <i class="fas fa-file-medical"></i>

                                        Patient Description

                                    </h5>

                                </div>

                                <div class="card-body">

                                    <div class="form-group">

                                        <label>

                                            Description

                                        </label>

                                        <textarea name="description" rows="6" class="form-control @error('description') is-invalid @enderror"
                                            placeholder="Write patient details, diagnosis, symptoms, history, etc...">{{ old('description') }}</textarea>

                                        @error('description')
                                            <span class="invalid-feedback">

                                                {{ $message }}

                                            </span>
                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- ============================= --}}
                        {{-- Patient Images --}}
                        {{-- ============================= --}}

                        <div class="card mt-4">

                            <div class="card-header bg-success">

                                <h5 class="mb-0">

                                    <i class="fas fa-images"></i>

                                    Patient Images

                                </h5>

                            </div>

                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label>

                                                Patient Profile Image

                                            </label>

                                            <input type="file" name="patient_image" id="patient_image"
                                                class="form-control @error('patient_image') is-invalid @enderror"
                                                accept="image/*">

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

                                        <label>

                                            Preview

                                        </label>

                                        <br>

                                        <img id="patientPreview" src="https://placehold.co/220x220?text=No+Image"
                                            class="img-thumbnail shadow" style="width:220px;height:220px;object-fit:cover;">

                                    </div>

                                </div>

                                <hr>

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="form-group">

                                            <label>

                                                Description Images

                                            </label>

                                            <input type="file" name="description_images[]" id="description_images"
                                                class="form-control @error('description_images.*') is-invalid @enderror"
                                                multiple accept="image/*">

                                            <small class="text-muted">

                                                You can select multiple medical images,
                                                reports, prescriptions, X-rays, MRI, CT Scan,
                                                etc.

                                            </small>

                                            @error('description_images.*')
                                                <span class="invalid-feedback">

                                                    {{ $message }}

                                                </span>
                                            @enderror

                                        </div>

                                    </div>

                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-12">

                                        <div id="descriptionPreview" class="d-flex flex-wrap">

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- ============================= --}}
                        {{-- Doctor Recommendation --}}
                        {{-- ============================= --}}

                        <div class="card mt-4">

                            <div class="card-header bg-warning">

                                <h5 class="mb-0">

                                    <i class="fas fa-user-md"></i>

                                    Doctor Recommendation

                                </h5>

                            </div>

                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label>

                                                Recommend Another Doctor?

                                            </label>

                                            <select name="recommended" id="recommended" class="form-control">

                                                <option value="0" {{ old('recommended') == 0 ? 'selected' : '' }}>
                                                    No
                                                </option>

                                                <option value="1" {{ old('recommended') == 1 ? 'selected' : '' }}>
                                                    Yes
                                                </option>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="col-md-6 recommendation-fields">

                                        <div class="form-group">

                                            <label>

                                                Doctor Name

                                            </label>

                                            <input type="text" name="recommended_doctor"
                                                class="form-control @error('recommended_doctor') is-invalid @enderror"
                                                value="{{ old('recommended_doctor') }}" placeholder="Enter Doctor Name">

                                            @error('recommended_doctor')
                                                <span class="invalid-feedback">

                                                    {{ $message }}

                                                </span>
                                            @enderror

                                        </div>

                                    </div>

                                </div>

                                <div class="row recommendation-fields">

                                    <div class="col-md-12">

                                        <div class="form-group">

                                            <label>

                                                Recommendation Information

                                            </label>

                                            <textarea name="recommendation_information" rows="5"
                                                class="form-control @error('recommendation_information') is-invalid @enderror"
                                                placeholder="Write recommendation details...">{{ old('recommendation_information') }}</textarea>

                                            @error('recommendation_information')
                                                <span class="invalid-feedback">

                                                    {{ $message }}

                                                </span>
                                            @enderror

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- ============================= --}}
                        {{-- Action Buttons --}}
                        {{-- ============================= --}}

                        <div class="card mt-4">

                            <div class="card-body">

                                <div class="text-right">

                                    <button type="reset" class="btn btn-secondary">

                                        <i class="fas fa-undo"></i>

                                        Reset

                                    </button>

                                    <button type="submit" class="btn btn-primary">

                                        <i class="fas fa-save"></i>

                                        Save Patient

                                    </button>

                                </div>

                            </div>

                        </div>

                </div>

                </form>

            </div>

        </div>

    </div>

    </div>

@endsection

@section('js')

    <script>
        $(document).ready(function() {

            toggleRecommendation();

            $('#recommended').change(function() {

                toggleRecommendation();

            });

        });


        function toggleRecommendation() {

            if ($('#recommended').val() == 1) {
                $('.recommendation-fields').slideDown();
            } else {
                $('.recommendation-fields').slideUp();

                $('input[name="recommended_doctor"]').val('');

                $('textarea[name="recommendation_information"]').val('');
            }

        }



        // Patient Image Preview

        $('#patient_image').change(function(event) {

            let file = event.target.files[0];

            if (file) {

                let reader = new FileReader();

                reader.onload = function(e) {

                    $('#patientPreview').attr('src', e.target.result);

                }

                reader.readAsDataURL(file);

            }

        });



        // Multiple Description Images Preview

        $('#description_images').change(function(event) {

            let files = event.target.files;

            $('#descriptionPreview').html('');

            if (files.length == 0) {
                return;
            }

            Array.from(files).forEach(function(file, index) {

                let reader = new FileReader();

                reader.onload = function(e) {

                    let html = `

            <div class="card mr-3 mb-3 shadow-sm"

                 style="width:180px;">

                <img src="${e.target.result}"

                     class="card-img-top"

                     style="height:160px;
                            object-fit:cover;">

                <div class="card-body p-2 text-center">

                    <small
                    class="text-truncate d-block">

                    ${file.name}

                    </small>

                    <button

                        type="button"

                        class="btn btn-danger btn-sm mt-2"

                        onclick="$(this).closest('.card').remove()">

                        <i class="fas fa-times"></i>

                    </button>

                </div>

            </div>

            `;

                    $('#descriptionPreview').append(html);

                }

                reader.readAsDataURL(file);

            });

        });
    </script>

@endsection
