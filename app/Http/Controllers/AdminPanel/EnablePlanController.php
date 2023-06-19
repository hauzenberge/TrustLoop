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

use App\Models\EnablePlanLog;

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
        $userCountRequests = $user->surveyResponse->first()->sum_requests;
        //dd($userCountRequests);
        $plan = $user->userData->plan;
        $max_request = intval($plan->max_request);
        
        if ($userCountRequests < $max_request) {
          //  dd($max_request);
            EnablePlanLog::create([
                'user_id' => $user->id,
                'plan_id' => $plan->id,
                'survey_responses' =>  $userCountRequests
            ]);
        }
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

    public function userCard()
    {
        $planLogs = EnablePlanLog::where('user_id', Auth::user()->id)->first();

        return view('admin-panel.card',[
            'title' => 'User Card',
            'planLog' => $planLogs
        ]);
    }

    public function cancel(EnablePlanLog $planLog)
    {
        $user = $planLog->user;
        $plan = $planLog->plan;

        $userData = $user->userData;
        $userData->plan_id = $plan->id;
        $userData->save();

        $user_responce = SurveyResponse::where('user_id', $user->id)->first();
        $user_responce->sum_requests = $planLog->survey_responses;
        $user_responce->save();

        $planLog->delete();
        
        return redirect('dashboard');
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
