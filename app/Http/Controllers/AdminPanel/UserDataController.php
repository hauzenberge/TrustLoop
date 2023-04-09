<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\UserData;

class UserDataController extends Controller
{
    public function updateCountry(Request $request, UserData $userData)
    {
        $userData->country_id = $request->country_id;
        $userData->save();

        return redirect()->back();
    }
}
