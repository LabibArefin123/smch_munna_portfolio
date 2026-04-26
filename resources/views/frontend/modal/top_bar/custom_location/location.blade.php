<style>
    /* ================= MODAL STYLE ================= */

    #locationModal .modal-content {
        border-radius: 12px;
        border: none;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    }

    /* ================= HEADER ================= */

    #locationModal .modal-header {
        border-bottom: 1px solid #eee;
        padding: 18px 25px;
    }

    #locationModal .modal-title {
        font-weight: 600;
        font-size: 18px;
    }

    /* ================= TABS ================= */

    #locationTabs {
        border-bottom: 1px solid #eee;
    }

    #locationTabs .nav-link {
        border: none;
        color: #555;
        font-weight: 500;
        padding: 10px 18px;
    }

    #locationTabs .nav-link.active {
        color: #0d6efd;
        border-bottom: 3px solid #0d6efd;
        background: transparent;
    }

    /* ================= LOCATION CARD ================= */

    .location-info {
        padding: 10px 5px;
    }

    .location-info h6 {
        font-size: 17px;
        margin-bottom: 15px;
    }

    /* address block */

    .location-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 14px;
        font-size: 14px;
        color: #555;
    }

    .location-item i {
        font-size: 15px;
        margin-top: 3px;
        min-width: 18px;
    }

    /* iframe map */

    .map-frame {
        width: 100%;
        height: 300px;
        border-radius: 8px;
        border: none;
    }

    /* mobile fix */

    @media (max-width:768px) {

        .location-info {
            margin-bottom: 20px;
        }

    }
</style>


<div class="modal fade" id="locationModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">

            <!-- HEADER -->

            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-hospital-alt me-2 text-primary"></i>
                    Chamber Locations
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                <ul class="nav nav-tabs mb-4" id="locationTabs">

                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#loc1">
                            Authentic Diagnostic
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#loc2">
                            MH Samorita Hospital
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#loc3">
                            Popular Diagnostic (Badda)
                        </button>
                    </li>

                </ul>

                <div class="tab-content">
                    <!-- LOCATION 1 -->
                    @include('frontend.modal.top_bar.custom_location.location_1')
                    <!-- LOCATION 2 -->
                    @include('frontend.modal.top_bar.custom_location.location_2')
                    <!-- LOCATION 3 -->
                    @include('frontend.modal.top_bar.custom_location.location_3')
                    
                </div>
            </div>
        </div>
    </div>
</div>
