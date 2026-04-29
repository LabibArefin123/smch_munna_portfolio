@extends('frontend.layouts.app')
@vite('resources/scss/backend/login_page/login.scss')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

@section('content')
    <div class="login-page">

        <div class="login-wrapper">
            <div class="login-glass" id="sliderContainer">
                @include('auth.custom_login.left')
                @include('auth.custom_login.right')
            </div>
        </div>
    </div>
    @include('auth.custom_modal.problem')
    {{-- Password show  JS --}}
    <script src="{{ asset('js/custom_frontend/login_page/password.js') }}"></script>
    {{-- Problem modal show  JS --}}
    <script src="{{ asset('js/custom_frontend/login_page/problem-modal.js') }}"></script>
@endsection
