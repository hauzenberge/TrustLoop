<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Avatar;
use App\Models\UserData;
use App\Models\Country;
use App\Models\Plan;
use App\Models\Survey;
use App\Models\Answer;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Validation\Rule;

use Illuminate\Support\Carbon;

class UsersController extends Controller
{
    public function index()
    {
        $view = 'admin-panel.users.' . Auth::user()->role . '-index';

        $data = [
            'active' => 'users'
        ];
        switch (Auth::user()->role) {
            case 'admin': {
                    $title = 'User List';

                    $data['title'] = $title;
                    $data['userList'] = User::getUserList();

                    break;
                }
            case 'user': {
                    $title = ' User Reviews';

                    $data['title'] = $title;


                    $answers = Answer::where('user_id', Auth::user()->id)
                        ->with('question')
                        ->get()
                        ->groupBy(function ($answer) {
                            return $answer->created_at->format('d.m.Y h:m:s');
                        })
                        ->map(function ($item, $key) {
                            $rate_as = $item->filter(function ($item) {
                                if ($item->question->text == "Rate Us") {
                                    return $item;
                                }
                            })->first()->text;

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

                    $data['answers'] = $answers;

                    break;
                }
            default:
                $title = 'Users';

                $data['title'] = $title;

                break;
        }
        return view($view, $data);
    }

    public function delete($user_id)
    {
        $user = User::find($user_id);
        if ($user->survey_id != null) {
            Answer::where('user_id', $user->id)
                ->with('question')
                ->delete();
            Survey::find($user->survey_id)->delete();
        }
        Avatar::AvatarDelete($user->id);

        $user->delete();
        if ($user->user_data_id != null) {
            UserData::find($user->user_data_id)->delete();
        }
        return redirect()->back();
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        if ($user != null) {
            $userData = UserData::where('id', $user->user_data_id)
                ->with('country')
                ->first();

            return view('admin-panel.users.edit', [
                'user' => $user,
                'title' => $user->name . " Profile",
                'active' => null,
                'userData' => $userData,
                'countries' => Country::all()
            ]);
        } else return redirect()->back();
    }
    /**
     * Update the user's profile information.
     */
    public function update($user_id, Request $request)
    {
        $validate = $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($user_id)],
        ]);

        $user = User::find($user_id);

        $user->update($validate);

        return redirect()->back();
    }

    public function show($user_id)
    {
        $user = User::find($user_id);
        if ($user != null) {
            $userData = UserData::where('id', $user->user_data_id)
                ->with('country')
                ->first();

            return view('admin-panel.users.show', [
                'user' => $user,
                'title' => $user->name . " Profile",
                'active' => null,
                'userData' => $userData,
                'countries' => Country::all()
            ]);
        } else  return redirect('/dashboard');
    }

    public function add()
    {
        $user = new User;

        $userData = UserData::where('id', $user->user_data_id)
            ->with('country')
            ->first();
        return view('admin-panel.users.add', [
            'user' => $user,
            'title' => "Add User Profile",
            'active' => null,
            'userData' => $userData,
            'countries' => Country::all()
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->input());

        $plan = Plan::inRandomOrder()->first();

        // Create a UserData record with the selected plan and country
        $userData =  UserData::create([
            'country_id' => intval($request->input("country_id")),
            'plan_id' => $plan->id,
        ]);

        $validate = $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)],
        ]);

        $name = $request->input("name");
        $email = $request->input("email");
        $password = bcrypt($request->input('password'));
        $role = 'user';
        $user_data_id = $userData->id;

        $user = User::create(compact('name',  'email', 'password', 'role', 'user_data_id'));

        return redirect($user->resource_url . '/show');
    }
}
