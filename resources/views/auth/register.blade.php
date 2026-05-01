@extends('frontend.layouts.app')

@vite('resources/scss/backend/login_page/login.scss')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

@section('content')
<div class="login-page">

    <div class="login-wrapper">
        <div class="login-glass">

            {{-- LEFT SIDE (reuse same doctor panel) --}}
            @include('auth.custom_login.left')

            {{-- RIGHT SIDE (REGISTER FORM) --}}
            <div class="login-panel">
                <div class="text-center mb-4">
                    <h4 class="fw-bold">Create Account</h4>
                    <p class="text-muted">Register to access the system</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- Name --}}
                    <div class="mb-3">
                        <input type="text" name="name"
                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                            placeholder="Full Name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Phone --}}
                    <div class="mb-3">
                        <input type="text" name="phone_1"
                            class="form-control form-control-lg @error('phone_1') is-invalid @enderror"
                            placeholder="Phone Number" value="{{ old('phone_1') }}" required>
                        @error('phone_1')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <input type="email" name="email"
                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                            placeholder="Email Address" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="mb-3 position-relative">
                        <input id="password" type="password"
                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                            name="password" placeholder="Password" required>

                        <span class="toggle-password" onclick="togglePassword()">
                            <i class="fas fa-eye"></i>
                        </span>

                        @error('password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Confirm Password --}}
                    <div class="mb-4">
                        <input type="password" name="password_confirmation"
                            class="form-control form-control-lg"
                            placeholder="Confirm Password" required>
                    </div>

                    {{-- Submit --}}
                    <button type="submit" class="btn login-btn w-100 py-2 rounded-pill">
                        Register
                    </button>

                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}" class="dev-link">
                            Already have an account? Login
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

{{-- Password toggle --}}
<script src="{{ asset('js/custom_frontend/login_page/password.js') }}"></script>
@endsection