@extends('admin-panel.layouts.auth')

@section('content')
<!-- Title -->
<h1 class="mb-2 text-center">
    Sign In
</h1>

<!-- Subtitle -->
<p class="text-gray-500 text-center">
    Enter your email address and password to access admin panel
</p>

<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Form -->
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="row">
        <div class="col-12">
            <div class="mb-4">

                <!-- Label -->
                <label class="form-label">
                    {{ ('Email') }}
                </label>

                <!-- Input -->

                <input type="email" name="email" class="form-control" placeholder="Your email address" required autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" style="color:brown; " />
            </div>
        </div>

        <div class="col-12">
            <!-- Password -->
            <div class="mb-4">

                <div class="row">
                    <div class="col">

                        <!-- Label -->
                        <label class="form-label">
                            {{ __('Password') }}
                        </label>
                    </div>

                    <div class="col-auto">
                        @if (Route::has('password.request'))
                        <!-- Help text -->
                        <a href="{{ route('password.request') }}" class="form-text small text-muted link-primary">{{ __('Forgot password') }} </a>
                        @endif
                    </div>
                </div> <!-- / .row -->

                <!-- Input -->
                <div class="input-group input-group-merge">
                    <input id="password" class="form-control" type="password" name="password" required data-toggle-password-input placeholder="Your password">


                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="color:brown; " />

                </div>
            </div>
        </div>
    </div> <!-- / .row -->

    <div class="form-check mb-0">

        <!-- Input -->
        <input type="checkbox" class="form-check-input" id="remember" name="remember">

        <!-- Label -->
        <label class="form-check-label" for="remember">
            {{ __('Remember me') }}
        </label>
    </div>

    <div class="row align-items-center text-center">
        <div class="col-12">

            <!-- Button -->
            <button type="submit" class="btn w-100 btn-primary mt-6 mb-2">{{ __('Sign in') }}</button>
        </div>

        <div class="col-12">

            <!-- Link -->
            <small class="mb-0 text-muted">Don't have an account yet? <a href="{{ url('/register') }}" class="fw-semibold">Sign up</a></small>
        </div>
    </div> <!-- / .row -->
</form>
</div>

@endsection