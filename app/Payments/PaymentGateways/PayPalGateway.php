<?php

namespace App\Payments\PaymentGateways;

use App\Payments\PaymentGateway;

class PayPalGateway implements PaymentGateway
{
    public function pay($amount)
    {
        // Логіка оплати через PayPal
    }

    public function verifyCard($cardNumber)
    {
        // Логіка перевірки карти через PayPal
    }
}
