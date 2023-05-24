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

    public static function update($user_id, UserData $userData, $data)
    {
        if (array_key_exists('card_id', $data)) {
            if ($userData->plan->alias == 'no_trial') {
                $price = floatval($userData->plan->price);
                $payment = PaymentFactory::create();
                $payment->pay($user_id, $price, $data['card_id']);
            }
        }
        return $userData->update($data);
    }
}
