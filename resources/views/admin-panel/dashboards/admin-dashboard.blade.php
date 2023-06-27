@extends('admin-panel.layouts.app')

@section('content')

<!-- Title -->
<h1 class="h2">
    {{ $title }}
</h1>

<div class="row">
    <div class="col-xxl-8 d-flex">


        <!-- Card -->
        <div class="card w-100 border-0">
            <div class="card-body px-6 py-4 py-lg-6">
                <div class="row">
                    <div class="col d-flex my-4 my-lg-0">

                        <div>
                            <!-- Title -->
                            <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                <span class="legend-circle-sm bg-primary"></span>
                                Sales
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
                    <div class="col flex-grow-0 d-none d-lg-flex p-0 mx-6 border-end border-1"></div>
                    <div class="col d-flex my-4 my-lg-0">

                        <div>
                            <!-- Title -->
                            <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-3">
                                <span class="legend-circle-sm bg-danger"></span>
                                Registrations
                            </h5>

                            <!-- Subtitle -->
                            <h2 class="mb-0">
                                {{ $registrations_count }}
                            </h2>

                            <!-- Comment -->
                            <p class="fs-6 text-muted mb-0">
                                + {{ $registrations_count_weeks }} to last week
                            </p>
                        </div>
                    </div>
                    <div class="col flex-grow-0 d-none d-lg-flex p-0 mx-6 border-end border-1"></div>
                    <div class="col d-flex my-4 my-lg-0">

                        <div>
                            <!-- Title -->
                            <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-3">
                                <span class="legend-circle-sm bg-success"></span>
                                TOTAL sales
                            </h5>

                            <!-- Subtitle -->
                            <h2 class="mb-0">
                                $74,925.70
                            </h2>

                            <!-- Comment -->
                            <p class="fs-6 text-muted mb-0">
                                This financial year
                            </p>
                        </div>
                    </div>
                    <div class="col flex-grow-0 d-none d-lg-flex p-0 mx-6 border-end border-1"></div>
                    <div class="col d-flex my-4 my-lg-0">

                        <div>
                            <!-- Title -->
                            <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-3">
                                <span class="legend-circle-sm bg-warning"></span>
                                TOTAL users
                            </h5>

                            <!-- Subtitle -->
                            <h2 class="mb-0">
                                {{ $total_users }}
                            </h2>

                            <!-- Comment -->
                            <p class="fs-6 text-muted mb-0">
                                Total amount of users
                            </p>
                        </div>
                    </div>
                </div> <!-- / .row -->
            </div>
        </div>

    </div>

    <div class="col-xxl-4 d-flex">

        <!-- Card -->
        <div class="card w-100 border-0">
            <div class="card-body p-6">
                <div class="row justify-content-between">
                    <div class="col d-flex flex-wrap">

                        <!-- Title -->
                        <h5 class="text-uppercase text-muted fw-semibold w-100 mb-2 d-flex align-items-center">
                            This week reviews

                            <!-- Icon -->
                            <a href="javascript: void(0);" class="ms-6 text-gray-500" data-bs-toggle="tooltip" title="This week reviews.">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                    <path d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm.25,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12.25,5ZM14.5,18.5h-4a1,1,0,0,1,0-2h.75a.25.25,0,0,0,.25-.25v-4.5a.25.25,0,0,0-.25-.25H10.5a1,1,0,0,1,0-2h1a2,2,0,0,1,2,2v4.75a.25.25,0,0,0,.25.25h.75a1,1,0,0,1,0,2Z" style="fill: currentColor" />
                                </svg>
                            </a>
                        </h5>

                        <!-- Subtitle -->
                        <h2 class="w-100 mb-0 mt-auto">
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

<div class="row">
    <div class="col-xxl-5 d-flex">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-header border-0 card-header-space-between">

            @include('admin-panel.dashboards.components.admin-reviews')
        </div>
    </div>

    <div class="col-xxl-7 d-flex">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-header border-0 card-header-space-between">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase ps-lg-1">
                    CONVERSION RATE
                </h2>

                <!-- Label -->
                <h5 class="text-uppercase text-muted fw-semibold mb-0 px-lg-6">
                    <span class="legend-circle-lg bg-secondary"></span>
                    Paid
                </h5>

                <!-- Label -->
                <h5 class="text-uppercase text-muted fw-semibold mb-0 ms-5 px-lg-6">
                    <span class="legend-circle-lg bg-gray-300"></span>
                    Free
                </h5>
            </div>

            <div class="card-body d-flex flex-column px-lg-6">
            @include('admin-panel.dashboards.components.admin-chart')
            </div>
        </div>
    </div>
</div> <!-- / .row -->

<div class="row">
    <div class="col">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "type"], "page": 5}' id="users">
            <div class="card-header border-0 card-header-space-between px-lg-6">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase">
                    Users
                </h2>

                <!-- Dropdown -->
                <div class="dropdown ms-4">
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
            <div class="table-responsive">
                <table class="table user-table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="w-60px pe-0">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAllCheckboxes">
                                </div>
                            </th>
                            <th class="ps-3 w-25">
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
                            <th class="text-center">
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="type">
                                    Account Type
                                </a>
                            </th>
                            <th class="w-150px text-center">
                                <a href="javascript: void(0);" class="text-muted">
                                    Edit
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach($userList as $user)
                        <tr>
                            <td class="pe-0">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            
                            <td class="ps-3">
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    {!! $user['avatar'] !!}
                                </div>
                                <span class="name fw-bold">{{ $user['name'] }}</span>
                            </td>
                            <td class="email">{{ $user['email'] }}</td>
                            <td class="id">{{ $user['id'] }}</td>
                            <td class="type text-center">{{ $user['account_type'] }}</td>
                            <td class="edit text-center">
                                <a class="view" href="{{ $user['view_link'] }}">
                                    <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                </a>
                                <a class="edit mx-5" href="{{ $user['edit_link'] }}">
                                    <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                </a>
                                <a class="delete" href="{{ $user['delete_link'] }}">
                                    <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <!--
                        <tbody class="list">
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-14.jpeg')}}"" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Hakeem Chan</span>
                                </td>
                                <td class="email">lobortis.augue@natoquepenatibuset.ca</td>
                                <td class="id">#9265</td>
                                <td class="type text-center" data-signed="1648252800">Trial</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-23.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Orli J. Goodman</span>
                                </td>
                                <td class="email">pede@at.com</td>
                                <td class="id">#8545</td>
                                <td class="type text-center" data-signed="1627858800">Paid</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-16.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Halee P. Lane</span>
                                </td>
                                <td class="email">diam@nislNullaeu.net</td>
                                <td class="id">#4445</td>
                                <td class="type text-center" data-signed="1615680000">Trial</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-primary-soft">KS</span>
                                    </div>
                                    <span class="name fw-bold">Kimberly Salinas</span>
                                </td>
                                <td class="email">in.lobortis.tellus@faucibusorci.co.uk</td>
                                <td class="id">#2391</td>
                                <td class="type text-center" data-signed="1615939200">Paid</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-17.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Galena Oliver</span>
                                </td>
                                <td class="email">eleifend.nec@ligulaconsectetuerrhoncus.ca</td>
                                <td class="id">#8987</td>
                                <td class="type text-center" data-signed="1607990400">Trial</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-19.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Kelly Doyle</span>
                                </td>
                                <td class="email">urna.et@volutpatNulladignissim.org</td>
                                <td class="id">#5898</td>
                                <td class="type text-center" data-signed="1650495600">Paid</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-20.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Keane Wyatt</span>
                                </td>
                                <td class="email">quam@Ut.org</td>
                                <td class="id">#3431</td>
                                <td class="type text-center" data-signed="1655506800">Trial</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-success-soft">NA</span>
                                    </div>
                                    <span class="name fw-bold">Nasim Aguirre</span>
                                </td>
                                <td class="email">nisl@mollis.net</td>
                                <td class="id">#6701</td>
                                <td class="type text-center" data-signed="1602975600">Paid</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-25.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Leo Johnston</span>
                                </td>
                                <td class="email">Cum.sociis@Etiambibendumfermentum.co.uk</td>
                                <td class="id">#9258</td>
                                <td class="type text-center" data-signed="1624748400">Trial</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-26.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Macon Dean</span>
                                </td>
                                <td class="email">aliquam@nec.edu</td>
                                <td class="id">#4885</td>
                                <td class="type text-center" data-signed="1614470400">Paid</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-11.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Yoko Grimes</span>
                                </td>
                                <td class="email">ut.eros@Donecporttitor.co.uk</td>
                                <td class="id">#1960</td>
                                <td class="type text-center" data-signed="1635289200">Trial</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-27.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Jordan Douglas</span>
                                </td>
                                <td class="email">fermentum.convallis.ligula@euenimEtiam.edu</td>
                                <td class="id">#8385</td>
                                <td class="type text-center" data-signed="1646265600">Paid</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td class="ps-3">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-30.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Carly Beard</span>
                                </td>
                                <td class="email">dolor.dolor@lacusMaurisnon.org</td>
                                <td class="id">#9380</td>
                                <td class="type text-center" data-signed="1654902000">Trial</td>
                                <td class="edit text-center">
                                    <a class="view" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                                    </a>
                                    <a class="edit mx-5" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                                    </a>
                                    <a class="delete" href="javascript: void(0);">
                                        <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    -->
                </table>
            </div> <!-- / .table-responsive -->

            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-5 text-gray-500 small">
                        Showing: <span class="list-pagination-page-first"></span> - <span class="list-pagination-page-last"></span> of <span class="list-pagination-pages"></span>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-wrap d-flex align-items-center">
                        <!-- Button -->
                        <button type="button" class="d-none list-pagination-prev border-0 bg-white p-0 d-lg-inline-flex align-items-center justify-content-center" disabled>Prev
                        </button>
                        <ul class="pagination list-pagination mb-0 mx-lg-5">

                        </ul>
                        <!-- Button -->
                        <button type="button" class="d-none list-pagination-next border-0 bg-white p-0 d-lg-inline-flex align-items-center justify-content-center" disabled>Next
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> <!-- / .row -->

@endsection