<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin-panel.users.index', [
            'title' => 'Users',
            'active' => 'users'
        ]);
    }
}
