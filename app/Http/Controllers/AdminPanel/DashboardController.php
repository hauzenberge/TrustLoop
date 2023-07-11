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

                    $reviews = Survey::all()
                        ->map(function ($item) {
                            return $item->questions
                                ->filter(function ($item) {
                                    if ($item->text == "Rate Us") {
                                        return $item;
                                    }
                                })
                                ->filter(function ($item) {
                                    if ($item->answers->count() != 0) {
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
                                                'user' => $item->user->name,
                                                'date' => Carbon::parse($item->created_at)->format('m/d/y'),
                                            ];
                                        });

                                    return $answers;
                                })
                                ->first();
                        })
                        ->filter(function ($item) {
                            if ($item != null) {
                                return $item;
                            }
                        })
                        ->first();
                    //->values();
                    //  dd($reviews);
                    if ($reviews != null) {
                        $reviews = $reviews->values();
                    }

                    $data = [
                        'title' => $title,
                        'active' => 'dashboard',
                        'reviews' => $reviews,
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
                                                'date' => Carbon::parse($item->created_at)->format('m/d/y'),
                                            ];
                                        });

                                    return $answers;
                                })
                                ->first();
                        })
                        ->first();

                    $year = date('Y');

                    $answers_data = Answer::where('user_id', Auth::user()->id)
                        ->whereYear('created_at', $year)
                        ->selectRaw("DATE_FORMAT(created_at, '%d/%m') as date, COUNT(*) as count")
                        ->groupBy('date')
                        ->orderByRaw("STR_TO_DATE(date, '%d/%m')")
                        ->get();


                    $daysOfWeek = $answers_data->pluck('date')->toArray();
                    $counts = $answers_data->pluck('count')->toArray();


                    $data = [
                        'title' => $title,
                        'active' => 'dashboard',
                        'anwers' => $anwers,
                        'chart' => [
                            'daysOfWeek' => $daysOfWeek,
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
