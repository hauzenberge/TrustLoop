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
use App\Models\Payment;

use App\Models\EnablePlanLog;
use Carbon\Carbon;

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

        if ($user->userData->plan != null) {

            $max_request = intval($plan->max_request);

            if ($userCountRequests < $max_request) {
                $planLog = EnablePlanLog::where('user_id', $user->id)->first();
                if ($planLog == null) {
                    EnablePlanLog::create([
                        'user_id' => $user->id,
                        'plan_id' => $user->userData->plan->id,
                        'survey_responses' =>  $userCountRequests
                    ]);
                }
            }
        }

        $data =  UserDataService::update($user->id, $user->userData, ['plan_id' => $plan->id]);


        $user_responce = SurveyResponse::where('user_id', $user->id)->first();
        if ($user_responce == null) {
            $user_responce = SurveyResponse::create([
                'user_id' => $user->id,
                'sum_requests' => 0
            ]);
        } else {
            //$user_responce->sum_requests = 0;
            //  $user_responce->save();
        }

        if ($plan->alias == 'trial') {
            return redirect('dashboard');
        }
        return redirect('user-card');
    }

    public function userCard(Request $request, $error = null)
    {
        $user = Auth::user();

        $error = null;

        $startOfMonth = Carbon::now()->subMonth();
        $endOfMonth = Carbon::now();

        $payment = Payment::where('user_id', $user->id)
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->latest()
            ->first();
        
        if($payment != null){
            $error = $payment->error;
        }

        $planLogs = EnablePlanLog::where('user_id', $user->id)
            ->with('plan')
            ->first();

        return view('admin-panel.card', [
            'title' => 'User Card',
            'planLog' => $planLogs,
            'plan' => $user->userData->plan,
            'error' => $error
        ]);
    }

    public function cancel(EnablePlanLog $planLog, $prev_route)
    {
        //dd($prev_route);
        $user = $planLog->user;
        $plan = $planLog->plan;

        $userData = $user->userData;
        $userData->plan_id = $plan->id;
        $userData->save();

        $user_responce = SurveyResponse::where('user_id', $user->id)->first();
        $user_responce->sum_requests = $planLog->survey_responses;
        $user_responce->save();

        $planLog->delete();

        return redirect($prev_route);
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

        $userData = UserDataService::update($user->id, $user->userData, ['card_id' => $card->id]);

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

        return redirect('/dashboard');
    }
}
