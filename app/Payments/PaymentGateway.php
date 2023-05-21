<?php

namespace App\Payments;

interface PaymentGateway
{
    public function pay($amount);
    public function verifyCard($cardNumber);
}
