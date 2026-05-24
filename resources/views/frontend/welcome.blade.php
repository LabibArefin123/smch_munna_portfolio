@extends('frontend.layouts.app')

@section('title', 'Dr. Mohammad Faisal Ibn Kabir | Best Colorectal Surgeon in Bangladesh')

@section('meta')
    <!-- Primary SEO -->
    <meta name="title" content="Dr. Mohammad Faisal Ibn Kabir | Best Cardiologist in Bangladesh">

    <meta name="description"
        content="Dr. Mohammad Faisal Ibn Kabir is a leading cardiologist in Bangladesh specializing in heart disease diagnosis, interventional cardiology, hypertension management, preventive cardiology, ECG, echocardiography and advanced heart care in Dhaka.">
    <meta property="og:title" content="Dr. Mohammad Faisal Ibn Kabir | Leading Cardiologist in Bangladesh">

    <meta property="og:description"
        content="Expert cardiology consultation and advanced heart care in Dhaka including interventional cardiology, hypertension treatment and preventive cardiac services.">

    <meta property="og:image" content="{{ asset('uploads/images/welcome_page/slider/image.jpeg') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
@endsection

@section('content')
    @include('frontend.welcome_page.header')
    @include('frontend.welcome_page.banner')
    @include('frontend.welcome_page.philosophy')
    @include('frontend.welcome_page.achievement')
    @include('frontend.welcome_page.message')
    @include('frontend.welcome_page.footer')
@endsection
