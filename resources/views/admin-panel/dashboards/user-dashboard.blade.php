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
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-gray-500"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <div class="table-responsive">
                            <table id="projectsTable"
                                class="table align-middle text-center table-edge table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Review</th>
                                        <th>Name</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-start">
                                            <span class="stars-reviews">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                            </span>
                                        </td>
                                        <td class="text-muted">Jon Richardson</td>
                                        <td class="text-muted">28.02.23</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">
                                            <span class="stars-reviews">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                            </span>
                                        </td>
                                        <td class="text-muted">Alba Monday</td>
                                        <td class="text-muted">28.02.23</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">
                                            <span class="stars-reviews">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                            </span>
                                        </td>
                                        <td class="text-muted">Rose Watson</td>
                                        <td class="text-muted">28.02.23</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">
                                            <span class="stars-reviews">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                            </span>
                                        </td>
                                        <td class="text-muted">Levente Kosa</td>
                                        <td class="text-muted">28.02.23</td>

                                    </tr>
                                    <tr>
                                        <td class="text-start">
                                            <span class="stars-reviews">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                                <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                            </span>
                                        </td>
                                        <td class="text-muted">Andy Webb</td>
                                        <td class="text-muted">28.02.23</td>
                                    </tr>
                                </tbody>
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

                            <!-- Chart -->
                            <div class="chart-container flex-grow-1 h-275px">
                                <canvas id="reviewsChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col mt-2 mb-6 pb-2">

                    <div class="mb-6">
                        <h2 class="d-inline me-4">Your ID:</h2>
                        <p class="d-inline fs-3">UA-172504677-1</p>
                    </div>
                    <p class="fs-3 fw-semibold">Website Tracking</p>
                    <p class="fs-3 fw-semibold">Please add to site &lt;HEAD&gt; (trustloop.js)</p>
                    <div class="row">
                        <div class="col-12 col-xl-9">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-6">
                            <div class="fs-11 border border-dark rounded py-4 px-5">
                                <p class="m-0">&lt;!DOCTYPE html&gt;</p>
                                <p class="m-0">&lt;html lang="en"&gt;</p>
                                <p class="m-0">&lt;head&gt;</p>
                                <p class="m-0">&lt;meta charset="UTF-8"&gt;</p>
                                <p class="m-0">&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;</p>
                                <p class="m-0">&lt;meta name="viewport" content="width=device-width,
                                    initial-scale=1.0"&gt;</p>
                                <p class="m-0">&lt;title&gt;Jadoo&lt;/title&gt;</p>
                                <p class="m-0">&lt;link rel="stylesheet" href="styles.css"&gt;</p>
                                <p class="m-0">&lt;link rel="preconnect" href="https://fonts.googleapis.com"&gt;</p>
                                <p class="m-0">&lt;link rel="preconnect" href="https://fonts.gstatic.com"
                                    crossorigin&gt;</p>
                                <p class="m-0">&lt;link
                                    href="https://fonts.googleapis.com/css2?
                                    family=Poppins:wght@400;500;600;700&family=Volkhov
                                    :wght@700&display=swap"rel="stylesheet"&gt;
                                </p>
                                <p class="m-0">&lt;/head&gt;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->

@endsection