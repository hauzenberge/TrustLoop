<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        switch (Auth::user()->role) {
            case 'admin':{
                $title = 'User List';
                break;
            }
            case 'user':{
                $title = ' User Reviews';
                break;
            }
            default:
            $title = 'Users';
                break;
        }
        $view = 'admin-panel.users.' . Auth::user()->role . '-index';


        return view($view , [
            'title' => $title,
            'active' => 'users'
        ]);
    }
}
