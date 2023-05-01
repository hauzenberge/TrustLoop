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
        <input name="remember" type="checkbox" class="form-check-input" id="remember" checked>

        <!-- Label -->
        <label class="form-check-label" for="remember">
            {{ __('Remember me') }}
        </label>
    </div>

    <div class="row align-items-center text-center" style="
                                                            gap: 0px;
                                                        ">
       

            <!-- Button -->
            <button type="submit" class="btn w-100 btn-primary mt-6 mb-2 col-12" style="
                                                                                background: #5083C1;
                                                                                border-radius: 10px;
                                                                                font-family: 'Open Sans';
                                                                                font-style: normal;
                                                                                font-weight: 700;
                                                                                font-size: 14px;
                                                                                line-height: 19px;
                                                                                text-align: center;
                                                                            ">
                {{ __('Sign in')}}
            </button>
        
        @if (Route::has('auth.google'))
       
            <a href="{{ route('auth.google') }}" class="btn w-100 btn btn-light mt-6 mb-2 col-12" style="
                                                                                            background: #FFFFFF;
                                                                                            border-radius: 10px;
                                                                                            font-family: 'Open Sans';
                                                                                            font-style: normal;
                                                                                            font-weight: 700;
                                                                                            font-size: 14px;
                                                                                            line-height: 18px;
                                                                                            color: #344054;
                                                                                        ">
                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_124_2961)">
                        <path d="M18.8147 9.20743C18.8147 8.59564 18.7623 7.98054 18.6506 7.37866H9.68994V10.8444H14.8213C14.6084 11.9622 13.9242 12.951 12.9224 13.5793V15.828H15.9837C17.7815 14.2605 18.8147 11.9456 18.8147 9.20743Z" fill="#4285F4" />
                        <path d="M9.69 18.0005C12.2522 18.0005 14.4129 17.2035 15.9873 15.8278L12.9259 13.579C12.0742 14.128 10.9746 14.4389 9.69349 14.4389C7.21508 14.4389 5.11366 12.8548 4.35967 10.7251H1.20056V13.0433C2.81328 16.0824 6.09805 18.0005 9.69 18.0005Z" fill="#34A853" />
                        <path d="M4.35612 10.7253C3.95818 9.60751 3.95818 8.39715 4.35612 7.27939V4.96118H1.20051C-0.146913 7.50426 -0.146913 10.5004 1.20051 13.0435L4.35612 10.7253Z" fill="#FBBC04" />
                        <path d="M9.69 3.56224C11.0444 3.5424 12.3534 4.02523 13.3343 4.9115L16.0466 2.34196C14.3292 0.814129 12.0497 -0.0258495 9.69 0.000606499C6.09804 0.000606499 2.81327 1.91867 1.20056 4.96111L4.35617 7.27931C5.10668 5.1463 7.21159 3.56224 9.69 3.56224Z" fill="#EA4335" />
                    </g>
                    <defs>
                        <clipPath id="clip0_124_2961">
                            <rect width="19" height="18" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                Continue with Google
            </a>
        
        @endif


        <div class="col-12">
            <!-- Link -->
            <small class="mb-0 text-muted">Don't have an account yet? <a href="{{ url('/register') }}" class="fw-semibold">Sign up</a></small>
        </div>
    </div> <!-- / .row -->
</form>
@endsection