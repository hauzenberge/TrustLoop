<?php

namespace App\Payments;

interface PaymentGateway
{
    public function pay($amount, $card_id);
    public function verifyCard($cardNumber);
}
