<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PaymentsContoller extends Controller
{
    public function index()
    {
        switch (Auth::user()->role) {
            case 'admin':{
                $title = 'Payments';
                break;
            }
            case 'user':{
                $title = 'User Billing | TRUSTLOOP';
                break;
            }
            default:
            $title = 'Payments';
                break;
        }
        $view = 'admin-panel.payments.' . Auth::user()->role . '-payments';


        return view($view , [
        'title' => $title,
        'active' => 'payments'
    ]);
    }
}
