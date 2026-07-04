@extends('adminlte::page')

@section('title', 'Edit Patient')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline shadow">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-user-edit mr-2"></i>
                            Edit Patient
                        </h3>

                        <div class="card-tools">
                            <a href="{{ route('patients.index') }}" class="btn btn-sm btn-secondary">
                                <i class="fas fa-arrow-left"></i>
                                Back
                            </a>
                        </div>
                    </div>

                    <form action="{{ route('patients.update', $patient->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            @include('backend.partials.error')

                            {{-- Patient Information --}}
                            @include('backend.partials.patient_page.edit_page.part_1')

                            {{-- Description --}}
                            @include('backend.partials.patient_page.edit_page.part_2')

                            {{-- Patient Images --}}
                            @include('backend.partials.patient_page.create_page.part_3')

                            {{-- Doctor Recommendation --}}
                            @include('backend.partials.patient_page.create_page.part_4')

                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="text-right">
                                        <a href="{{ route('patients.index') }}" class="btn btn-secondary">
                                            <i class="fas fa-times"></i>
                                            Cancel
                                        </a>

                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save"></i>
                                            Update Patient
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
    <script src="{{ asset('js/custom_backend/patient_page/edit/recommendation-toggle.js') }}"></script>
    <script src="{{ asset('js/custom_backend/patient_page/edit/patient-image-preview.js') }}"></script>
    <script src="{{ asset('js/custom_backend/patient_page/edit/description-old-image-preview.js') }}"></script>
    <script src="{{ asset('js/custom_backend/patient_page/edit/description-new-image-preview.js') }}"></script>
@endsection
