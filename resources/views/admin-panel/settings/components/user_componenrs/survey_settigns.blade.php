<form action="{{ url('settings/update-survay/' .$survey->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <!-- Label -->
        <label class="form-label">
            *Rating Title
            <svg id="info_icon" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="This will be the text after a user leaves a rating or a review.">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8C6.20914 8 8 6.20914 8 4C7.99761 1.79185 6.20815 0.00238828 4 0ZM4.08325 1.66664C4.35939 1.66664 4.58325 1.8905 4.58325 2.16664C4.58325 2.44279 4.35939 2.66664 4.08325 2.66664C3.80711 2.66664 3.58325 2.44279 3.58325 2.16664C3.58325 1.8905 3.80711 1.66664 4.08325 1.66664ZM4.83342 6.16664H3.50008C3.31599 6.16664 3.16675 6.01741 3.16675 5.83331C3.16675 5.64922 3.31599 5.49998 3.50008 5.49998H3.75008C3.79611 5.49998 3.83341 5.46267 3.83341 5.41664V3.91664C3.83341 3.87062 3.79611 3.83331 3.75008 3.83331H3.50008C3.31599 3.83331 3.16675 3.68407 3.16675 3.49998C3.16675 3.31588 3.31599 3.16664 3.50008 3.16664H3.83341C4.2016 3.16664 4.50008 3.46512 4.50008 3.83331V5.41664C4.50008 5.46267 4.53739 5.49998 4.58342 5.49998H4.83342C5.01751 5.49998 5.16675 5.64922 5.16675 5.83331C5.16675 6.01741 5.01751 6.16664 4.83342 6.16664Z" fill="#0E2238" />
            </svg>
        </label>

        <!-- Textarea -->
        <textarea class="form-control bg-white" rows="5" name="popup_text" value="{{ $survey->popup_text }}" placeholder="What do you think so far?">{{ $survey->popup_text }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('popup_text')" style="color: red;" />
    </div>
    <div class="mb-4">
        <!-- Label -->
        <label class="form-label">
            *Review request
            <svg id="info_icon" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="This will be the text after a user leaves a rating or a review.">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8C6.20914 8 8 6.20914 8 4C7.99761 1.79185 6.20815 0.00238828 4 0ZM4.08325 1.66664C4.35939 1.66664 4.58325 1.8905 4.58325 2.16664C4.58325 2.44279 4.35939 2.66664 4.08325 2.66664C3.80711 2.66664 3.58325 2.44279 3.58325 2.16664C3.58325 1.8905 3.80711 1.66664 4.08325 1.66664ZM4.83342 6.16664H3.50008C3.31599 6.16664 3.16675 6.01741 3.16675 5.83331C3.16675 5.64922 3.31599 5.49998 3.50008 5.49998H3.75008C3.79611 5.49998 3.83341 5.46267 3.83341 5.41664V3.91664C3.83341 3.87062 3.79611 3.83331 3.75008 3.83331H3.50008C3.31599 3.83331 3.16675 3.68407 3.16675 3.49998C3.16675 3.31588 3.31599 3.16664 3.50008 3.16664H3.83341C4.2016 3.16664 4.50008 3.46512 4.50008 3.83331V5.41664C4.50008 5.46267 4.53739 5.49998 4.58342 5.49998H4.83342C5.01751 5.49998 5.16675 5.64922 5.16675 5.83331C5.16675 6.01741 5.01751 6.16664 4.83342 6.16664Z" fill="#0E2238" />
            </svg>
        </label>

        <!-- Textarea -->
        <textarea class="form-control bg-white" name="review_text" rows="5" placeholder="Thank you! If you have a minute, please leave us a review.">{{ $survey->review_text }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('review_text')" style="color: red;" />
    </div>
    <div class="mb-4">
        <!-- Label -->
        <label class="form-label">
            *Thanks for the feedback text
            <svg id="info_icon" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="This will be the text after a user leaves a rating or a review.">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8C6.20914 8 8 6.20914 8 4C7.99761 1.79185 6.20815 0.00238828 4 0ZM4.08325 1.66664C4.35939 1.66664 4.58325 1.8905 4.58325 2.16664C4.58325 2.44279 4.35939 2.66664 4.08325 2.66664C3.80711 2.66664 3.58325 2.44279 3.58325 2.16664C3.58325 1.8905 3.80711 1.66664 4.08325 1.66664ZM4.83342 6.16664H3.50008C3.31599 6.16664 3.16675 6.01741 3.16675 5.83331C3.16675 5.64922 3.31599 5.49998 3.50008 5.49998H3.75008C3.79611 5.49998 3.83341 5.46267 3.83341 5.41664V3.91664C3.83341 3.87062 3.79611 3.83331 3.75008 3.83331H3.50008C3.31599 3.83331 3.16675 3.68407 3.16675 3.49998C3.16675 3.31588 3.31599 3.16664 3.50008 3.16664H3.83341C4.2016 3.16664 4.50008 3.46512 4.50008 3.83331V5.41664C4.50008 5.46267 4.53739 5.49998 4.58342 5.49998H4.83342C5.01751 5.49998 5.16675 5.64922 5.16675 5.83331C5.16675 6.01741 5.01751 6.16664 4.83342 6.16664Z" fill="#0E2238" />
            </svg>
        </label>

        <!-- Textarea -->
        <textarea class="form-control bg-white" rows="5" name="feedback_request" placeholder="What feedback must be implemented before you increase your rating to 5-stars?">{{ $survey->feedback_request }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('feedback_request')" style="color: red;" />
    </div>
    <div class="mb-4">
        <!-- Label -->
        <label class="form-label">
            *Review Button Text
            <svg id="info_icon" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="The button text that leads to the external review">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8C6.20914 8 8 6.20914 8 4C7.99761 1.79185 6.20815 0.00238828 4 0ZM4.08325 1.66664C4.35939 1.66664 4.58325 1.8905 4.58325 2.16664C4.58325 2.44279 4.35939 2.66664 4.08325 2.66664C3.80711 2.66664 3.58325 2.44279 3.58325 2.16664C3.58325 1.8905 3.80711 1.66664 4.08325 1.66664ZM4.83342 6.16664H3.50008C3.31599 6.16664 3.16675 6.01741 3.16675 5.83331C3.16675 5.64922 3.31599 5.49998 3.50008 5.49998H3.75008C3.79611 5.49998 3.83341 5.46267 3.83341 5.41664V3.91664C3.83341 3.87062 3.79611 3.83331 3.75008 3.83331H3.50008C3.31599 3.83331 3.16675 3.68407 3.16675 3.49998C3.16675 3.31588 3.31599 3.16664 3.50008 3.16664H3.83341C4.2016 3.16664 4.50008 3.46512 4.50008 3.83331V5.41664C4.50008 5.46267 4.53739 5.49998 4.58342 5.49998H4.83342C5.01751 5.49998 5.16675 5.64922 5.16675 5.83331C5.16675 6.01741 5.01751 6.16664 4.83342 6.16664Z" fill="#0E2238" />
            </svg>
        </label>

        <!-- Textarea -->
        <textarea name="review_button_text" class="form-control bg-white" rows="5" placeholder="Submit Review">{{ $survey->review_button_text }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('review_button_text')" style="color: red;" />
    </div>

    <div class="mb-4">
        <!-- Label -->
        <label class="form-label">
            *Sidebar feedback widget
            <svg id="info_icon" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="When enabled, there will be a small feedback widget on the sidebar of your page.">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8C6.20914 8 8 6.20914 8 4C7.99761 1.79185 6.20815 0.00238828 4 0ZM4.08325 1.66664C4.35939 1.66664 4.58325 1.8905 4.58325 2.16664C4.58325 2.44279 4.35939 2.66664 4.08325 2.66664C3.80711 2.66664 3.58325 2.44279 3.58325 2.16664C3.58325 1.8905 3.80711 1.66664 4.08325 1.66664ZM4.83342 6.16664H3.50008C3.31599 6.16664 3.16675 6.01741 3.16675 5.83331C3.16675 5.64922 3.31599 5.49998 3.50008 5.49998H3.75008C3.79611 5.49998 3.83341 5.46267 3.83341 5.41664V3.91664C3.83341 3.87062 3.79611 3.83331 3.75008 3.83331H3.50008C3.31599 3.83331 3.16675 3.68407 3.16675 3.49998C3.16675 3.31588 3.31599 3.16664 3.50008 3.16664H3.83341C4.2016 3.16664 4.50008 3.46512 4.50008 3.83331V5.41664C4.50008 5.46267 4.53739 5.49998 4.58342 5.49998H4.83342C5.01751 5.49998 5.16675 5.64922 5.16675 5.83331C5.16675 6.01741 5.01751 6.16664 4.83342 6.16664Z" fill="#0E2238" />
            </svg>
        </label>
        <br>

        <!-- Rounded switch -->
        <label class="switch">
            <input name="static_request_widget" type="checkbox" @if($survey->static_request_widget == 1)
            checked
            @endif
            >
            <span class="slider round"></span>
        </label>
        @if($survey->static_request_widget == 1)
        @include('admin-panel.settings.components.user_componenrs.reviews_wiget')
        @endif
    </div>

    <div class="mb-4">
        <!-- Label -->
        <label class="form-label">
            *Exit intent feedback popup
            <svg id="info_icon" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="When enabled, a popup will occur when the user is exiting this page.">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8C6.20914 8 8 6.20914 8 4C7.99761 1.79185 6.20815 0.00238828 4 0ZM4.08325 1.66664C4.35939 1.66664 4.58325 1.8905 4.58325 2.16664C4.58325 2.44279 4.35939 2.66664 4.08325 2.66664C3.80711 2.66664 3.58325 2.44279 3.58325 2.16664C3.58325 1.8905 3.80711 1.66664 4.08325 1.66664ZM4.83342 6.16664H3.50008C3.31599 6.16664 3.16675 6.01741 3.16675 5.83331C3.16675 5.64922 3.31599 5.49998 3.50008 5.49998H3.75008C3.79611 5.49998 3.83341 5.46267 3.83341 5.41664V3.91664C3.83341 3.87062 3.79611 3.83331 3.75008 3.83331H3.50008C3.31599 3.83331 3.16675 3.68407 3.16675 3.49998C3.16675 3.31588 3.31599 3.16664 3.50008 3.16664H3.83341C4.2016 3.16664 4.50008 3.46512 4.50008 3.83331V5.41664C4.50008 5.46267 4.53739 5.49998 4.58342 5.49998H4.83342C5.01751 5.49998 5.16675 5.64922 5.16675 5.83331C5.16675 6.01741 5.01751 6.16664 4.83342 6.16664Z" fill="#0E2238" />
            </svg>
        </label>
        <br>

        <!-- Rounded switch -->
        <label class="switch">
            <input name="exit_intent_feedback_popup" type="checkbox" @if($survey->exit_intent_feedback_popup == 1)
            checked
            @endif
            >
            <span class="slider round"></span>
        </label>
    </div>

    <div class="mb-4">
        <!-- Label -->
        <label class="form-label">
            Hide Modal
        </label>
        <br>

        <!-- Rounded switch -->
        <label class="switch">
            <input name="hide_modal" type="checkbox" @if($survey->hide_modal == 1)
            checked
            @endif
            >
            <span class="slider round"></span>
        </label>
    </div>

    <div class="mb-4">
        <!-- Label -->
        <label class="form-label">
            Hide For Days
        </label>

        <!-- Input -->
        <input type="number" name="link_url" class="form-control bg-white" id="url" placeholder="Please add Hide For Days" value="{{ $survey->hide_for_months }}">
        <x-input-error class="mt-2" :messages="$errors->get('hide_for_months')" style="color: red;" />
    </div>

    <div class="mb-4">
        <!-- Label -->
        <label class="form-label">
            *Link URL
            <svg id="info_icon" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title=" The external link that you capture your reviews">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8C6.20914 8 8 6.20914 8 4C7.99761 1.79185 6.20815 0.00238828 4 0ZM4.08325 1.66664C4.35939 1.66664 4.58325 1.8905 4.58325 2.16664C4.58325 2.44279 4.35939 2.66664 4.08325 2.66664C3.80711 2.66664 3.58325 2.44279 3.58325 2.16664C3.58325 1.8905 3.80711 1.66664 4.08325 1.66664ZM4.83342 6.16664H3.50008C3.31599 6.16664 3.16675 6.01741 3.16675 5.83331C3.16675 5.64922 3.31599 5.49998 3.50008 5.49998H3.75008C3.79611 5.49998 3.83341 5.46267 3.83341 5.41664V3.91664C3.83341 3.87062 3.79611 3.83331 3.75008 3.83331H3.50008C3.31599 3.83331 3.16675 3.68407 3.16675 3.49998C3.16675 3.31588 3.31599 3.16664 3.50008 3.16664H3.83341C4.2016 3.16664 4.50008 3.46512 4.50008 3.83331V5.41664C4.50008 5.46267 4.53739 5.49998 4.58342 5.49998H4.83342C5.01751 5.49998 5.16675 5.64922 5.16675 5.83331C5.16675 6.01741 5.01751 6.16664 4.83342 6.16664Z" fill="#0E2238" />
            </svg>
        </label>

        <!-- Input -->
        <input type="text" name="link_url" class="form-control bg-white" id="url" placeholder="Please add your URL" value="{{ $survey->link_url }}">
        <x-input-error class="mt-2" :messages="$errors->get('link_url')" style="color: red;" />
    </div>

    <div class="mb-4">
        <label for="font_id">{{ __('Select Font') }}</label>
        <select class="form-control" name="font_id" id="font_id">
            @foreach($fonts as $font)
            <option value="{{ $font->id }}" {{ $survey->font_id == $font->id ? 'selected' : '' }}>{{ $font->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <!-- Label -->
        <label class="form-label">
            Custom Styles
        </label>

        <!-- Textarea -->
        <textarea name="style" class="form-control bg-white" rows="5" placeholder="Your styles for modal">{{ $survey->style }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('style')" style="color: red;" />
    </div>

    <div class="mb-4">
        <!-- Button -->
        <button type="submit" class="btn w-100 btn-primary mt-6 mb-2">Save changes</button>
    </div>
</form>