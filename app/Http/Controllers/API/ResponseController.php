<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

use App\Models\Survey;
use App\Models\Answer;
use App\Models\User;
use App\Models\SurveyResponse;

use App\Services\EmailService;

class ResponseController extends Controller
{
    public function store(Request $request, Survey $survey)
    {
        $validatedData = $request->validate([
            //   'surveyId' => 'required|exists:surveys,id',
            'answers' => 'required|array',
            'answers.*.question_id' => 'required|exists:questions,id',
            'answers.*.value' => 'required',
        ]);

        $user = User::where('survey_id', $survey->id)
        ->with('userData')
        ->first();

        $plan = $user->userData->plan;
       // dd($plan->alias);
        $max_request = intval($user->userData->plan->max_request);
       // dd($max_request);
        
        $user_responce = SurveyResponse::where('user_id', $user->id)->first();
        if ($user_responce == null) {
            $user_responce = SurveyResponse::create([
                'user_id' => $user->id,
                'sum_requests' => 0
            ]);
        }

        $sum_requests = $user_responce->sum_requests + 1;

        if (($sum_requests == $max_request) 
        and ($plan->alias === "trial")){
            $message = 'Your trial peris has expired. Please upgrate.';
            EmailService::sendEmail($user->email, $message);
        }
    

        foreach ($validatedData['answers'] as $answerData) {
            Answer::create([
                'user_id' =>  $user->id,
                'question_id' => $answerData['question_id'],
                'text' => $answerData['value'],
            ]);
        }

        $user_responce->sum_requests = $sum_requests;
        $user_responce->save();

       // dd($survey->feedback_request);

        return [
            'status' => 'success',
            'text' => $survey->feedback_request,
            'redirect_url' => $survey->link_url
        ];
    }
}
