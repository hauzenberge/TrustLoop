<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Survey;
use App\Models\Question;

use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $view = 'admin-panel.dashboards.' . Auth::user()->role . '-dashboard';
        $data = [];
        switch (Auth::user()->role) {
            case 'admin': {
                    $title = 'Dashboard';

                    $registrations_count = User::where('role', '!=', 'admin')->count();
                    $registrations_count_weeks = User::where('role', '!=', 'admin')->whereDate('created_at', '>=', Carbon::now()->subDays(7))->count();
                    $total_users = User::all()->count();


                    $data = [
                        'title' => $title,
                        'active' => 'dashboard',
                        'registrations_count' => $registrations_count,
                        'registrations_count_weeks' => $registrations_count_weeks,
                        'total_users' => $total_users,
                        'userList' => User::getUserList()
                    ];

                    break;
                }
            case 'user': {
                    $user = Auth::user();

                    if ($user->survey_id == null) {


                        $survey = Survey::create(['title' => 'Survey Into ' . $user->name]);

                        $questions = [
                            ['text' => 'How would you rate our service?', 'type' => 'question'],
                            ['text' => 'How likely are you to recommend us?', 'type' => 'question'],
                            ['text' => 'How satisfied are you with our product?', 'type' => 'question'],
                            ['text' => 'What is your age?', 'type' => 'question'],
                            ['text' => 'What is your favorite color?', 'type' => 'question'],
                            ['text' => 'What is your favorite food?', 'type' => 'question'],
                        ];

                        $rate_as_quastion = Question::create([
                            'text' => "Rate Us",
                            'type' => 'rating',
                            'survey_id' => $survey->id,
                        ]);

                        $questionsCount = count($questions);

                        $randomKeys = array_rand($questions, 3);
                        $randomQuestions = [];
                        foreach ($randomKeys as $key) {
                            $randomQuestions[] = $questions[$key];
                        }

                        foreach ($questions as $questionData) {
                            $question = Question::create([
                                'text' => $questionData['text'],
                                'type' => $questionData['type'],
                                'survey_id' => $survey->id,
                            ]);
                        }
                        $user->survey()->associate($survey)->save();
                    }

                    $title = 'Dashboard | TRUSTLOOP';

                    $anwers = Survey::where('id', $user->survey_id)
                        ->with('questions.answers')
                        ->get()
                        ->map(function ($item) {
                            return $item->questions
                                ->filter(function ($item) {
                                    if ($item->text == "Rate Us") {
                                        return $item;
                                    }
                                })
                                ->map(function ($item) {
                                    $answers = $item->answers
                                    ->sortByDesc('created_at')  
                                    ->take(5)
                                        ->map(function ($item) {
                                            return [
                                                'count' => intval($item->text),
                                                'date' => Carbon::parse($item->created_at)->format('d/m/y'),
                                            ];
                                        });  

                                    return $answers;
                                })
                                ->first();
                        })
                        ->first();


                    $data = [
                        'title' => $title,
                        'active' => 'dashboard',
                        'anwers' => $anwers
                    ];
                    break;
                }
            default:
                $title = 'Dashboard';
                break;
        }

        return view($view, $data);
    }
}
