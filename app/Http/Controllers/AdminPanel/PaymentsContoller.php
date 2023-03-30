<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentsContoller extends Controller
{
    public function index()
    {
        //dd('lol');
        return view('admin-panel.payments.admin-payments', [
        'title' => 'Payments',
        'active' => 'payments'
    ]);
    }
}
