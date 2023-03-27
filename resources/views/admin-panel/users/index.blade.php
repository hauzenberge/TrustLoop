@extends('admin-panel.layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <!-- Card -->
        <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}' id="users">
            <div class="card-header border-0 card-header-space-between">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase">
                    {{ __('Users') }}
                </h2>

                <div class="ms-4">
                    <a class="btn btn-primary" style="background-color: #5083C1;" href="#">
                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0.5C6.79565 0.5 7.55871 0.81607 8.12132 1.37868C8.68393 1.94129 9 2.70435 9 3.5C9 4.29565 8.68393 5.05871 8.12132 5.62132C7.55871 6.18393 6.79565 6.5 6 6.5C5.20435 6.5 4.44129 6.18393 3.87868 5.62132C3.31607 5.05871 3 4.29565 3 3.5C3 2.70435 3.31607 1.94129 3.87868 1.37868C4.44129 0.81607 5.20435 0.5 6 0.5ZM6 8C9.315 8 12 9.3425 12 11V12.5H0V11C0 9.3425 2.685 8 6 8Z" fill="white" />
                        </svg>
                        {{ __('Add Customer') }}
                    </a>
                </div>
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
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                    Signed up
                                </a>
                            </th>
                            <th class="w-150px min-w-150px">
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                    Status
                                </a>
                            </th>
                            <th>Edit</th>
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
                            <td class="date" data-signed="1648252800">03.26.2022</td>
                            <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
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
                            <td class="date" data-signed="1627858800">08.02.2021</td>
                            <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
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
                            <td class="date" data-signed="1615680000">03.14.2021</td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
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
                            <td class="date" data-signed="1615939200">03.17.2021</td>
                            <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
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
                            <td class="date" data-signed="1607990400">12.15.2021</td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
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
                            <td class="date" data-signed="1650495600">04.21.2022</td>
                            <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
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
                            <td class="date" data-signed="1655506800">06.18.2022</td>
                            <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
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
                            <td class="date" data-signed="1602975600">10.18.2021</td>
                            <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
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
                            <td class="date" data-signed="1624748400">06.27.2021</td>
                            <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
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
                            <td class="date" data-signed="1614470400">02.28.2021</td>
                            <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
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
                            <td class="date" data-signed="1635289200">10.27.2021</td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
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
                            <td class="date" data-signed="1646265600">03.03.2022</td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
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
                            <td class="date" data-signed="1654902000">06.11.2022</td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
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
                            <td class="date" data-signed="1622329200">05.30.2021</td>
                            <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
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
                            <td class="date" data-signed="1626562800">07.18.2021</td>
                            <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
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
                            <td class="date" data-signed="1651791600">05.06.2022</td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
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
                            <td class="date" data-signed="1658703600">07.25.2022</td>
                            <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
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
                            <td class="date" data-signed="1651359600">05.01.2022</td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
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
                                    <img src="{{ asset('/assets_project/assets/images/profiles/profile-18.jpeg') }}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Hally Gilmore</span>
                            </td>
                            <td class="email">lacus.Etiam@Pellentesquehabitantmorbi.net</td>
                            <td class="id">#9846</td>
                            <td class="date" data-signed="1633302000">10.04.2021</td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
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
                            <td class="date" data-signed="1593558000">07.01.2021</td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
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