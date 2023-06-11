<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Plan;
use App\Models\User;
use App\Services\UserDataService;
use App\Models\Card;
use App\Models\SurveyResponse;


class EnablePlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();

        return view('admin-panel.enable-plan', [
            'title' => 'Plans',
            'user_id' => Auth::user()->id,
            'plans' => $plans
        ]);
    }

    public function update()
    {
        $plans = Plan::where('alias', '!=', "trial")->get();

        return view('admin-panel.enable-plan', [
            'title' => 'Plans',
            'user_id' => Auth::user()->id,
            'plans' => $plans
        ]);
    }

    public function choose(User $user, Plan $plan)
    {
        $data =  UserDataService::update($user->id, $user->userData, ['plan_id' => $plan->id]);


        $user_responce = SurveyResponse::where('user_id', $user->id)->first();
        if ($user_responce == null) {
            $user_responce = SurveyResponse::create([
                'user_id' => $user->id,
                'sum_requests' => 0
            ]);
        } else {
            $user_responce->sum_requests = 0;
            $user_responce->save();
        }

        if ($plan->alias == 'trial') {
            return redirect('dashboard');
        }
        return redirect('user-card');
    }

    public function saveCard(Request $request)
    {
        $date = explode("-", $request->input("expiry-date"));
        $card = Card::create([
            'card_number' => $request->input("card_number"),
            'exp_month' => $date[1],
            'exp_year' => $date[0],
            'cvc' => $request->input("cvv")
        ]);
        $user = Auth::user();

        UserDataService::update($user->id, $user->userData, ['card_id' => $card->id]);

        return redirect('/dashboard');
    }
}
