@if(Auth::user()->userData->plan->alias === "trial")
<div class="d-inline-block border border-primary rounded bg-white py-3 px-3 px-lg-6 mb-6">
    <div class="d-flex align-items-baseline">
        <div class="fs-3 me-4">Startup</div>
        <div>Up to 10 rating interactions = <span class="fw-semibold">free</span></div>
    </div>
</div>
@endif

@php
$card_class = "card pricing-card border-1 border-primary py-4 px-5 mb-6 mb-xl-3";
$enabled_card_class = $card_class . " text-bg-primary";
@endphp

<div class="row mb-5">
    @foreach($plans as $plan)
    <div class="col-xl-4">
        <!-- Card -->
        @if(Auth::user()->userData->plan_id == $plan->id)
        <div class="{{$enabled_card_class}}">
            @else
            <div class="{{$card_class}}">
                @endif
                <div class="card-body px-1 py-0">
                    <div class="d-flex">
                        <h3 class="d-inline card-title fw-normal mb-5 me-auto">{{ $plan->name }}</h3>
                        <span class="d-inline card-text fs-20 fw-semibold">
                        @if($plan->alias == 'enterprise')
                        <a class="btn btn-sm btn-primary w-125px" href="https://docs.google.com/forms/d/e/1FAIpQLSc8BkOx_Sx3KqhnvA8JiS4YgkxK4yvIPJBIf3jC3qEpw7FQ3g/formrestricted"> {{ __('Contact us') }}</a>
                        @else
                             ${{ $plan->price }} <span class="fs-16 fw-normal">/ month</span>
                        @endif
                        </span>
                    </div>
                    <p class="mb-5">{{ $plan->description }}</p>
                    @if($plan->alias != 'enterprise')
                    <div class="card-button">
                        <a class="btn btn-sm btn-primary w-125px" href="{{ url('enable-plan/choose/' . Auth::user()->id . '/'. $plan->id) }}">Choose</a>
                    </div>
                    @endif

                    <div class="pricing-features">
                        <div class="heading-box">
                            <p class="heading-20px left">{{__('FEATURES')}}</p>
                        </div>
                        <div class="pricing-points">
                            @foreach($plan->features as $feature)
                            <div class="bulltet-point">
                                <img src="{{ asset('custom assets/icons/Check icon.svg') }}" alt="" class="check-icon ">
                                <p class="paragraph-12px">{!! $feature !!}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> <!-- / .row -->