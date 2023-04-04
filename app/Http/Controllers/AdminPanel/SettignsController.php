<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SettignsController extends Controller
{
    public function index()
    {
        switch (Auth::user()->role) {
            case 'admin': {
                    $title = 'Settings';
                    break;
                }
            case 'user': {
                    $title = 'User Settings | TRUSTLOOP';
                    break;
                }
            default: {

                    $title = 'Settings';
                    break;
                }
        }

        $view = 'admin-panel.settigns.' . Auth::user()->role . '-settigns';
      //  dd($view);

        return view($view, [
            'title' => $title,
            'active' => 'settigns'
        ]);
    }
}
