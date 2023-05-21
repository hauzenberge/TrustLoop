<?php

namespace App\Services;

use App\Models\UserData;

use App\Payments\PaymentGateways\PaymentFactory;

class UserDataService
{
    public static function create($data)
    {
        $userData = UserData::create($data);

        return $userData;
    }

    public static function update(UserData $userData, $data)
    {
        if (array_key_exists('card_id', $data)) {
            if ($userData->plan->alias == 'no_trial') {
                $price = floatval($userData->plan->price);
                //dd($price);
                $payment = PaymentFactory::create();
                $payment->pay($price, $data['card_id']);
               // dd($payment);
            }
        }
        return $userData->update($data);
    }
}
