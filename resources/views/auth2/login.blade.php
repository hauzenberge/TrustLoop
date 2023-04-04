@extends('admin-panel.layouts.auth')

@section('content')

<!-- Title -->
<h1 class="mb-2 text-center">
    {{ __('Sign In') }}
</h1>

<!-- Subtitle -->
<p class="text-gray-500 text-center">
    {{ __('Enter your email address and password to access admin panel') }}
</p>

<!-- Form -->
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="mb-4">

                <!-- Label -->
                <label class="form-label">
                    {{ __('Email Address') }}
                </label>

                <!-- Input -->
                <input name="email" type="email" class="form-control" placeholder="Your email address">
                <x-input-error :messages="$errors->get('email')" class="mt-2" style="color:brown; " />
            </div>
        </div>

        <div class="col-12">
            <!-- Password -->
            <div class="mb-6">

                <div class="row">
                    <div class="col">

                        <!-- Label -->
                        <label class="form-label">
                            {{ __('Password') }}
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                    <div class="col-auto">
                        <!-- Help text -->
                        <a href="{{ route('password.request') }}" class="form-text small text-muted link-primary">{{ __('Forgot password') }} </a>
                    </div>
                    @endif
                </div> <!-- / .row -->

                <!-- Input -->
                <div class="input-group input-group-merge">
                    <input name="password" type="password" class="form-control" autocomplete="off" data-toggle-password-input placeholder="Your password">
                    <button type="button" class="input-group-text px-4 text-secondary link-primary" data-toggle-password></button>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="color:brown; " />
                </div>
            </div>
        </div>
    </div> <!-- / .row -->

    <div class="form-check mb-0">

        <!-- Input -->
        <input name="remember" type="checkbox" class="form-check-input" id="remember">

        <!-- Label -->
        <label class="form-check-label" for="remember">
            {{ __('Remember me') }}
        </label>
    </div>

    <div class="row align-items-center text-center">
        <div class="col-12">

            <!-- Button -->
            <button type="submit" class="btn w-100 btn-primary mt-6 mb-2">{{ __('Sign in')}}</button>
        </div>

        <div class="col-12">

            <!-- Link -->
            <small class="mb-0 text-muted">Don't have an account yet? <a href="{{ url('/register') }}" class="fw-semibold">Sign up</a></small>
        </div>
    </div> <!-- / .row -->
</form>
@endsection