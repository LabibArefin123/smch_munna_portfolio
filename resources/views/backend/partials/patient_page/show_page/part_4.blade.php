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
                <strong>Recommendation Status</strong>

                <p>
                    @if ($patient->recommended)
                        <span class="badge badge-success">
                            Recommended
                        </span>
                    @else
                        <span class="badge badge-secondary">
                            Not Recommended
                        </span>
                    @endif
                </p>

            </div>

            @if ($patient->recommended)
                <div class="col-md-6">
                    <strong>Doctor Name</strong>
                    <p>{{ $patient->recommended_doctor }}</p>
                </div>
            @endif

        </div>

        @if ($patient->recommended)
            <hr>
            <strong>Recommendation Information</strong>
            <div class="border rounded p-3 bg-light">
                {!! nl2br(e($patient->recommendation_information)) !!}
            </div>
        @endif
    </div>
</div>
