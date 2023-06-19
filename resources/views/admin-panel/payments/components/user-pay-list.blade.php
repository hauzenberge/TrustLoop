@if(count($payments) != 0 )
<table class="table user-table align-middle table-edge table-hover table-nowrap mb-0">
    <thead class="thead-light">
        <tr>
            <th class="w-60px pe-0">
                <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" value="" id="checkAllCheckboxes">
                </div>
            </th>
            <th class="ps-3">
                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="number">
                    #
                </a>
            </th>
            <th>
                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="system">
                    Payment system
                </a>
            </th>
            <th>
                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                    Create date
                </a>
            </th>
            <th>
                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="amount">
                    Amount
                </a>
            </th>
            <th>
                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                    Status
                </a>
            </th>
            <th class="w-150px text-center">
                <a href="javascript: void(0);" class="text-muted">
                    Actions
                </a>
            </th>
        </tr>
    </thead>
    <tbody class="list">

        @foreach($payments as $payment)
        <tr>
            <td class="pe-0">
                <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" value="">
                </div>
            </td>
            <td class="number ps-3">
                {{$payment->id}}
            </td>
            <td class="system">
                <img src="{{$payment->payment_system}}">
            </td>
            <td class="date">
                {{ $payment->created_at }}             
            </td>
            <td class="amount">
                {{ $payment->quantity }}$
            </td>
            <td class="status">
                <span class="status-{{$payment->status}}">
                    {{ ucfirst($payment->status) }}
                </span>
            </td>
            <td class="edit text-center">
                <a class="view" href="javascript: void(0);">
                    <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<h1>{{ __('NO PAYMENTS FOUND')}} </h1>
@endif