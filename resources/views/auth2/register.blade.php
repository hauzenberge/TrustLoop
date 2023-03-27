@extends('layouts2.auth')

@section('content')
<div class="row align-items-center justify-content-center vh-100">
    <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 py-6">

        <!-- Title -->
        <h1 class="mb-2 text-center">
            Sign Up
        </h1>

        <!-- Subtitle -->
        <p class="text-secondary text-center">
            Register to access to your account
        </p>

        <!-- Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row">
                <div class="col-12">
                    <div class="mb-4">

                        <!-- Label -->
                        <label class="form-label">
                            Full name
                        </label>

                        <!-- Input -->
                        <input id="name" name="name" :value="old('name')" type="text" class="form-control" :value="old('name')" required autofocus autocomplete="name" placeholder="Your full name">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-4">

                        <!-- Label -->
                        <label class="form-label">
                            Email Address
                        </label>

                        <!-- Input -->
                        <input id="email" type="email" class="form-control" placeholder="Your email address" name="email" :value="old('email')" required autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" style="color:brown;"  />
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-12">
                    <div class="mb-4">

                        <!-- Label -->
                        <label class="form-label">
                            Password
                        </label>

                        <!-- Input -->
                        <div class="input-group input-group-merge">
                            <input id="password" type="password" name="password" class="form-control" required autocomplete="new-password" data-toggle-password-input placeholder="Your password">

                            <button type="button" class="input-group-text px-4 text-secondary link-primary" data-toggle-password></button>
                                              
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mb-4" style="color:brown; />
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-4">

                        <!-- Label -->
                        <label class="form-label">
                            Confirm password
                        </label>

                        <!-- Input -->
                        <div class="input-group input-group-merge">
                            <input id="password_confirmation"  name="password_confirmation" type="password" class="form-control" required autocomplete="new-password" data-toggle-password-input placeholder="Your password again">

                            <button type="button" class="input-group-text px-4 text-secondary link-primary" data-toggle-password></button>
                           
                        </div>
                      
                           
                    </div>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mb-4" style="color:brown;"  />
                </div>
            </div> <!-- / .row -->

            <div class="form-check">

                <!-- Input -->
                <input type="checkbox" class="form-check-input" id="agree">

                <!-- Label -->
                <label class="form-check-label" for="agree">
                    I agree with <a href="javascript: void(0);">Terms & Conditions</a> and have understood <a href="javascript: void(0);">Privacy Policy</a>
                </label>
            </div>

            <div class="row align-items-center text-center">
                <div class="col-12">

                    <!-- Button -->
                    <button type="submit" class="btn w-100 btn-primary mt-6 mb-2">Get started</button>
                </div>

                <div class="col-12">

                    <!-- Link -->
                    <small class="mb-0 text-muted">Already registered? <a href="./sign-in-basic.html" class="fw-semibold">Login</a></small>
                </div>
            </div> <!-- / .row -->
        </form>
    </div>
</div> <!-- / .row -->
@endsection