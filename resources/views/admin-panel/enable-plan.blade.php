@extends('admin-panel.layouts.app2')

@section('content')

<div class="row mb-4">
    @foreach($plans as $plan)
    <div class="col-xl-3">
        <!-- Card -->
        <div class="card pricing-card border-1 border-primary py-4 px-5 mb-6 mb-xl-3">
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
                    <a class="btn btn-sm btn-primary w-125px" href="{{ url('enable-plan/choose/' . $user_id . '/'. $plan->id) }}">Choose</a>
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
</div><!-- / .row -->

@endsection