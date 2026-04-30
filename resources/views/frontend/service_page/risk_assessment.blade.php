@extends('frontend.layouts.app')

@section('title', 'Cardiac Risk Assessment')

@section('content')
    @include('frontend.welcome_page.header')
    <section class="service-page">
        <div class="service-container">

            <div class="service-header">
                <h1>Cardiac Risk Assessment</h1>
                <p>Evaluating the risk of future heart disease.</p>
            </div>

            <div class="service-card">
                <p>
                    Cardiac risk assessment helps identify individuals at risk of
                    developing cardiovascular conditions.
                </p>

                <h4>Assessment Includes</h4>
                <ul>
                    <li>Medical history evaluation</li>
                    <li>Blood pressure and cholesterol analysis</li>
                    <li>Lifestyle and genetic risk factors</li>
                </ul>

                <p>
                    Early identification allows preventive measures to reduce the
                    likelihood of serious heart problems.
                </p>
            </div>

        </div>
    </section>
    @include('frontend.welcome_page.footer')
@endsection
