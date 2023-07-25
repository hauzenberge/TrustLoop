<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Survey;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Font;

use App\Models\Answer;

class SettignsController extends Controller
{
    public function index()
    {
        $data = [
            'active' => 'settings'
        ];

        switch (Auth::user()->role) {
            case 'admin': {
                    $data['title'] = 'Settings';
                    break;
                }
            case 'user': {
                    $data['title'] = 'User Settings | TRUSTLOOP';
                    $survey =  Auth::user()->survey()->with('questions')->first();
                  //  dd($survey);
                    $data['survey'] = $survey;
                    
                    if ($survey->static_request_widget == 1) {
                       // dd($survey->static_request_widget);
                        $data['reviews'] =  Answer::where('user_id', Auth::user()->id)
                        ->with('question')
                       // ->paginate(2)
                        ->get()
                        ->groupBy(function ($answer) {
                            return $answer->created_at->format('m/d/Y h:m:s');
                        })
                        ->map(function ($item, $key) {
                            $rate_as = $item->filter(function ($item) {
                                if (($item->question->text == "Rate Us")){
                                    return $item;
                                }
                            })->first();

                           if ($rate_as) {
                            $rate_as = $rate_as->text;
                        } else {
                            $rate_as = '0'; 
                        }

                            $all_questions = $item->filter(function ($item) {
                                if ($item->question->text != "Rate Us") {
                                    return $item;
                                }
                            })
                                ->values()
                                ->map(function ($item) {
                                    return [
                                        'question' => $item->question->text,
                                        'answer' => $item->text
                                    ];
                                })->toArray();
                            return [
                                'rate_as' => intval($rate_as),
                                'date' => $key,
                                'all_questions' => $all_questions
                            ];
                        });
                    }
                    $data['questions'] =  $survey->questions->where("text", '!=', 'Rate Us');
                    $data['fonts'] = Font::all();
                    break;
                }
            default: {
                    $title = 'Settings';
                    break;
                }
        }

        $view = 'admin-panel.settings.' . Auth::user()->role . '-settings';

        return view($view, $data);
    }

    public function SurveyUpdate($survey_id, Request $request)
    {
        
        $validate = $request->validate([
            'popup_text' => 'required|string',
            'feedback_request' => 'required|string',
            'review_text' => 'required|string',
            'review_button_text' => 'required|string',

            'font_id' => 'required',
            'style' => 'sometimes',

            'link_url' => 'nullable|url',
        ]);
        if ($request->input("link_url") == null) {
            //dd($request->input("link_url"));
            $validate["link_url"] = null;

        }
        

        if ($request->input("static_request_widget") != null) {
            $validate["static_request_widget"] = true;
        }else $validate["static_request_widget"] = false;

        if ($request->input("exit_intent_feedback_popup") != null) {
            $validate["exit_intent_feedback_popup"] = true;
        }else $validate["exit_intent_feedback_popup"] = false;

        $survay = Survey::find($survey_id);
        $survay->update($validate);

       
        if ($request->input("link_url") == null) {
            //dd($request->input("link_url"));
            //$validate["link_url"] = null;

            $survey = Survey::find($survey_id);
            $survey->link_url = null;
            $survey->save();
          //  dd($survey->link_url);
           // dd($validate);
        }
      

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

        $text = $request->input('text');

        if (substr($text, -1) !== '?') { 
            $text .= '?'; 
        }

        $question->text = $text;
        // $question->type = $request->input('type');
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
