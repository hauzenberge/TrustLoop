@extends('admin-panel.layouts.app')

@section('content')

<!-- Title -->
<h1 class="h1 mb-6">
    {{ $title }}
</h1>

<div class="row mb-5">
    <div class="col-12 col-xl-6">
        @include('admin-panel.settings.components.user_componenrs.survey_settigns')
    </div>
    <div class="col-12 col-xl-6 mt-6 pt-xl-1">
        <div class="text-center">
            <h1>
                Questions
                <svg id="info_icon" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Feedback requests for your users if they rate 4 or less stars">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8C6.20914 8 8 6.20914 8 4C7.99761 1.79185 6.20815 0.00238828 4 0ZM4.08325 1.66664C4.35939 1.66664 4.58325 1.8905 4.58325 2.16664C4.58325 2.44279 4.35939 2.66664 4.08325 2.66664C3.80711 2.66664 3.58325 2.44279 3.58325 2.16664C3.58325 1.8905 3.80711 1.66664 4.08325 1.66664ZM4.83342 6.16664H3.50008C3.31599 6.16664 3.16675 6.01741 3.16675 5.83331C3.16675 5.64922 3.31599 5.49998 3.50008 5.49998H3.75008C3.79611 5.49998 3.83341 5.46267 3.83341 5.41664V3.91664C3.83341 3.87062 3.79611 3.83331 3.75008 3.83331H3.50008C3.31599 3.83331 3.16675 3.68407 3.16675 3.49998C3.16675 3.31588 3.31599 3.16664 3.50008 3.16664H3.83341C4.2016 3.16664 4.50008 3.46512 4.50008 3.83331V5.41664C4.50008 5.46267 4.53739 5.49998 4.58342 5.49998H4.83342C5.01751 5.49998 5.16675 5.64922 5.16675 5.83331C5.16675 6.01741 5.01751 6.16664 4.83342 6.16664Z" fill="#0E2238" />
                </svg>
            </h1>
        </div>

        @include('admin-panel.settings.components.user_componenrs.questions_settigns')        

        <div class="mt-4 d-flex justify-content-center">
            <a href="{{ url('demo-page/' . Auth::user()->id ) }}" class="btn btn-outline-primary" target="_blank">Preview on test page</a>
        </div>
    </div>
</div> <!-- / .row -->
@endsection