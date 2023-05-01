<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class SurveyController extends Controller
{
    public function getSurveysByUser(User $user)
    {
        $survey = $user->survey()->first();
        $questions = $user->survey()
        ->with('questions')
        ->first()
        ->questions       
        ->map(function($item){
            return [
                'question_id' => $item->id,
                'text' => $item->text,
                'type' => $item->type,
                'survey_id' => $item->survey_id,
                'value' => null
            ];
        });


        return collect([
            'survey' => $survey,
            'questions' => $questions
        ])->toJson();
    }
}
