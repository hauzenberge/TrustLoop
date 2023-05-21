<?php

namespace App\Payments\PaymentGateways;

use App\Payments\PaymentGateway;

class PaymentFactory
{
    public static function create()
    {
        $paymentSystem = env('PAYMENT_SYSTEM');

        switch ($paymentSystem) {
            case 'stripe':
                return new StripeGateway();
            case 'paypal':
                return new PayPalGateway();
            default:
                throw new \Exception('Unsupported payment system');
        }
    }
}
