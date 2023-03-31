@extends('admin-panel.layouts.app')

@section('content')

<!-- Title -->
<h1 class="h2">
    Dashboard
</h1>

<div class="row">
    <div class="col-xxl-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Card -->
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-between">
                                <div>
                                    <!-- Title -->
                                    <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                        <span class="legend-circle-sm bg-primary"></span>
                                        sales
                                    </h5>

                                    <!-- Subtitle -->
                                    <h2 class="mb-0">
                                        $3,240.50
                                    </h2>

                                    <!-- Comment -->
                                    <p class="fs-6 text-muted mb-0">
                                        +550 to last week
                                    </p>
                                </div>


                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Card -->
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-between">

                                <div>
                                    <!-- Title -->
                                    <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                        <span class="legend-circle-sm bg-danger"></span>
                                        Registrations
                                    </h5>

                                    <!-- Subtitle -->
                                    <h2 class="mb-0">
                                        71
                                    </h2>

                                    <!-- Comment -->
                                    <p class="fs-6 text-muted mb-0 text-truncate">
                                        + 11 to last week
                                    </p>
                                </div>

                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>

    <div class="col-xxl-7">
        <div class="row">
            <div class="col-md-6">
                <!-- Card -->
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">

                                <!-- Title -->
                                <h5 class="text-uppercase text-muted fw-semibold mb-2">
                                    <span class="legend-circle bg-success"></span>Success
                                    TOTAL sales
                                </h5>

                                <!-- Subtitle -->
                                <h2 class="mb-0">
                                    $74,925.70
                                </h2>

                                <!-- Comment -->
                                <p class="fs-6 text-muted mb-0 text-truncate">

                                    This financial year
                                </p>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Card -->
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="text-uppercase text-muted fw-semibold mb-2 d-flex align-items-center">
                                    this week reviews

                                    <!-- Icon -->
                                    <a href="javascript: void(0);" class="ms-2 text-secondary" data-bs-toggle="tooltip" title="Pageviews is a metric defined as the total number of pages viewed.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                            <path d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm.25,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12.25,5ZM14.5,18.5h-4a1,1,0,0,1,0-2h.75a.25.25,0,0,0,.25-.25v-4.5a.25.25,0,0,0-.25-.25H10.5a1,1,0,0,1,0-2h1a2,2,0,0,1,2,2v4.75a.25.25,0,0,0,.25.25h.75a1,1,0,0,1,0,2Z" style="fill: currentColor" />
                                        </svg>
                                    </a>
                                </h5>

                                <!-- Subtitle -->
                                <h2 class="mb-0">
                                    123,598
                                </h2>

                                
                            </div>
                            <div class="col-5">

                                <!-- Chart -->
                                <div class="chart-container h-65px">
                                    <canvas id="pageViewsChart"></canvas>
                                </div>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
</div> <!-- / .row -->

<div class="row">

    <div class="col">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-header border-0 card-header-space-between">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase">
                    CONVERSION RATE
                </h2>

                <!-- Label -->
                <h5 class="text-uppercase text-muted fw-semibold mb-0">
                    <span class="legend-circle-lg bg-primary"></span>
                    PROJECTIONS
                </h5>

                <!-- Label -->
                <h5 class="text-uppercase text-muted fw-semibold mb-0 ms-4">
                    <span class="legend-circle-lg bg-light"></span>
                    FREE
                </h5>
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

        <!-- Card -->
        <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "account-type"}, "account-type", "status"], "page": 8}' id="users">
            <div class="card-header border-0 card-header-space-between">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase">
                    Users
                </h2>

                <!-- Dropdown -->
                <div class="dropdown ms-4">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="w-60px">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAllCheckboxes">
                                </div>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="name">
                                    Full name
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="email">
                                    Email
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="id">
                                    User ID
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="account-type">
                                    Account Type
                                </a>
                            </th>
                            <th class="w-150px min-w-150px">
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                    Status
                                </a>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="list">
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-14.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Hakeem Chan</span>
                            </td>
                            <td class="email">lobortis.augue@natoquepenatibuset.ca</td>
                            <td class="id">#9265</td>
                            <td class="account-type">Trial</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-23.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Orli J. Goodman</span>
                            </td>
                            <td class="email">pede@at.com</td>
                            <td class="id">#8545</td>
                            <td class="account-type">Paid</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-16.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Halee P. Lane</span>
                            </td>
                            <td class="email">diam@nislNullaeu.net</td>
                            <td class="id">#4445</td>
                            <td class="account-type">Trial</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <span class="avatar-title text-bg-primary-soft">KS</span>
                                </div>
                                <span class="name fw-bold">Kimberly Salinas</span>
                            </td>
                            <td class="email">in.lobortis.tellus@faucibusorci.co.uk</td>
                            <td class="id">#2391</td>
                            <td class="account-type">Paid</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-17.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Galena Oliver</span>
                            </td>
                            <td class="email">eleifend.nec@ligulaconsectetuerrhoncus.ca</td>
                            <td class="id">#8987</td>
                            <td class="account-type">Trial</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-19.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Kelly Doyle</span>
                            </td>
                            <td class="email">urna.et@volutpatNulladignissim.org</td>
                            <td class="id">#5898</td>
                            <td class="account-type">Paid</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-20.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Keane Wyatt</span>
                            </td>
                            <td class="email">quam@Ut.org</td>
                            <td class="id">#3431</td>
                            <td class="account-type">Trial</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <span class="avatar-title text-bg-success-soft">NA</span>
                                </div>
                                <span class="name fw-bold">Nasim Aguirre</span>
                            </td>
                            <td class="email">nisl@mollis.net</td>
                            <td class="id">#6701</td>
                            <td class="account-type">Paid</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-25.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Leo Johnston</span>
                            </td>
                            <td class="email">Cum.sociis@Etiambibendumfermentum.co.uk</td>
                            <td class="id">#9258</td>
                            <td class="account-type">Trial</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-26.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Macon Dean</span>
                            </td>
                            <td class="email">aliquam@nec.edu</td>
                            <td class="id">#4885</td>
                            <td class="account-type">Paid</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-11.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Yoko Grimes</span>
                            </td>
                            <td class="email">ut.eros@Donecporttitor.co.uk</td>
                            <td class="id">#1960</td>
                            <td class="account-type">Trial</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-27.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Jordan Douglas</span>
                            </td>
                            <td class="email">fermentum.convallis.ligula@euenimEtiam.edu</td>
                            <td class="id">#8385</td>
                            <td class="account-type">Paid</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-30.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Carly Beard</span>
                            </td>
                            <td class="email">dolor.dolor@lacusMaurisnon.org</td>
                            <td class="id">#9380</td>
                            <td class="account-type">Trial</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-29.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Kareem Q. Weeks</span>
                            </td>
                            <td class="email">eget@aliquetProinvelit.co.uk</td>
                            <td class="id">#9761</td>
                            <td class="account-type">Paid</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <span class="avatar-title text-bg-danger-soft">DH</span>
                                </div>
                                <span class="name fw-bold">Drew R. Hatfield</span>
                            </td>
                            <td class="email">Integer.vulputate@facilisi.edu</td>
                            <td class="id">#4798</td>
                            <td class="account-type">Trial</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-22.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Kitra F. Strickland</span>
                            </td>
                            <td class="email">Donec.consectetuer@dolorNulla.net</td>
                            <td class="id">#1246</td>
                            <td class="account-type">Paid</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-28.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Jack Dennis</span>
                            </td>
                            <td class="email">Quisque.libero.lacus@torquentper.com</td>
                            <td class="id">#1099</td>
                            <td class="account-type">Trial</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-10.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Tyler Hartman</span>
                            </td>
                            <td class="email">arcu.imperdiet@Pellentesqueultriciesdignissim.com</td>
                            <td class="id">#9151</td>
                            <td class="account-type">Paid</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('assets_project/assets/images/profiles/profile-18.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Hally Gilmore</span>
                            </td>
                            <td class="email">lacus.Etiam@Pellentesquehabitantmorbi.net</td>
                            <td class="id">#9846</td>
                            <td class="account-type">Trial</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-24.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Rosalyn Cherry</span>
                            </td>
                            <td class="email">at.egestas.a@eunullaat.co.uk</td>
                            <td class="id">#9564</td>
                            <td class="account-type">Paid</td>
                            <td>
                                <a href="#view">
                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.400574C6 0.400574 1.73 3.51057 0 7.90057C1.73 12.2906 6 15.4006 11 15.4006C16 15.4006 20.27 12.2906 22 7.90057C20.27 3.51057 16 0.400574 11 0.400574ZM11 12.9006C8.24 12.9006 6 10.6606 6 7.90057C6 5.14057 8.24 2.90057 11 2.90057C13.76 2.90057 16 5.14057 16 7.90057C16 10.6606 13.76 12.9006 11 12.9006ZM11 4.90057C9.34 4.90057 8 6.24057 8 7.90057C8 9.56057 9.34 10.9006 11 10.9006C12.66 10.9006 14 9.56057 14 7.90057C14 6.24057 12.66 4.90057 11 4.90057Z" fill="#DEDEDE" />
                                    </svg>
                                </a>
                                <a href="#edit">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.71 4.44307C18.1 4.05307 18.1 3.40307 17.71 3.03307L15.37 0.693074C15 0.303074 14.35 0.303074 13.96 0.693074L12.12 2.52307L15.87 6.27307M0 14.6531V18.4031H3.75L14.81 7.33307L11.06 3.58307L0 14.6531Z" fill="#7CBEEE" />
                                    </svg>
                                </a>
                                <a href="#delete">
                                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.0025 16.4006C1.0025 17.5006 1.9025 18.4006 3.0025 18.4006H11.0025C12.1025 18.4006 13.0025 17.5006 13.0025 16.4006V4.40057H1.0025V16.4006ZM14.0025 1.40057H10.5025L9.5025 0.400574H4.5025L3.5025 1.40057H0.00250244V3.40057H14.0025V1.40057Z" fill="#EF5C5C" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- / .table-responsive -->

            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-5 text-secondary small">
                        Showing: <span class="list-pagination-page-first"></span> - <span class="list-pagination-page-last"></span> of <span class="list-pagination-pages"></span>
                    </div>

                    <!-- Pagination -->
                    <ul class="pagination list-pagination mb-0"></ul>
                </div>
            </div>

        </div>
    </div>
</div> <!-- / .row -->

@endsection