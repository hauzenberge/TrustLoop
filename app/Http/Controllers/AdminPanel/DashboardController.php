<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

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

        $registrations_count = User::where('role', '!=', 'admin')->count();
        
        $total_users = User::all()->count();
       
       
        return view($view, [
            'title' => $title,
            'active' => 'dashboard',
            'registrations_count' => $registrations_count,
            'total_users' => $total_users
        ]);
    }
}
