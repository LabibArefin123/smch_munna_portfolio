<div class="card mt-4">
    <div class="card-header bg-success">
        <h5 class="mb-0">
            <i class="fas fa-images"></i>
            Patient Images
        </h5>
    </div>

    <div class="card-body">
        <div class="row">
            @include('backend.partials.patient_page.create_page.part_3_a_image_profile')
        </div>

        <hr>

        <div class="row">
            @include('backend.partials.patient_page.create_page.part_3_b_image_description')
        </div>

        <div class="row mt-3">
            @include('backend.partials.patient_page.create_page.part_3_c_image_preview')
        </div>
    </div>
</div>
