<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\Payment;
use Carbon\Carbon;
use App\Services\UserDataService;

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

        if ($user->role == "user") {

            $startOfMonth = Carbon::now()->subMonth();
            $endOfMonth = Carbon::now();

            $payment = Payment::where('user_id', $user->id)
               // ->where('status', "paid")
                ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                ->latest()
                ->first();
            
         //   dd($payment);
            if ($payment === null) {
                $card = $user->userData->card;
              //  dd($card);
                UserDataService::update($user->id, $user->userData, ['card_id' => $card->id]);
            }elseif ($payment->status == "unpaid") {
                return redirect('/user-card');
            }
        }

        return $next($request);
    }
}
