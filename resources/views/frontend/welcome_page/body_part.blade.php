<div class="container body-ui">

    <div class="row align-items-center">

        <!-- LEFT LABELS -->
        <div class="col-md-4 text-right labels">
            <div data-part="eye_left">Eye</div>
            <div data-part="nose">Nose</div>
            <div data-part="throat">Throat</div>
            <div data-part="chest">Breast</div>
            <div data-part="arm_left">Arm</div>
            <div data-part="liver">Liver</div>
            <div data-part="spine">Spine</div>
            <div data-part="hip">Lower Back</div>
            <div data-part="hip">Reproductive System</div>
            <div data-part="thigh_left">Thigh</div>
            <div data-part="leg_left">Skin</div>
            <div data-part="foot_left">Foot</div>
        </div>

        <!-- BODY SVG -->
        <div class="col-md-4 text-center position-relative">

            <svg viewBox="0 0 300 700" width="260">

                <ellipse id="head" cx="150" cy="60" rx="35" ry="45" class="part" />

                <path id="throat" d="M135 100 Q150 120 165 100 L165 140 Q150 150 135 140 Z" class="part" />

                <path id="chest" d="M110 140 Q150 120 190 140 L200 260 Q150 300 100 260 Z" class="part" />

                <ellipse id="lungs_left" cx="125" cy="180" rx="18" ry="28" class="part" />
                <ellipse id="lungs_right" cx="175" cy="180" rx="18" ry="28" class="part" />

                <path id="heart"
                    d="M145 180 C140 170,130 170,130 185 C130 200,150 210,150 210 C150 210,170 200,170 185 C170 170,160 170,155 180 Z"
                    class="part" />

                <ellipse id="stomach" cx="140" cy="240" rx="20" ry="25" class="part" />
                <ellipse id="liver" cx="170" cy="240" rx="22" ry="15" class="part" />

                <path id="arm_left" d="M100 150 Q60 220 80 320 Q90 350 110 300 Z" class="part" />
                <path id="arm_right" d="M200 150 Q240 220 220 320 Q210 350 190 300 Z" class="part" />

                <path id="hip" d="M100 260 Q150 300 200 260 L200 320 Q150 350 100 320 Z" class="part" />

                <path id="thigh_left" d="M110 320 Q120 420 130 450 Q120 470 100 430 Z" class="part" />
                <path id="thigh_right" d="M190 320 Q180 420 170 450 Q180 470 200 430 Z" class="part" />

                <circle id="knee_left" cx="115" cy="460" r="10" class="part" />
                <circle id="knee_right" cx="185" cy="460" r="10" class="part" />

                <path id="leg_left" d="M110 470 Q115 580 125 600 Q110 610 95 580 Z" class="part" />
                <path id="leg_right" d="M190 470 Q185 580 175 600 Q190 610 205 580 Z" class="part" />

                <ellipse id="foot_left" cx="105" cy="620" rx="20" ry="10" class="part" />
                <ellipse id="foot_right" cx="195" cy="620" rx="20" ry="10" class="part" />

            </svg>

        </div>

        <!-- RIGHT LABELS -->
        <div class="col-md-4 labels">
            <div data-part="head">Brain</div>
            <div data-part="ear">Ear</div>
            <div data-part="throat">Teeth</div>
            <div data-part="heart">Heart</div>
            <div data-part="lungs_right">Lungs</div>
            <div data-part="arm_right">Elbow</div>
            <div data-part="kidney">Kidneys</div>
            <div data-part="stomach">Stomach</div>
            <div data-part="hip">Hip</div>
            <div data-part="knee_right">Knee</div>
            <div data-part="leg_right">Ankle</div>
        </div>

    </div>

    <!-- GENDER SWITCH -->
    <div class="text-center mt-4">
        <button class="btn btn-light active">Male</button>
        <button class="btn btn-warning">Female</button>
    </div>

</div>

<!-- STYLE -->
<style>
    .body-ui {
        background: #f5f2ea;
        padding: 40px;
        border-radius: 20px;
    }

    /* LABELS */
    .labels div {
        margin: 10px 0;
        color: #8a6d3b;
        cursor: pointer;
        position: relative;
        font-size: 14px;
    }

    .labels div:hover {
        color: #ff9800;
    }

    /* CONNECTOR LINE */
    .labels div::after {
        content: "";
        position: absolute;
        height: 1px;
        width: 40px;
        background: #c9a96e;
        top: 50%;
    }

    .text-right .labels div::after {
        right: -45px;
    }

    .labels:not(.text-right) div::after {
        left: -45px;
    }

    /* BODY PART */
    .part {
        fill: #c9a96e;
        stroke: #8a6d3b;
        stroke-width: 1.2;
        cursor: pointer;
        transition: 0.3s;
    }

    .part:hover {
        fill: #ff9800;
    }

    /* ACTIVE */
    .part.active {
        fill: #e53935 !important;
    }

    /* ACTIVE LABEL */
    .labels div.active {
        color: #e53935;
        font-weight: bold;
    }
</style>
<!-- SCRIPT -->
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const parts = document.querySelectorAll('.part');
        const labels = document.querySelectorAll('.labels div');

        function clearAll() {
            parts.forEach(p => p.classList.remove('active'));
            labels.forEach(l => l.classList.remove('active'));
        }

        // CLICK BODY
        parts.forEach(part => {
            part.addEventListener('click', function() {
                clearAll();

                this.classList.add('active');

                document.querySelectorAll(`[data-part="${this.id}"]`)
                    .forEach(l => l.classList.add('active'));
            });
        });

        // CLICK LABEL
        labels.forEach(label => {
            label.addEventListener('click', function() {
                clearAll();

                this.classList.add('active');

                let target = document.getElementById(this.dataset.part);
                if (target) target.classList.add('active');
            });
        });

    });
</script>
