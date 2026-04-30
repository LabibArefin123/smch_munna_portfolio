@extends('frontend.layouts.app')

@section('title', 'Preventive Cardiology')

@section('content')
@include('frontend.welcome_page.header')
<section class="service-page">
    <div class="service-container">

        <div class="service-header">
            <h1>Preventive Cardiology</h1>
            <p>Preventing heart disease through early care and lifestyle management.</p>
        </div>

        <div class="service-card">
            <p>
                Preventive cardiology focuses on reducing the risk of developing
                heart disease through early intervention.
            </p>

            <h4>Key Focus Areas</h4>
            <ul>
                <li>Risk factor identification</li>
                <li>Healthy lifestyle planning</li>
                <li>Regular health screening</li>
            </ul>

            <p>
                Prevention plays a crucial role in maintaining long-term cardiovascular health.
            </p>
        </div>

    </div>
</section>
@include('frontend.welcome_page.footer')
@endsection