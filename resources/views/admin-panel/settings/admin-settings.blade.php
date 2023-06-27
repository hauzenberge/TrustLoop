@extends('admin-panel.layouts.app')

@section('content')

<!-- Title -->
<h1 class="h1 mb-6">
    {{ $title }}
</h1>

<!-- Form -->
<form>
    <div class="row">
        <div class="col-12">
            <div class="mb-5 mw-md-300px">
                <!-- Label -->
                <label class="form-label">
                    Email
                </label>
                <!-- Input -->
                <input type="email" class="form-control bg-white" placeholder="example@gmail.com">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-6 mw-md-300px">
                <!-- Label -->
                <label class="form-label">
                    Password
                </label>
                <!-- Input -->
                <div class="input">
                    <input type="password" class="form-control bg-white" autocomplete="off" data-toggle-password-input placeholder="Your password">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mw-md-300px">
                <!-- Button -->
                <button type="button" class="btn w-100 btn-primary mb-2">Save changes</button>
            </div>
        </div>
    </div> <!-- / .row -->
</form>

@endsection