<?php

namespace App\Payments;

interface PaymentGateway
{
    public function pay($user_id, $amount, $card_id);
    public function verifyCard($cardNumber);
}
