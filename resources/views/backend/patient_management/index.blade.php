@extends('adminlte::page')

@section('title', 'Patients')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h1>Patient List</h1>
        <a href="{{ route('patients.create') }}" class="btn btn-success btn-sm">
            + Add Patient
        </a>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="card mb-3">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-4">

                                <label class="font-weight-bold">
                                    Search
                                </label>

                                <input type="text" id="search" class="form-control"
                                    placeholder="Search by Name or Phone">

                            </div>

                            <div class="col-md-2">

                                <label class="font-weight-bold">
                                    Sex
                                </label>

                                <select id="sex" class="form-control">

                                    <option value="">All</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>

                                </select>

                            </div>

                            <div class="col-md-2">

                                <label class="font-weight-bold">
                                    Recommended
                                </label>

                                <select id="recommended" class="form-control">

                                    <option value="">All</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>

                                </select>

                            </div>

                            <div class="col-md-2">

                                <label class="font-weight-bold">
                                    Age
                                </label>

                                <input type="number" id="age" class="form-control" placeholder="Age">

                            </div>

                            <div class="col-md-2">

                                <label class="font-weight-bold d-block">
                                    &nbsp;
                                </label>

                                <button class="btn btn-secondary btn-block" id="resetFilter">

                                    <i class="fas fa-sync"></i>

                                    Reset

                                </button>

                            </div>

                        </div>

                    </div>

                </div>
                <table id="dataTables" class="table table-bordered table-striped table-hover">
                    <thead class="bg-primary">
                        <tr>
                            <th width="60">#</th>
                            <th width="90">Photo</th>
                            <th>Name</th>
                            <th>Sex</th>
                            <th>Age</th>
                            <th>Phone</th>
                            <th>Recommended</th>
                            <th width="170">Action</th>
                        </tr>
                    </thead>

                    <tbody id="patientTable">
                        @foreach ($patients as $patient)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    @php
                                        $patientImage = null;

                                        if ($patient->patient_image && $patient->image_folder) {
                                            $patientImage = asset(
                                                'uploads/images/patients/' .
                                                    $patient->image_folder .
                                                    '/' .
                                                    $patient->patient_image,
                                            );
                                        } elseif ($patient->patient_image) {
                                            $patientImage = asset('uploads/images/patients/' . $patient->patient_image);
                                        } else {
                                            $patientImage = asset('uploads/images/default.jpg');
                                        }
                                    @endphp

                                    <img src="{{ $patientImage }}" class="img-thumbnail" width="60" height="60"
                                        style="object-fit:cover;" alt="{{ $patient->name }}">
                                </td>
                                <td> <strong>{{ $patient->name }}</strong> </td>
                                <td>{{ $patient->sex }}</td>
                                <td>{{ $patient->age }}</td>
                                <td>{{ $patient->phone }}</td>
                                <td>
                                    @if ($patient->recommended)
                                        <span class="badge badge-success">

                                            Yes
                                        </span>
                                    @else
                                        <span class="badge badge-secondary">

                                            No

                                        </span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete this patient?')">

                                            <i class="fas fa-trash"></i>

                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        window.patientFilterUrl = "{{ route('patients.filter') }}";
    </script>


    <script src="{{ asset('js/custom_backend/patient_page/index/patient_filter.js') }}"></script>
@endsection
