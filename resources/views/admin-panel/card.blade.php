@extends('admin-panel.layouts.app2')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-7">
            <!-- Card -->
            <div class="card pricing-card border-1 border-primary py-4 px-5 mb-6 mb-xl-3">
                <div class="card-body px-1 py-0">
                    <div class="d-flex">
                        <h3 class="d-inline card-title fw-normal mb-5 me-auto">{{ $plan->name }}</h3>
                        <span class="d-inline card-text fs-20 fw-semibold">
                            ${{ $plan->price }} <span class="fs-16 fw-normal">/ month</span>
                        </span>
                    </div>
                    <p class="mb-5">{{ $plan->description }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <form method="post" action="{{ url('save-card') }}" class="mt-6 space-y-6">
                        @csrf
                        <div class="form-group">
                            <label for="card-number">Card Number</label>
                            <input name="card_number" type="text" class="form-control" id="card-number" placeholder="Enter card number">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="expiry-date">Expiration Date</label>
                                <input type="month" id="expiry_date" name="expiry-date" min="2023-01" max="2040-12" class="form-control" id="expiry-date" placeholder="MM / YY">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cvv">CVV</label>
                                <input name="cvv" type="text" class="form-control" id="cvv" placeholder="Enter CVV">
                            </div>
                        </div>
                        <br>
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            @if($planLog != null)
                            @if($planLog->survey_responses != intval($planLog->plan->max_request))
                            <a href="{{ url('enable-plan/cancel/' . $planLog->id) }}" class="btn btn-danger">Cancel</a>
                            @endif
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection