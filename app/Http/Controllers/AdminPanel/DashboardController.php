<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Survey;
use App\Models\Question;
use App\Models\UserData;
use Illuminate\Support\Carbon;
use App\Models\Answer;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;

use App\Models\Plan;

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

                    $paid_data = Payment::selectRaw('DAYNAME(created_at) as day, COUNT(*) as count')
                        ->groupBy('day')
                        ->orderByRaw("FIELD(day, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')")
                        ->get();

                    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                    $counts = [];

                    $paid_counts = array_map(function ($day) use ($paid_data) {
                        $count = $paid_data->firstWhere('day', $day);
                        return $count ? $count->count : 0;
                    }, $daysOfWeek);

                    $trialPlanId = Plan::where("alias", "trial")->first()->id;
                    // dd($trialPlanId);

                    $users_data = User::where('role', 'user')
                        ->with('userData')
                        ->whereHas('userData', function ($query) use ($trialPlanId) {
                            $query->where('plan_id', $trialPlanId);
                        })
                        ->selectRaw('DAYNAME(created_at) as day, COUNT(*) as count')
                        ->groupBy('day')
                        ->orderByRaw("FIELD(day, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')")
                        ->get();

                    $free_counts = array_map(function ($day) use ($users_data) {
                        $count = $users_data->firstWhere('day', $day);
                        return $count ? $count->count : 0;
                    }, $daysOfWeek);

                    //dd($free_counts);

                    $data = [
                        'title' => $title,
                        'active' => 'dashboard',
                        'registrations_count' => $registrations_count,
                        'registrations_count_weeks' => $registrations_count_weeks,
                        'total_users' => $total_users,
                        'userList' => User::getUserList(),
                        'chart' => [
                            'namesOfMounthes' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                            'countsPaid' => $paid_counts,
                            'countsFree' => $free_counts
                        ]
                    ];

                    break;
                }
            case 'user': {
                    $user = Auth::user();

                    $userData = UserData::find($user->user_data_id);

                    if ($userData->plan_id == null) {
                        return redirect('enable-plan');
                    }

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

                    $answers_data = Answer::selectRaw('DAYNAME(created_at) as day, COUNT(*) as count')
                        ->groupBy('day')
                        ->orderByRaw("FIELD(day, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')")
                        ->get();

                    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                    $counts = [];

                    foreach ($daysOfWeek as $day) {
                        $count = $answers_data->firstWhere('day', $day);
                        $counts[] = $count ? $count->count : 0;
                    }

                    $data = [
                        'title' => $title,
                        'active' => 'dashboard',
                        'anwers' => $anwers,
                        'chart' => [
                            'daysOfWeek' => ['Mon', 'Tue', 'Web', 'Thu', 'Fr', 'Sat', 'Sun'],
                            'counts' => $counts
                        ]
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
