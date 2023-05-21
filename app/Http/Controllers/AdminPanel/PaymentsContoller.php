<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Payment;

class PaymentsContoller extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = [

            'active' => 'payments'
        ];

        $view = 'admin-panel.payments.' . $user->role . '-payments';

        switch ($user->role) {
            case 'admin': {
                    $data['title'] =  'Payments';

                    $payment_query = new Payment;
                    $payment_query = $payment_query->with('user');
                    $data['all_payments'] = Payment::getMapFromAdminList($payment_query->get());
                    $data['paid_payments'] = Payment::getMapFromAdminList($payment_query->where('status', 'paid')->get());
                    $data['unpaid_payments'] = Payment::getMapFromAdminList($payment_query->where('status', 'unpaid')->get());
                    $data['canceled_payments'] = Payment::getMapFromAdminList($payment_query->where('status', 'canceled')->get());

                    break;
                }
            case 'user': {
                    $data['title'] =  'User Billing | TRUSTLOOP';

                    $data['payments'] = Payment::where('user_id', $user->id)
                        ->get();

                    break;
                }
            default:
                $data['title'] = 'Payments';
                break;
        }



        return view($view, $data);
    }
}
