
@extends('adminlte::page')

@section('title', 'Patients')

@section('content')

    <div class="container-fluid">

        <div class="card card-primary card-outline">

            <div class="card-header">

                <h3 class="card-title">
                    <i class="fas fa-user-injured"></i>
                    Patient List
                </h3>

                <div class="card-tools">

                    <a href="{{ route('patients.create') }}" class="btn btn-primary btn-sm">

                        <i class="fas fa-plus"></i>

                        Add Patient

                    </a>

                </div>

            </div>

            <div class="card-body">

                @if (session('success'))
                    <div class="alert alert-success">

                        {{ session('success') }}

                    </div>
                @endif

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

                    <tbody>

                        @foreach ($patients as $patient)
                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>

                                    @if ($patient->patient_image)
                                        <img src="{{ asset('uploads/images/patients/' . $patient->patient_image) }}"
                                            class="img-thumbnail" width="60" height="60" style="object-fit:cover;">
                                    @else
                                        <img src="https://placehold.co/60x60?text=N/A" class="img-thumbnail">
                                    @endif

                                </td>

                                <td>

                                    <strong>{{ $patient->name }}</strong>

                                </td>

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

                                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning btn-sm">

                                        <i class="fas fa-edit"></i>

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
