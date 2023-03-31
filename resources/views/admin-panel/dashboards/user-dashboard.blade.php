@extends('admin-panel.layouts.app')

@section('content')

<!-- Title -->
<h1 class="h2">
    Dashboard
</h1>



<div class="row">
    <div class="col">
        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-header border-0 card-header-space-between">
                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase">
                    REVIEWS PER DAY
                </h2>

            </div>

            <div class="card-body d-flex flex-column">
                <!-- Chart -->
                <div class="chart-container flex-grow-1 h-275px">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div> <!-- / .row -->

<div class="row">
    <div class="col">
        <!-- Title -->
        <p>
            <strong>
                Your ID:
            </strong>
            UA-172504677-1
        </p>
        <strong>Website Tracking</strong>
        <p>
        <h2>Please add to site

            <HEAD> (trustloop.js)
        </h2>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
       
        </p>
    </div>

</div> <!-- / .row -->

@endsection