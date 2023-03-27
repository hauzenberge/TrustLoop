@extends('layouts2.auth')

@section('content')

<div class="row align-items-center justify-content-center vh-100">
    <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 py-6">

        <!-- Title -->
        <h1 class="mb-2 text-center">
            Forgot password?
        </h1>

        <!-- Subtitle -->
        <p class="text-secondary text-center">
            Enter your email address and we'll send you an email with instructions to reset your password
        </p>

        <!-- Form -->

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="row">
                <div class="col-12">
                    <div class="mb-4">
                        <label class="form-label" for="email">{{ __('Email Address') }}</label>
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <div class="row align-items-center text-center">
                    <div class="col-12">

                        <!-- Button -->
                        <button type="submit" class="btn w-100 btn-primary mt-3 mb-2">{{ __('Reset password') }}</button>
                    </div>

                    <div class="col-12">

                        <!-- Link -->
                        <small class="mb-0 text-muted">{{ __('Back to') }} <a href="{{ url('/login') }}" class="fw-semibold">{{ __('Sign in') }}</a></small>
                    </div>
                </div> <!-- / .row -->
            </div>
        </form>
    </div>
</div>
@endsection