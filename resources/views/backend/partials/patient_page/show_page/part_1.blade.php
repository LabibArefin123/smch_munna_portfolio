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
                <strong>Patient Name</strong>

                <p>{{ $patient->name }}</p>
            </div>

            <div class="col-md-6">
                <strong>Phone</strong>

                <p>{{ $patient->phone }}</p>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <strong>Gender</strong>

                <p>{{ $patient->sex }}</p>
            </div>

            <div class="col-md-6">
                <strong>Age</strong>

                <p>{{ $patient->age }}</p>
            </div>

        </div>

    </div>

</div>
