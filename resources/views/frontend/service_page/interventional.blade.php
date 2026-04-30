@extends('frontend.layouts.app')

@section('title', 'Interventional Cardiology')

@section('content')
@include('frontend.welcome_page.header')
<section class="service-page">
    <div class="service-container">

        <div class="service-header">
            <h1>Interventional Cardiology</h1>
            <p>Advanced procedures for treating heart conditions.</p>
        </div>

        <div class="service-card">
            <p>
                Interventional cardiology involves minimally invasive procedures
                to treat heart diseases without major surgery.
            </p>

            <h4>Services Include</h4>
            <ul>
                <li>Angioplasty and stenting</li>
                <li>Coronary artery treatment</li>
                <li>Advanced cardiac interventions</li>
            </ul>

            <p>
                These procedures help restore blood flow and improve heart function.
            </p>
        </div>

    </div>
</section>
@include('frontend.welcome_page.footer')
@endsection