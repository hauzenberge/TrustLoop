@extends('admin-panel.layouts.app')

@section('content')

<!-- Title -->
<h1 class="h2">
    <br>
    {{ $title }}
</h1>

<div class="row">
    <div class="col-xxl-5 d-flex">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-header border-0 card-header-space-between">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase ps-lg-1">
                    LATEST REVIEWS
                </h2>

                <!-- Dropdown -->
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-gray-500" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                            <g>
                                <circle cx="12" cy="3.25" r="3.25" style="fill: currentColor" />
                                <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                                <circle cx="12" cy="20.75" r="3.25" style="fill: currentColor" />
                            </g>
                        </svg>
                    </a>
                    <div class="dropdown-menu">
                        <a href="javascript: void(0);" class="dropdown-item">
                            Export report
                        </a>
                        <a href="javascript: void(0);" class="dropdown-item">
                            Share
                        </a>
                        <a href="javascript: void(0);" class="dropdown-item">
                            Action
                        </a>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive  align-middle table-edge table-hover table-nowrap mb-0">
                <table id="projectsTable" class="table align-middle text-center table-edge table-nowrap mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>Review</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    @if($anwers->count() != 0)
                    <tbody class="list">
                        @foreach($anwers as $answer)
                        <tr>
                            <td class="text-start">
                                <span class="stars-reviews">
                                    @for($i = 0; $i < $answer["count"] ; $i++) <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                        @endfor
                                </span>
                            </td>
                            <td class="text-muted">{{ $answer["date"] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                </table>


            </div> <!-- / .table-responsive -->
        </div>
    </div>

    <div class="col-xxl-7 d-flex">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-header border-0 card-header-space-between">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase ps-lg-1">
                    REVIEWS PER DAY
                </h2>

            </div>

            <div class="card-body d-flex flex-column px-lg-6">
                @include('admin-panel.dashboards.components.user-chart')
            </div>
        </div>
    </div>
</div> <!-- / .row -->

<div class="row">
    <div class="col mt-2 mb-6 pb-2">

        <div class="mb-6">
            <h2 class="d-inline me-4">Your ID:</h2>
            <p class="d-inline fs-3">UA-172504677-{{ Auth::user()->id }}</p>
        </div>
        <p class="fs-3 fw-semibold">
            Website Tracking
            <a href="{{ url('demo-page/' . Auth::user()->id ) }}" target="_blank">Demo Link</a>
        </p>
        <p class="fs-3 fw-semibold">Please copy the piece of code below and insert it in to the &lt;head&gt; section of your website.</p>
        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="fs-11 border border-dark rounded py-4 px-5">
                    @include('admin-panel.dashboards.demo-modal')
                </div>
            </div>
        </div>
    </div>
</div> <!-- / .row -->

@endsection