<?php

namespace App\Payments\PaymentGateways;

use App\Payments\PaymentGateway;

//use Cartalyst\Stripe\Laravel\Facades\Stripe;

use Stripe\Stripe;

use App\Models\Card;
use App\Models\Payment;

class StripeGateway implements PaymentGateway
{
    private function generateToken($cardNumber, $expMonth, $expYear, $cvc)
    {
        //dd($cvc);
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $token = \Stripe\Token::create([
            'card' => [
                'number' => $cardNumber,
                'exp_month' => $expMonth,
                'exp_year' => $expYear,
                'cvc' => $cvc,
            ],
        ]);


        return $token['id'];
    }

    public function pay($user_id, $amount, $card_id)
    {
        //dd($user_id);
        $data = [
            'user_id' => $user_id,
            'payment_system' => 'stripe',
            'quantity' => $amount
        ];
        $card = Card::find($card_id);
        // dd($card->cvc);
        $token = $this->generateToken($card->card_number, $card->exp_month, $card->exp_year, intval($card->cvc));
        //dd($token);
        $charge = \Stripe\Charge::create([
            'amount' => intval($amount * 100),
            'currency' => 'USD',
            'source' => $token,
        ]);

        //  dd($charge["status"]);
        if ($charge["status"] != "succeeded") {
            $data['status'] = 'unpaid';
            Payment::create($data);

            abort(404, 'OOPS');
        } else{ 
            $data['status'] = 'paid';
            Payment::create($data);
            return $charge;
        }
    }

    public function verifyCard($cardNumber)
    {
        // Логіка перевірки карти через Stripe
    }
}
