<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class SurveyController extends Controller
{
    public function getSurveysByUser(User $user)
    {
        $surveys = $user->survey()->with('questions')->get();
        

        return response()->json($surveys);
    }
}
