@extends('admin-panel.layouts.app')

@section('content')

<!-- Title -->
<h1 class="h1 mb-6">
    {{ $title }}
</h1>

<div class="row mb-5">
                <div class="col-12 col-xl-6">
                    <form>
                        <div class="mb-4">
                            <!-- Label -->
                            <label class="form-label">
                                Popup text
                            </label>

                            <!-- Textarea -->
                            <textarea class="form-control bg-white" rows="5"
                                placeholder="What do you think so far?"></textarea>
                        </div>
                        <div class="mb-4">
                            <!-- Label -->
                            <label class="form-label">
                                Internal feedback request
                            </label>

                            <!-- Textarea -->
                            <textarea class="form-control bg-white" rows="5"
                                placeholder="What feedback must be implemented before you increase your rating to 5-stars?"></textarea>
                        </div>
                        <div class="mb-4">
                            <!-- Label -->
                            <label class="form-label">
                                Review request
                            </label>

                            <!-- Textarea -->
                            <textarea class="form-control bg-white" rows="5"
                                placeholder="Thank you! If you have a minute, please leave us a review."></textarea>
                        </div>
                        <div class="mb-4">
                            <!-- Label -->
                            <label class="form-label">
                                Review Button Text
                            </label>

                            <!-- Textarea -->
                            <textarea class="form-control bg-white" rows="5" placeholder="Submit Review"></textarea>
                        </div>
                        <div class="mb-4">
                            <!-- Label -->
                            <label class="form-label">
                                Link URL
                            </label>

                            <!-- Input -->
                            <input type="text" class="form-control bg-white" id="url"
                                placeholder="https://www.trustpilot.com/review/trustloop.co">
                            <!-- Button -->
                            <button type="button" class="btn w-100 btn-primary mt-6 mb-2">Save changes</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-xl-6 mt-6 pt-xl-1">
                    <div class="d-flex question-body border rounded border-gray-300 bg-white mb-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="me-4"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3 5C3 4.44772 3.44772 4 4 4H20C20.5523 4 21 4.44772 21 5C21 5.55228 20.5523 6 20 6H4C3.44772 6 3 5.55228 3 5ZM3 12C3 11.4477 3.44772 11 4 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H4C3.44772 13 3 12.5523 3 12ZM4 18C3.44772 18 3 18.4477 3 19C3 19.5523 3.44772 20 4 20H20C20.5523 20 21 19.5523 21 19C21 18.4477 20.5523 18 20 18H4Z"
                                fill="#A5ABB3" />
                        </svg>
                        <h3 class="fw-semibold mb-0 ps-1 me-auto">How can we improve our service?</h3>
                        <a class="edit mx-5" href="javascript: void(0);">
                            <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                        </a>
                        <a class="delete" href="javascript: void(0);">
                            <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                        </a>
                    </div>

                    <div class="d-flex question-body border rounded border-gray-300 bg-white mb-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="me-4"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3 5C3 4.44772 3.44772 4 4 4H20C20.5523 4 21 4.44772 21 5C21 5.55228 20.5523 6 20 6H4C3.44772 6 3 5.55228 3 5ZM3 12C3 11.4477 3.44772 11 4 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H4C3.44772 13 3 12.5523 3 12ZM4 18C3.44772 18 3 18.4477 3 19C3 19.5523 3.44772 20 4 20H20C20.5523 20 21 19.5523 21 19C21 18.4477 20.5523 18 20 18H4Z"
                                fill="#A5ABB3" />
                        </svg>
                        <h3 class="fw-semibold mb-0 ps-1 me-auto">Was delivery made on time?</h3>
                        <a class="edit mx-5" href="javascript: void(0);">
                            <img src="{{asset('assets_project//assets/images/pencil.svg')}}" alt="...">
                        </a>
                        <a class="delete" href="javascript: void(0);">
                            <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                        </a>
                    </div>

                    <div class="d-flex question-body border rounded border-gray-300 bg-white">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="me-4"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3 5C3 4.44772 3.44772 4 4 4H20C20.5523 4 21 4.44772 21 5C21 5.55228 20.5523 6 20 6H4C3.44772 6 3 5.55228 3 5ZM3 12C3 11.4477 3.44772 11 4 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H4C3.44772 13 3 12.5523 3 12ZM4 18C3.44772 18 3 18.4477 3 19C3 19.5523 3.44772 20 4 20H20C20.5523 20 21 19.5523 21 19C21 18.4477 20.5523 18 20 18H4Z"
                                fill="#A5ABB3" />
                        </svg>
                        <h3 class="fw-semibold mb-0 ps-1 me-auto">Can you recommend us to your friends?</h3>
                        <a class="edit mx-5" href="javascript: void(0);">
                            <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                        </a>
                        <a class="delete" href="javascript: void(0);">
                            <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                        </a>
                    </div>

                    <div class="mt-4">
                        <!-- Label -->
                        <label class="form-label">
                            Your question
                        </label>

                        <!-- Input -->
                        <input type="text" class="form-control bg-white" placeholder="What do you think so far?">
                        <!-- Button -->
                        <button type="button" class="btn w-100 btn-primary mt-6 mb-2">Add a question</button>
                    </div>
                </div>


            </div> <!-- / .row -->

@endsection