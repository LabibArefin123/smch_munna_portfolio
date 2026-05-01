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
                    <h4 class="fw-bold">Verify Your Email</h4>
                    <p class="text-muted">Check your inbox to continue</p>
                </div>

                <div class="mb-3 text-muted small">
                    Thanks for signing up! Please verify your email by clicking the link we sent.
                    If you didn’t receive it, we can resend it.
                </div>

                {{-- SUCCESS MESSAGE --}}
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success py-2">
                        A new verification link has been sent!
                    </div>
                @endif

                {{-- RESEND FORM --}}
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn login-btn w-100 py-2 rounded-pill">
                        Resend Verification Email
                    </button>
                </form>

                {{-- LOGOUT --}}
                <form method="POST" action="{{ route('logout') }}" class="mt-3 text-center">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm rounded-pill">
                        Logout
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