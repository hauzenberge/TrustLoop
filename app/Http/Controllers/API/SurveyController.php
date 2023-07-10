<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\SurveyResponse;

class SurveyController extends Controller
{
    private function questionList($user)
    {
        $survey = $user->survey()->first();
        $questions = $user->survey()
            ->with('questions')
            ->first()
            ->questions
            ->map(function ($item) {
                return [
                    'question_id' => $item->id,
                    'text' => $item->text,
                    'type' => $item->type,
                    'survey_id' => $item->survey_id,
                    'value' => null
                ];
            });
        return  collect([
            'survey' => $survey,
            'questions' => $questions
        ])->toJson();
    }

    public function getSurveysByUser(User $user)
    {
        $max_requests = $user->userData->plan->max_request;
        $user_responce = SurveyResponse::where('user_id', $user->id)->first();

        if ($user_responce == null) {
            $user_responce = SurveyResponse::create([
                'user_id' => $user->id,
                'sum_requests' => 0
            ]);
        }        

        if ($max_requests === "unlimited") {
            $return = $this->questionList($user);
        }elseif ($user_responce->sum_requests != intval($max_requests)) {
            $return = $this->questionList($user);
        } else $return = collect([
            'massege' => 'Error'
        ])->toJson();

        return $return;
    }
}
