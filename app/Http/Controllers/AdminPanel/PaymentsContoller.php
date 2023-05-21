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
            case 'admin':{
                $data['title'] =  'Payments';
                break;
            }
            case 'user':{
                $data['title'] =  'User Billing | TRUSTLOOP';
                //dd($user->id);

                $data['payments'] = Payment::where('user_id', $user->id)
                ->get();
                //dd($payments);

                break;
            }
            default:
            $data['title'] = 'Payments';
                break;
        }



        return view($view , $data);
    }
}
