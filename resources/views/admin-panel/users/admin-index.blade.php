@extends('admin-panel.layouts.app')

@section('content')

<!-- Title -->
<h1 class="h1 mb-6">
    {{ $title }}
</h1>

<div class="row">
    <div class="col">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "country", "id", {"name": "date", "attr": "data-signed"}, "type"], "page": 10}' id="users">
            <div class="card-header flex-wrap border-0 card-header-space-between py-lg-6">

                <!-- Search -->
                <div class="mb-2 me-auto pe-6">
                    <div class="input-group input-group-merge w-175px">

                        <!-- Button -->
                        <span class="input-group-text p-0 border-0 bg-light-green">
                            <button class="btn btn-link text-dark ps-4 pe-0" type="button">
                                <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.750 9.812 A9.063 9.063 0 1 0 18.876 9.812 A9.063 9.063 0 1 0 0.750 9.812 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(-3.056 4.62) rotate(-23.025)" />
                                    <path d="M16.221 16.22L23.25 23.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                </svg>
                            </button>
                        </span>

                        <!-- Input -->
                        <input type="text" class="form-control bg-light-green border-0" placeholder="Search">

                    </div>
                </div>

                <div class="dropdown me-6 mb-2">
                    <a class="btn btn-light-green dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort by (User name)
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-primary d-flex align-items-center mb-2">
                    <svg class="me-3" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 0.5C6.79565 0.5 7.55871 0.81607 8.12132 1.37868C8.68393 1.94129 9 2.70435 9 3.5C9 4.29565 8.68393 5.05871 8.12132 5.62132C7.55871 6.18393 6.79565 6.5 6 6.5C5.20435 6.5 4.44129 6.18393 3.87868 5.62132C3.31607 5.05871 3 4.29565 3 3.5C3 2.70435 3.31607 1.94129 3.87868 1.37868C4.44129 0.81607 5.20435 0.5 6 0.5ZM6 8C9.315 8 12 9.3425 12 11V12.5H0V11C0 9.3425 2.685 8 6 8Z" fill="currentColor" />
                    </svg>
                    Add Customer
                </button>
                <!-- Dropdown -->
                <div class="dropdown mb-2 ms-4 d-none d-md-block">
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
                            <th class="ps-3">
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
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="country">
                                    Country
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
                                    {!! $user['avatar'] !!} </div>
                                <span class="name fw-bold">{{ $user['name'] }}</span>
                            </td>
                            <td class="email">{{ $user['email'] }}</td>
                            <td class="country">{{ $user['country'] }}</td>
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
                        <tr>
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
                                        <img src="{{asset('assets_project/assets/images/profiles/profile-14.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Hakeem Chan</span>
                                </td>
                                <td class="email">lobortis.augue@natoquepenatibuset.ca</td>
                                <td class="country">USA</td>
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
                                <td class="country">Brazil</td>
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
                                <td class="country">Mexico</td>
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
                                <td class="country">Ukraine</td>
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
                                <td class="country">Poland</td>
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
                                <td class="country">USA</td>
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
                                <td class="country">USA</td>
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
                                <td class="country">Poland</td>
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
                                <td class="country">Poland</td>
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
                                <td class="country">USA</td>
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
                                <td class="country">USA</td>
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
                                <td class="country">USA</td>
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
                                <td class="country">USA</td>
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