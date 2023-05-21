<?php

namespace App\Payments\PaymentGateways;

use App\Payments\PaymentGateway;

use Cartalyst\Stripe\Laravel\Facades\Stripe;

use App\Models\Card;

class StripeGateway implements PaymentGateway
{
    private function generateToken($cardNumber, $expMonth, $expYear, $cvc)
    {
        //dd($cvc);
        $token = Stripe::tokens()->create([
            'card' => [
                'number' => $cardNumber,
                'exp_month' => $expMonth,
                'exp_year' => $expYear,
                'cvc' => $cvc,
            ],
        ]);

        return $token['id'];
    }

    public function pay($amount, $card_id)
    {
       //  dd($amount);
        $card = Card::find($card_id);
        // dd($card->cvc);
        $token = $this->generateToken($card->card_number, $card->exp_month, $card->exp_year, intval($card->cvc));

        $charge = Stripe::charges()->create([
            'amount' => $amount,
            'currency' => 'USD',
            'source' => $token,
        ]);

      //  dd($charge["status"]);
        if ($charge["status"] != "succeeded") {
            abort(404, 'OOPS');
        } else return $charge;
    }

    public function verifyCard($cardNumber)
    {
        // Логіка перевірки карти через Stripe
    }
}
