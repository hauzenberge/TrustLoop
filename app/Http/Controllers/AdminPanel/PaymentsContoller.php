<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Payment;
use App\Models\Plan;

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

                    $data['all_payments'] = Payment::getMapFromAdminList('all');
                    $data['paid_payments'] = Payment::getMapFromAdminList('', ['fillable' => 'status', 'value' => 'paid']);
                    $data['unpaid_payments'] = Payment::getMapFromAdminList('', ['fillable' => 'status', 'value' => 'unpaid']);
                    $data['canceled_payments'] = Payment::getMapFromAdminList('', ['fillable' => 'status', 'value' => 'canceled']);

                    break;
                }
            case 'user': {
                    $data['title'] =  'User Billing | TRUSTLOOP';

                    $data['payments'] = Payment::where('user_id', $user->id)
                        ->get();

                    $data['plans'] = Plan::where('alias', '!=', "trial")->get();

                    break;
                }
            default:
                $data['title'] = 'Payments';
                break;
        }



        return view($view, $data);
    }
}
