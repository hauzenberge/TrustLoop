<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index()
    {
        $view = 'admin-panel.dashboards.' . Auth::user()->role . '-dashboard';
      //  dd($view);
        return view($view, [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ]);
    }
}
