<link rel="stylesheet" href="{{ asset('css/frontend/custom_banner.css') }}">

<section id="banner" class="banner-section w-100">

    <div id="slider" class="position-relative w-100" style="height:70vh;">

        @php

            $slides = [
                [
                    'image' => 'image_2.png',
                    'align' => 'left',

                    'name' => 'Dr. Mohammad Faisal Ibn Kabir',

                    'designation' => 'Professor & Head of Cardiology',

                    'details' => '
                    MD (Cardiology), FCPS (Medicine), MBBS (DMC)<br>
                    Fellowship in Cardiovascular Intervention & Electrophysiology (Beijing, China)<br>
                    Clinical & Interventional Cardiologist
                    ',
                    'route' => route('about'),
                ],
            ];

        @endphp



        @foreach ($slides as $index => $slide)
            <div class="slide {{ $index === 0 ? 'active' : '' }}" data-route="{{ $slide['route'] }}"
                style="position:absolute; inset:0;">


                <div class="doctor-slide h-100">

                    <div class="container h-100">

                        <div class="row h-100 align-items-center">


                            {{-- Doctor Image Left --}}

                            @if ($slide['align'] === 'left')
                                <div class="col-md-6 h-100 position-relative order-1 order-md-0">

                                    <a href="{{ $slide['route'] }}" class="doctor-image-link">

                                        <img src="{{ asset('uploads/images/welcome_page/slider/' . $slide['image']) }}"
                                            class="doctor-img left" alt="{{ $slide['name'] }}">

                                    </a>

                                </div>
                            @endif



                            {{-- Text Content --}}

                            <div class="col-md-6 hero-content z-2">

                                <h2 class="fw-bold display-6 mb-2">
                                    {{ $slide['name'] }}
                                </h2>

                                <p class="fs-5 mb-2">
                                    {{ $slide['designation'] }}
                                </p>

                                <p class="lh-lg opacity-90">
                                    {!! $slide['details'] !!}
                                </p>

                                <a href="{{ route('contact') }}" class="btn banner-btn mt-3">
                                    Book Appointment
                                </a>

                            </div>



                            {{-- Doctor Image Right --}}

                            @if ($slide['align'] === 'right')
                                <div class="col-md-6 h-100 position-relative">

                                    <a href="{{ $slide['route'] }}" class="doctor-image-link">

                                        <img src="{{ asset('uploads/images/welcome_page/slider/' . $slide['image']) }}"
                                            class="doctor-img right" alt="{{ $slide['name'] }}">

                                    </a>

                                </div>
                            @endif


                        </div>

                    </div>

                </div>

            </div>
        @endforeach

    </div>

</section>
