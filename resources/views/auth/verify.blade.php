@extends('frontend.layouts.app')

@vite('resources/scss/backend/login_page/login.scss')

@section('content')
<div class="login-page">
    <div class="login-wrapper">
        <div class="login-glass">

            {{-- LEFT PANEL --}}
            @include('auth.custom_login.left')

            {{-- RIGHT PANEL --}}
            <div class="login-panel">
                <div class="text-center mb-4">
                    <h4 class="fw-bold">Email Verification</h4>
                    <p class="text-muted">Please verify your email to continue</p>
                </div>

                @if (session('resent'))
                    <div class="alert alert-success">
                        A fresh verification link has been sent!
                    </div>
                @endif

                <div class="mb-3 text-muted">
                    Before proceeding, please check your email for a verification link.
                </div>

                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn login-btn w-100 py-2 rounded-pill">
                        Resend Email
                    </button>
                </form>

                <div class="text-center mt-3">
                    <a href="{{ route('login') }}" class="dev-link">
                        ← Back to Login
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection