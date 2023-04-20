<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Survey;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SettignsController extends Controller
{
    public function index()
    {
        $data = [
            'active' => 'settigns'
        ];

        switch (Auth::user()->role) {
            case 'admin': {
                    $data['title'] = 'Settings';
                    break;
                }
            case 'user': {
                    $data['title'] = 'User Settings | TRUSTLOOP';
                    $survey =  Auth::user()->survey()->with('questions')->first();
                    $data['survey'] = $survey;
                    $data['questions'] =  $survey->questions->where("text", '!=', 'Rate Us');
                    $data['question_types'] = [
                        [
                            'value' => 'question',
                            'text' => 'Question'
                        ],
                        [
                            'value' => 'rating',
                            'text' => 'Rating'
                        ]
                    ];
                    break;
                }
            default: {

                    $title = 'Settings';
                    break;
                }
        }

        $view = 'admin-panel.settigns.' . Auth::user()->role . '-settigns';

        return view($view, $data);
    }

    public function SurveyUpdate($survey_id, Request $request)
    {
        $validate = $request->validate([
            'popup_text' => 'nullable|string',
            'review_text' => 'nullable|string',
            'review_button_text' => 'nullable|string',

            'link_url' => 'nullable|url',
        ]);

        $survay = Survey::find($survey_id);
        $survay->update($validate);

        return redirect()->back();
    }

    public function QuestionDelete($question_id)
    {
        $question = Question::find($question_id);
        $question->delete();
        return redirect()->back();
    }

    public function QuestionUpdate($question_id, Request $request)
    {
        $question = Question::find($question_id);

        $question->text = $request->input('text');
        $question->type = $request->input('type');
        $question->save();
        return redirect()->back();
    }

    public function QuestionCreate(Request $request)
    {
        Question::create([
            'text' => $request->input('text'),
            'type' => 'question',
            'survey_id' => Auth::user()->survey_id
        ]);
        return redirect()->back();
    }
}
