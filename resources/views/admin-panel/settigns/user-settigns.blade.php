@extends('admin-panel.layouts.app')

@section('content')

<!-- Title -->
<h1 class="h1 mb-6">
    {{ $title }}
</h1>

<div class="row mb-5">
    <div class="col-12 col-xl-6">
        <form action="{{ url('settigns/update-survay/' .$survey->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <!-- Label -->
                <label class="form-label">
                    Popup text
                </label>

                <!-- Textarea -->
                <textarea class="form-control bg-white" rows="5" name="popup_text"  value="{{ $survey->popup_text }}" placeholder="What do you think so far?">{{ $survey->popup_text }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('popup_text')" style="color: red;" />
            </div>
            <div class="mb-4">
                <!-- Label -->
                <label class="form-label">
                    Internal feedback request
                </label>

                <!-- Textarea -->
                <textarea class="form-control bg-white" rows="5" name="feedback_request" placeholder="What feedback must be implemented before you increase your rating to 5-stars?">{{ $survey->feedback_request }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('feedback_request')" style="color: red;" />
            </div>
            <div class="mb-4">
                <!-- Label -->
                <label class="form-label">
                    Review request
                </label>

                <!-- Textarea -->
                <textarea class="form-control bg-white" name="review_text" rows="5" placeholder="Thank you! If you have a minute, please leave us a review.">{{ $survey->review_text }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('review_text')" style="color: red;" />
            </div>
            <div class="mb-4">
                <!-- Label -->
                <label class="form-label">
                    Review Button Text
                </label>

                <!-- Textarea -->
                <textarea name="review_button_text" class="form-control bg-white" rows="5" placeholder="Submit Review">{{ $survey->review_button_text }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('review_button_text')" style="color: red;" />
            </div>
            <div class="mb-4">
                <!-- Label -->
                <label class="form-label">
                    Link URL
                </label>

                <!-- Input -->
                <input type="text" name="link_url" class="form-control bg-white" id="url" placeholder="https://www.trustpilot.com/review/trustloop.co" value="{{ $survey->link_url }}" required>
                <x-input-error class="mt-2" :messages="$errors->get('link_url')" style="color: red;" />

                <!-- Button -->
                <button type="submit" class="btn w-100 btn-primary mt-6 mb-2">Save changes</button>
            </div>
        </form>
    </div>
    <div class="col-12 col-xl-6 mt-6 pt-xl-1">

        @foreach($questions as $question)
        <div class="d-flex question-body border rounded border-gray-300 bg-white">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="me-4" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3 5C3 4.44772 3.44772 4 4 4H20C20.5523 4 21 4.44772 21 5C21 5.55228 20.5523 6 20 6H4C3.44772 6 3 5.55228 3 5ZM3 12C3 11.4477 3.44772 11 4 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H4C3.44772 13 3 12.5523 3 12ZM4 18C3.44772 18 3 18.4477 3 19C3 19.5523 3.44772 20 4 20H20C20.5523 20 21 19.5523 21 19C21 18.4477 20.5523 18 20 18H4Z" fill="#A5ABB3" />
            </svg>
            <h3 id="q-text-{{ $question->id }}" class="fw-semibold mb-0 ps-1 me-auto">{{ $question->text }}</h3>

            <div class="fw-semibold mb-0 ps-1 me-auto" id="hidden-element-{{ $question->id }}" style="display: none;">
                <form class="form-inline" action="{{ url('settigns/question/' . $question->id . '/update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="text" class="form-control mr-2" id="url" placeholder="https://www.trustpilot.com/review/trustloop.co" value="{{ $question->text }}" required>
                        <x-input-error class="mt-2" :messages="$errors->get('text')" style="color: red;" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>

            <a class="edit mx-5" id="show-link-{{ $question->id }}" href="#">
                <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
            </a>

            <script>
                document.getElementById("show-link-{{ $question->id }}").addEventListener("click", function(event) {
                    event.preventDefault();
                    var elem = document.getElementById("hidden-element-{{ $question->id }}");
                    if (elem.style.display === "none") {
                        elem.style.display = "block";
                    } else {
                        elem.style.display = "none";
                    }

                    var elem2 = document.getElementById("q-text-{{ $question->id }}");
                    if (elem2.style.display === "none") {
                        elem2.style.display = "block";
                    } else {
                        elem2.style.display = "none";
                    }
                });
            </script>
            <a class="delete" href="{{ url('settigns/question/' . $question->id .'/delete/') }}">
                <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
            </a>
        </div>
        @endforeach

        <div class="mt-4">
            <form method="post" action="{{ route('question.create') }}" class="mt-6 space-y-6">
            @csrf
                <!-- Label -->
                <label class="form-label">
                    Your question
                </label>

                <!-- Input -->
                <input name="text" type="text" class="form-control bg-white" placeholder="What do you think so far?" required>
                <!-- Button -->
                <button type="submit" class="btn w-100 btn-primary mt-6 mb-2">Add a question</button>

            </form>
        </div>

    </div>


</div> <!-- / .row -->

@endsection