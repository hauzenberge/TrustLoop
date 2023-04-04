@extends('admin-panel.layouts.app')

@section('content')

<div class="row mb-4">
    <!-- Title -->
    <h2 class="">
        {{ __('Payments') }}
    </h2>

    <ul class="nav nav-tabs mb-6 border-0" id="payments-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link pt-0 pb-4 px-3 active" id="paymentsTabOne" data-bs-toggle="pill" data-bs-target="#paymentsStepOne" type="button" role="tab" aria-controls="paymentsStepOne" aria-selected="true">
                All
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link pt-0 pb-4 px-3" id="paymentsTabTwo" data-bs-toggle="pill" data-bs-target="#paymentsStepTwo" type="button" role="tab" aria-controls="paymentsStepTwo" aria-selected="false">
                Paid
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link pt-0 pb-4 px-3" id="paymentsTabThree" data-bs-toggle="pill" data-bs-target="#paymentsStepThree" type="button" role="tab" aria-controls="paymentsStepThree" aria-selected="false">
                Unpaid
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link pt-0 pb-4 px-3" id="paymentsTabFour" data-bs-toggle="pill" data-bs-target="#paymentsStepFour" type="button" role="tab" aria-controls="paymentsStepFour" aria-selected="false">
                Cancelled
            </button>
        </li>
    </ul>
    <div class="tab-content" id="payments-tabContent">

        <div class="tab-pane fade show active" id="paymentsStepOne" role="tabpanel" aria-labelledby="paymentsTabOne">
            <div class="row">
                <div class="col">
                    @include('admin-panel.payments.components.tab-all')
                </div>
            </div> <!-- / .row -->
        </div>

        <div class="tab-pane fade" id="paymentsStepTwo" role="tabpanel" aria-labelledby="paymentsTabTwo">
            <div class="row">
                <div class="col">
                    @include('admin-panel.payments.components.tab-paid')
                </div>
            </div> <!-- / .row -->
        </div>

        <div class="tab-pane fade" id="paymentsStepThree" role="tabpanel" aria-labelledby="paymentsTabThree">
            <div class="row">
                <div class="col">
                    @include('admin-panel.payments.components.tab-unpaid')
                </div>
            </div> <!-- / .row -->
        </div>

        <div class="tab-pane fade" id="paymentsStepFour" role="tabpanel" aria-labelledby="paymentsTabFour">
            <div class="row">
                <div class="col">
                    @include('admin-panel.payments.components.tab-canceled')
                </div>
            </div> <!-- / .row -->
        </div>

    </div>

</div> <!-- / .row -->

@endsection