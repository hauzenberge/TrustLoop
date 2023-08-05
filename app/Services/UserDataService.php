<?php

namespace App\Services;

use App\Models\UserData;
use App\Models\User;
use App\Models\Plan;

use App\Payments\PaymentGateways\PaymentFactory;
use App\Services\EmailService;

class UserDataService
{
    public static function create($data)
    {
        $userData = UserData::create($data);

        return $userData;
    }

    public static function update($user_id, UserData $userData, $data)
    {
        $return = [];
        if (array_key_exists('card_id', $data)) {
            if ($userData->plan->alias == 'no_trial') {
                $price = floatval($userData->plan->price);
                $payment = PaymentFactory::create();
                $return['return_payment'] =  $payment->pay($user_id, $price, $data['card_id']);
                //dd($return_payment);
            }
        } else {
            if ($userData->plan_id == null) {
                $user = User::find($user_id);
                $plan = Plan::find($data["plan_id"]);
                $message = 'Payment plan ' . $plan->name . ' has been activated!';
                EmailService::sendEmail($user->email, $message);
            } else {
                $user = User::find($user_id);
                $plan = Plan::find($data["plan_id"]);
                $message = 'Your current payment plan has been upgraded to ' . $plan->name;
                EmailService::sendEmail($user->email, $message);
            }
        }
        $return['userData'] = $userData->update($data);
        return $return;
    }
}
