@extends('admin-panel.layouts.app')

@section('content')

<!-- Title -->
<h1 class="h1 mb-6">
    Reviews
</h1>

<div class="row">
    <div class="col">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "review", "date", "comment"], "page": 10}' id="users_review">
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

                <button type="button" class="btn btn-primary d-flex align-items-center mb-2">
                    <svg class="me-3" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.5325 6.28248L8.25 4.55748V11.75C8.25 11.9489 8.32902 12.1397 8.46967 12.2803C8.61032 12.421 8.80109 12.5 9 12.5C9.19891 12.5 9.38968 12.421 9.53033 12.2803C9.67098 12.1397 9.75 11.9489 9.75 11.75V4.55748L11.4675 6.28248C11.5372 6.35278 11.6202 6.40858 11.7116 6.44665C11.803 6.48473 11.901 6.50433 12 6.50433C12.099 6.50433 12.197 6.48473 12.2884 6.44665C12.3798 6.40858 12.4628 6.35278 12.5325 6.28248C12.6028 6.21276 12.6586 6.12981 12.6967 6.03842C12.7347 5.94702 12.7543 5.84899 12.7543 5.74998C12.7543 5.65097 12.7347 5.55295 12.6967 5.46155C12.6586 5.37016 12.6028 5.28721 12.5325 5.21748L9.5325 2.21748C9.46117 2.1492 9.37706 2.09568 9.285 2.05998C9.1024 1.98497 8.8976 1.98497 8.715 2.05998C8.62294 2.09568 8.53883 2.1492 8.4675 2.21748L5.4675 5.21748C5.39757 5.28741 5.3421 5.37043 5.30426 5.4618C5.26641 5.55316 5.24693 5.65109 5.24693 5.74998C5.24693 5.84888 5.26641 5.9468 5.30426 6.03817C5.3421 6.12954 5.39757 6.21255 5.4675 6.28248C5.53743 6.35241 5.62045 6.40788 5.71181 6.44573C5.80318 6.48357 5.90111 6.50305 6 6.50305C6.09889 6.50305 6.19682 6.48357 6.28819 6.44573C6.37955 6.40788 6.46257 6.35241 6.5325 6.28248ZM15.75 11C15.5511 11 15.3603 11.079 15.2197 11.2197C15.079 11.3603 15 11.5511 15 11.75V14.75C15 14.9489 14.921 15.1397 14.7803 15.2803C14.6397 15.421 14.4489 15.5 14.25 15.5H3.75C3.55109 15.5 3.36032 15.421 3.21967 15.2803C3.07902 15.1397 3 14.9489 3 14.75V11.75C3 11.5511 2.92098 11.3603 2.78033 11.2197C2.63968 11.079 2.44891 11 2.25 11C2.05109 11 1.86032 11.079 1.71967 11.2197C1.57902 11.3603 1.5 11.5511 1.5 11.75V14.75C1.5 15.3467 1.73705 15.919 2.15901 16.341C2.58097 16.7629 3.15326 17 3.75 17H14.25C14.8467 17 15.419 16.7629 15.841 16.341C16.2629 15.919 16.5 15.3467 16.5 14.75V11.75C16.5 11.5511 16.421 11.3603 16.2803 11.2197C16.1397 11.079 15.9489 11 15.75 11Z" fill="currentColor" />
                    </svg>

                    Export to CSV</button>
                <!-- Dropdown -->
                <div class="dropdown ms-4 d-none d-sm-block">
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
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="review">
                                    Review
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                    Date
                                </a>
                            </th>
                            <th class="text-center">
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="comment">
                                    Comment
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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
                            <td class="review"><span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span></td>
                            <td class="date">28.02.23</td>
                            <td class="comment text-center">Experimental review checking...</td>
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