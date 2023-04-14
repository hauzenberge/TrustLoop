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
            <div class="card-body">
                <div class="text-center mb-5">
                    <div class="avatar avatar-xxl avatar-circle mb-5">
                        <label class="d-block cursor-pointer">
                            <span class="position-absolute bottom-0 end-0 m-0 text-bg-primary w-30px h-30px rounded-circle d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                    <g>
                                        <path d="M2.65,16.4a.5.5,0,0,0-.49-.13.52.52,0,0,0-.35.38L.39,23a.51.51,0,0,0,.6.6l6.36-1.42a.52.52,0,0,0,.38-.35.5.5,0,0,0-.13-.49Z" style="fill: currentColor" />
                                        <path d="M17.85,7.21l-11,11a.24.24,0,0,0,0,.35l1.77,1.77a.5.5,0,0,0,.71,0L20,9.68A.48.48,0,0,0,20,9L18.21,7.21A.25.25,0,0,0,17.85,7.21Z" style="fill: currentColor" />
                                        <path d="M16.79,5.79,15,4a.48.48,0,0,0-.7,0L3.71,14.63a.51.51,0,0,0,0,.71l1.77,1.77a.24.24,0,0,0,.35,0l11-11A.25.25,0,0,0,16.79,5.79Z" style="fill: currentColor" />
                                        <path d="M22.45,1.55a4,4,0,0,0-5.66,0l-.71.71a.51.51,0,0,0,0,.71l5,4.95a.52.52,0,0,0,.71,0l.71-.71A4,4,0,0,0,22.45,1.55Z" style="fill: currentColor" />
                                    </g>
                                </svg>
                            </span>
                            <input type="file" name="avatar" class="d-none">
                        </label>
                        {!! $user->getAvatarAttribute(112) !!}
                    </div>
                    <h3 class="mb-0">{{ $user->name }}</h3>
                </div>

                <!-- Divider 
            <hr class="mb-0">
            -->
            </div>
            <!--
            <ul class="scrollspy mb-5" id="account" data-scrollspy='{"offset": "30"}'>          
            </ul>


            <div class="card-footer text-center">
            </div>
        -->
        </div>
    </div>

    <div class="col">

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
                        <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" disabled>
                    </div>
                </div> <!-- / .row -->

                <div class="row mb-4">
                    <div class="col-lg-3">
                        <label for="emailAddress" class="col-form-label">{{ __('Email address') }}</label>
                    </div>

                    <div class="col-lg">
                        <input d="email" name="email" type="email" type="text" class="form-control" id="emailAddress" value="{{ old('email', $user->email) }}" required autocomplete="username" disabled>
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
                    <label for="country_id">Оберіть країну</label>
                    <select class="form-control" name="country_id" id="country_id" disabled>
                        @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ $userData->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>



        <!-- Card -->
        <div class="card border-0 scroll-mt-3" id="deleteAccountSection">
            <div class="card-header">
                <h2 class="h3 mb-0">Delete Account</h2>
            </div>

            <div class="card-body">
                <div class="p-6">

                    <div class="alert text-bg-danger-soft d-flex align-items-center" role="alert">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="32" width="32" class="me-3">
                                <path d="M23.39,10.53,13.46.6a2.07,2.07,0,0,0-2.92,0L.61,10.54a2.06,2.06,0,0,0,0,2.92h0l9.93,9.92A2,2,0,0,0,12,24a2.07,2.07,0,0,0,1.47-.61l9.92-9.92A2.08,2.08,0,0,0,23.39,10.53ZM11,6.42a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Zm1.05,11.51h0a1.54,1.54,0,0,1-1.52-1.47A1.47,1.47,0,0,1,12,14.93h0A1.53,1.53,0,0,1,13.5,16.4,1.48,1.48,0,0,1,12.05,17.93Z" style="fill: currentColor" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="mb-0">If you delete your account, you will lose all your data</h4>
                            Take a backup of your data

                        </div>
                    </div>


                    <div class="d-flex justify-content-end mt-5">
                        <!-- Button -->

                        <a href="{{$user->resource_url . '/delete'}}" class="btn btn-danger">Delete account</a>
                    </div>
                </div>
                </form>


            </div>
        </div>

    </div>
</div> <!-- / .row -->

@endsection