<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Plan;
use App\Models\User;
use App\Services\UserDataService;
use App\Models\Card;


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

    public function choose(User $user, Plan $plan)
    {
        //dd($plan->alias);
        $data =  UserDataService::update($user->id, $user->userData, ['plan_id' => $plan->id]);
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
