<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\Payment;
use App\Models\Survey;
use App\Models\SurveyResponse;

use Carbon\Carbon;
use App\Services\UserDataService;

use Illuminate\Support\Facades\View;

class CheckTariffPlan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        $error = null;
    
        $user_responce = SurveyResponse::where('user_id', $user->id)->first();

        if ($user_responce == null) {
            $user_responce = SurveyResponse::create([
                'user_id' => $user->id,
                'sum_requests' => 0
            ]);
        }

        if ($user->role == "user") {
            $plan = $user->userData->plan;
           
            if ($plan == null) {
                return redirect('/enable-plan');
            }
            if ($plan->alias === "trial") {
                if (intval($plan->max_request) === $user_responce->sum_requests){
                    $error = 'Your trial period or iterations expired.  <a class="block-button" href="' . url('/enable-plan/update'). ' ">Please upgrade</a>'; 
                }
            } elseif (($plan->alias === "no_trial")
                or (intval($plan->max_request) === $user_responce->sum_requests)
            ) {
                $startOfMonth = Carbon::now()->subMonth();
                $endOfMonth = Carbon::now();

                $payment = Payment::where('user_id', $user->id)

                    ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                    ->latest()
                    ->first();
         
                if ($payment === null) {
                    if ($user->userData->plan == null) {
                        return redirect('/enable-plan');
                    }
                    $card = $user->userData->card;

                    if ($card == null) {
                        return redirect('/user-card');
                    }
                    UserDataService::update($user->id, $user->userData, ['card_id' => $card->id]);
                } elseif ($payment->status === "unpaid") {
             
                    return redirect('/user-card');
                }
            }
        }

        View::share('error', $error);

        return $next($request);
    }
}
