@extends('admin-panel.layouts.app')

@section('content')


<div class="d-flex align-items-baseline justify-content-between">

    <!-- Title -->
    <h1 class="h2">
        {{ $title }}
    </h1>

</div>

<div class="row">
    <div class="col-md-4 col-xxl-3">

        <!-- Card -->
        <div class="card border-0 sticky-md-top top-10px">

            <ul class="scrollspy mb-5" id="account" data-scrollspy='{"offset": "30"}'>
                <li class="active">
                    <a href="#basicInformationSection" class="d-flex align-items-center py-3">
                        <svg viewBox="0 0 24 24" height="14" width="14" class="me-3" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.750 6.000 A5.250 5.250 0 1 0 17.250 6.000 A5.250 5.250 0 1 0 6.750 6.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M2.25,23.25a9.75,9.75,0,0,1,19.5,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                        {{ __('Basic information') }}
                    </a>
                </li>

                <li>
                    <a href="#countrySection" class="d-flex align-items-center py-3">
                        <svg viewBox="0 0 24 24" height="14" width="14" class="me-3" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.750 6.000 A5.250 5.250 0 1 0 17.250 6.000 A5.250 5.250 0 1 0 6.750 6.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M2.25,23.25a9.75,9.75,0,0,1,19.5,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                        {{ __('Country') }}
                    </a>
                </li>

                <li>
                    <a href="#passwordSection" class="d-flex align-items-center py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="14" width="14" class="me-3">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.75 9.75H5.25C4.42157 9.75 3.75 10.4216 3.75 11.25V21.75C3.75 22.5784 4.42157 23.25 5.25 23.25H18.75C19.5784 23.25 20.25 22.5784 20.25 21.75V11.25C20.25 10.4216 19.5784 9.75 18.75 9.75Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 9.75V6C6.75 4.60761 7.30312 3.27226 8.28769 2.28769C9.27226 1.30312 10.6076 0.75 12 0.75C13.3924 0.75 14.7277 1.30312 15.7123 2.28769C16.6969 3.27226 17.25 4.60761 17.25 6V9.75" />
                            <path stroke="currentColor" stroke-width="1.5" d="M8.625 15C8.41789 15 8.25 14.8321 8.25 14.625C8.25 14.4179 8.41789 14.25 8.625 14.25" />
                            <path stroke="currentColor" stroke-width="1.5" d="M8.625 15C8.83211 15 9 14.8321 9 14.625C9 14.4179 8.83211 14.25 8.625 14.25" />
                            <path stroke="currentColor" stroke-width="1.5" d="M8.625 18.75C8.41789 18.75 8.25 18.5821 8.25 18.375C8.25 18.1679 8.41789 18 8.625 18" />
                            <path stroke="currentColor" stroke-width="1.5" d="M8.625 18.75C8.83211 18.75 9 18.5821 9 18.375C9 18.1679 8.83211 18 8.625 18" />
                            <path stroke="currentColor" stroke-width="1.5" d="M12 15C11.7929 15 11.625 14.8321 11.625 14.625C11.625 14.4179 11.7929 14.25 12 14.25" />
                            <path stroke="currentColor" stroke-width="1.5" d="M12 15C12.2071 15 12.375 14.8321 12.375 14.625C12.375 14.4179 12.2071 14.25 12 14.25" />
                            <g>
                                <path stroke="currentColor" stroke-width="1.5" d="M12 18.75C11.7929 18.75 11.625 18.5821 11.625 18.375C11.625 18.1679 11.7929 18 12 18" />
                                <path stroke="currentColor" stroke-width="1.5" d="M12 18.75C12.2071 18.75 12.375 18.5821 12.375 18.375C12.375 18.1679 12.2071 18 12 18" />
                            </g>
                            <g>
                                <path stroke="currentColor" stroke-width="1.5" d="M15.375 15C15.1679 15 15 14.8321 15 14.625C15 14.4179 15.1679 14.25 15.375 14.25" />
                                <path stroke="currentColor" stroke-width="1.5" d="M15.375 15C15.5821 15 15.75 14.8321 15.75 14.625C15.75 14.4179 15.5821 14.25 15.375 14.25" />
                            </g>
                            <g>
                                <path stroke="currentColor" stroke-width="1.5" d="M15.375 18.75C15.1679 18.75 15 18.5821 15 18.375C15 18.1679 15.1679 18 15.375 18" />
                                <path stroke="currentColor" stroke-width="1.5" d="M15.375 18.75C15.5821 18.75 15.75 18.5821 15.75 18.375C15.75 18.1679 15.5821 18 15.375 18" />
                            </g>
                        </svg>
                        Password
                    </a>
                </li>

                <li>
                    <a href="#deleteAccountSection" class="d-flex align-items-center py-3">
                        <svg viewBox="0 0 24 24" height="14" width="14" class="me-3" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.177,23.25H7.677a1.5,1.5,0,0,1-1.5-1.5V8.25h13.5v13.5A1.5,1.5,0,0,1,18.177,23.25Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M10.677 18.75L10.677 12.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M15.177 18.75L15.177 12.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M2.427 6.212L21.501 2.158" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M13.541.783l-4.4.935A1.5,1.5,0,0,0,7.984,3.5L8.3,4.965l7.336-1.56L15.32,1.938A1.5,1.5,0,0,0,13.541.783Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                        Delete account
                    </a>
                </li>
            </ul>





            <div class="card-footer text-center">

            </div>
        </div>
    </div>

    <div class="col">

        <form method="post" action="{{ route('user.store') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <!-- Card -->
            <div class="card border-0 scroll-mt-3" id="basicInformationSection">
                <div class="card-header">
                    <h2 class="h3 mb-0">{{ __('Basic information') }}</h2>
                </div>
                <div class="card-body">


                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label for="fullName" class="col-form-label">{{ __('Full Name') }}</label>
                        </div>

                        <div class="col-lg">
                            <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                            <div class="invalid-feedback">{{ __('Please add your full name') }}</div>

                            @if($errors->count() != 0)

                            @endif
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                    </div> <!-- / .row -->

                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label for="emailAddress" class="col-form-label">{{ __('Email address') }}</label>
                        </div>

                        <div class="col-lg">
                            <input d="email" name="email" type="email" type="text" class="form-control" id="emailAddress" value="{{ old('email', $user->email) }}" required autocomplete="username">
                            <div class="invalid-feedback">Please add your email address</div>

                            <x-input-error class="mt-2" :messages="$errors->get('email')" />

                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>

            <div class="card border-0 scroll-mt-3" id="countrySection">
                <div class="card-header">
                    <h2 class="h3 mb-0">{{ __('Country') }}</h2>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="country_id">{{ _('Enter Country') }}</label>
                        <select class="form-control" name="country_id" id="country_id">
                            @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>

            <!-- Card -->
            <div class="card border-0 scroll-mt-3" id="passwordSection">
                <div class="card-header">
                    <h2 class="h3 mb-0">Password</h2>
                </div>

                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label for="newPassword" class="col-form-label">Password</label>
                        </div>

                        <div class="col-lg">

                            <div class="input-group input-group-merge">
                                <input id="password" name="password" type="password" class="form-control" autocomplete="new-password" data-toggle-password-input placeholder="Your new password">

                                <button type="button" class="input-group-text px-4 text-secondary link-primary" data-toggle-password></button>
                            </div>

                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" style="color:red;" />

                        </div>

                    </div> <!-- / .row -->

                    <div class="row">
                        <div class="col-lg offset-lg-3">
                            <div class="alert alert-light mw-450px" role="alert">
                                <h4 class="mb-3">Password requirements:</h4>
                                <ul class="p-3 mb-0">
                                    <li>Minimum 8 characters long - the more, the better</li>
                                    <li>At least one lowercase character</li>
                                    <li>At least one uppercase character</li>
                                    <li>At least one number, symbol, or whitespace character</li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>

            <!-- Card -->
            <div class="card border-0 scroll-mt-3" id="deleteAccountSection">
                <div class="card-header">
                    <h2 class="h3 mb-0">Add Account</h2>
                </div>

                <div class="card-body">
                    <div class="p-6">
                        <div class="d-flex justify-content-end mt-5">

                            <!-- Button -->
                            <button type="submit" class="btn btn-primary">Add Account</button>
                        </div>
                    </div>



                </div>
            </div>
        </form>

    </div>
</div> <!-- / .row -->

@endsection