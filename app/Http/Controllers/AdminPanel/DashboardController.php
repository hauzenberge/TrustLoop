<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Survey;
use App\Models\Question;

class DashboardController extends Controller
{
    public function index()
    {
        switch (Auth::user()->role) {
            case 'admin': {
                    $title = 'Dashboard';
                    break;
                }
            case 'user': {
                    
                    if (Auth::user()->survey_id == null) {
                        $user = Auth::user();

                        $survey = Survey::create(['title' => 'Survey Into ' . $user->name]);

                        $questions = [
                            ['text' => 'How would you rate our service?', 'type' => 'rating'],
                            ['text' => 'How likely are you to recommend us?', 'type' => 'rating'],
                            ['text' => 'How satisfied are you with our product?', 'type' => 'rating'],
                        ];
    
                        foreach ($questions as $questionData) {
                            $question = Question::create([
                                'text' => $questionData['text'],
                                'type' => $questionData['type'],
                                'survey_id' => $survey->id,
                            ]);
                        }
                    }                   

                    $title = 'Dashboard | TRUSTLOOP';
                    break;
                }
            default:
                $title = 'Dashboard';
                break;
        }
        $view = 'admin-panel.dashboards.' . Auth::user()->role . '-dashboard';

        $registrations_count = User::where('role', '!=', 'admin')->count();

        $total_users = User::all()->count();


        return view($view, [
            'title' => $title,
            'active' => 'dashboard',
            'registrations_count' => $registrations_count,
            'total_users' => $total_users,
            'userList' => User::getUserList()
        ]);
    }
}
