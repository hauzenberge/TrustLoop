
@if(Auth::user()->userData->plan->alias === "trial")
<div class="d-flex align-items-center justify-content-between">
    <div>
        <strong>
            {{ __(' You Current plan is  ') }}
        </strong>
    </div>
    <div class="mr-3">
        <a class="btn btn-link p-2" href="#" style="color:#50C18B;">
            FREE TRIAL
        </a>
    </div>

    <div>
        <a class="btn btn-primary" href="{{route('payments')}}" style="background-color: #5083C1; border-radius: 7.60234px;">{{ __('Upgrade to premium') }}</a>
    </div>
</div>
@endif