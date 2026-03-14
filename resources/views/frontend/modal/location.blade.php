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


                <!-- TABS -->

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

                    <div class="tab-pane fade show active" id="loc1">

                        <div class="row align-items-center">

                            <div class="col-md-5">

                                <div class="location-info">

                                    <h6 class="text-primary fw-bold">
                                        Authentic Diagnostic & Consultation Ltd
                                    </h6>

                                    <div class="location-item">
                                        <i class="fas fa-map-marker-alt text-danger"></i>
                                        <span>
                                            71/4 Hoseni Dalan Road<br>
                                            Chankharphul, Dhaka-1211
                                        </span>
                                    </div>

                                    <div class="location-item">
                                        <i class="fas fa-phone text-success"></i>
                                        <span>
                                            01841715269, 01844522300<br>
                                            0187771222, 0140436437
                                        </span>
                                    </div>

                                    <div class="location-item">
                                        <i class="fas fa-clock text-warning"></i>
                                        <span>
                                            Sat-Mon-Wed: 3:30 PM – 6:30 PM<br>
                                            Sun-Tue-Thu: 3:30 PM – 8:00 PM
                                        </span>
                                    </div>

                                    <div class="location-item">
                                        <i class="fas fa-envelope text-danger"></i>
                                        <span>autehnticmedi2018@gmail.com</span>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-7">

                                <iframe class="map-frame"
                                    src="https://www.google.com/maps?q=Chankharphul%20Dhaka&output=embed"
                                    loading="lazy">
                                </iframe>

                            </div>

                        </div>

                    </div>



                    <!-- LOCATION 2 -->

                    <div class="tab-pane fade" id="loc2">

                        <div class="row align-items-center">

                            <div class="col-md-5">

                                <div class="location-info">

                                    <h6 class="text-primary fw-bold">
                                        MH Samorita Medical College & Hospital
                                    </h6>

                                    <div class="location-item">
                                        <i class="fas fa-map-marker-alt text-danger"></i>
                                        <span>
                                            117 Tejgaon Love Road<br>
                                            Dhaka-1208
                                        </span>
                                    </div>

                                    <div class="location-item">
                                        <i class="fas fa-phone text-success"></i>
                                        <span>02-8878080</span>
                                    </div>

                                    <div class="location-item">
                                        <i class="fas fa-globe text-info"></i>
                                        <span>www.mhsamorita.edu.bd</span>
                                    </div>

                                    <div class="location-item">
                                        <i class="fas fa-clock text-warning"></i>
                                        <span>
                                            Daily: 9:00 AM – 1:30 PM<br>
                                            Sun-Tue-Thu: 8:30 PM – 10:00 PM
                                        </span>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-7">

                                <iframe class="map-frame"
                                    src="https://www.google.com/maps?q=MH%20Samorita%20Medical%20College%20Hospital&output=embed"
                                    loading="lazy">
                                </iframe>

                            </div>

                        </div>

                    </div>



                    <!-- LOCATION 3 -->

                    <div class="tab-pane fade" id="loc3">

                        <div class="row align-items-center">

                            <div class="col-md-5">

                                <div class="location-info">

                                    <h6 class="text-primary fw-bold">
                                        Popular Diagnostic Centre Ltd (Badda)
                                    </h6>

                                    <div class="location-item">
                                        <i class="fas fa-map-marker-alt text-danger"></i>
                                        <span>
                                            Cha-90/2 Bir Uttam Rafiqul Islam Road<br>
                                            North Badda, Pragati Swarani<br>
                                            Dhaka-1212
                                        </span>
                                    </div>

                                    <div class="location-item">
                                        <i class="fas fa-clock text-warning"></i>
                                        <span>Sun-Tue-Thu: 8:00 AM – 10:00 PM</span>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-7">

                                <iframe class="map-frame"
                                    src="https://www.google.com/maps?q=Popular%20Diagnostic%20Centre%20Badda&output=embed"
                                    loading="lazy">
                                </iframe>

                            </div>

                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
