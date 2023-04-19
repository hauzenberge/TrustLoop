<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

use App\Models\Survey;
use App\Models\Answer;
use App\Models\User;

class ResponseController extends Controller
{
    public function store(Request $request, Survey $survey)
    {
        //dd($survey->link_url);
       // dd($request->input());
        $validatedData = $request->validate([
            //   'surveyId' => 'required|exists:surveys,id',
            'answers' => 'required|array',
            'answers.*.question_id' => 'required|exists:questions,id',
            'answers.*.value' => 'required',
        ]);

        $user = User::where('survey_id', $survey->id)->first();
        foreach ($validatedData['answers'] as $answerData) {
            Answer::create([
                'user_id' =>  $user->id,
                'question_id' => $answerData['question_id'],
                'text' => $answerData['value'],
            ]);
        }

        return [
            'status' => 'success',
            'text' => 'Thank you for your response!',
            'redirect_url' => $survey->link_url
        ];
    }
}
