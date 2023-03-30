@extends('admin-panel.layouts.app')

@section('content')

<div class="row mb-4">
    <!-- Title -->
    <h2 class="">
        {{ __('Payments') }}
    </h2>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="paid-tab" data-bs-toggle="tab" data-bs-target="#paid" type="button" role="tab" aria-controls="paid" aria-selected="false">Paid</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button" role="tab" aria-controls="unpaid" aria-selected="false">Unpaid</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="canceled-tab" data-bs-toggle="tab" data-bs-target="#canceled" type="button" role="tab" aria-controls="canceled" aria-selected="false">Canceled</button>
        </li>
    </ul>
    <div class="tab-content  my-4" id="myTabContent">
        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">@include('admin-panel.payments.components.tab-all')</div>
        <div class="tab-pane fade" id="paid" role="tabpanel" aria-labelledby="paid-tab">@include('admin-panel.payments.components.tab-paid')</div>
        <div class="tab-pane fade" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">@include('admin-panel.payments.components.tab-unpaid')</div>
        <div class="tab-pane fade" id="canceled" role="tabpanel" aria-labelledby="canceled-tab">@include('admin-panel.payments.components.tab-canceled')</div>
    </div>

</div> <!-- / .row -->

@endsection