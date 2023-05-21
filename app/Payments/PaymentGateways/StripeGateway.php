<?php

namespace App\Payments\PaymentGateways;

use App\Payments\PaymentGateway;

class StripeGateway implements PaymentGateway
{
    public function pay($amount)
    {
        // Логіка оплати через Stripe
    }

    public function verifyCard($cardNumber)
    {
        // Логіка перевірки карти через Stripe
    }
}
