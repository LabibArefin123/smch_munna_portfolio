@extends('adminlte::page')

@section('title', 'View Patient')

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card card-primary card-outline shadow">

                    <div class="card-header">

                        <h3 class="card-title">
                            <i class="fas fa-eye mr-2"></i>
                            Patient Details
                        </h3>

                        <div class="card-tools">

                            <a href="{{ route('patients.index') }}" class="btn btn-secondary btn-sm">
                                <i class="fas fa-arrow-left"></i>
                                Back
                            </a>

                            <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>

                        </div>

                    </div>

                    @include('backend.partials.patient_page.show_page.part_1')

                    @include('backend.partials.patient_page.show_page.part_2')

                    @include('backend.partials.patient_page.show_page.part_3')

                    @include('backend.partials.patient_page.show_page.part_4')

                </div>

            </div>

        </div>

    </div>
@endsection
