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
                            @include('backend.partials.error')
                            {{-- Patient Information Part --}}
                            @include('backend.partials.patient_page.create_page.part_1')
                            {{-- Description Part --}}
                            @include('backend.partials.patient_page.create_page.part_2')
                            {{-- Patient Images Part --}}
                            @include('backend.partials.patient_page.create_page.part_3')
                            {{-- - Doctor Recommendation  --}}
                            @include('backend.partials.patient_page.create_page.part_4')


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
    <script src="{{ asset('js/custom_backend/patient_page/create/recommendation-toggle.js') }}"></script>
    <script src="{{ asset('js/custom_backend/patient_page/create/patient-image-preview.js') }}"></script>
    <script src="{{ asset('js/custom_backend/patient_page/create/description-images-preview.js') }}"></script>
@endsection
