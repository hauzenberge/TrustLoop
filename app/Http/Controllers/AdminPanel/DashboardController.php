<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index()
    {
    
        switch (Auth::user()->role) {
            case 'admin':{
                $title = 'Dashboard';
                break;
            }
            case 'user':{
                $title = 'Dashboard | TRUSTLOOP';
                break;
            }
            default:
            $title = 'Dashboard';
                break;
        }
        $view = 'admin-panel.dashboards.' . Auth::user()->role . '-dashboard';
       
        return view($view, [
            'title' => $title,
            'active' => 'dashboard'
        ]);
    }
}
