<?php

namespace App\Payments\PaymentGateways;

use App\Payments\PaymentGateway;

//use Cartalyst\Stripe\Laravel\Facades\Stripe;

use Stripe\Stripe;
use Stripe\Exception\CardException;

use App\Models\Card;
use App\Models\Payment;
use App\Models\User;

use App\Services\EmailService;

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
        $data = [
            'user_id' => $user_id,
            'payment_system' => 'stripe',
            'quantity' => $amount
        ];
        $card = Card::find($card_id);
        $token = $this->generateToken($card->card_number, $card->exp_month, $card->exp_year, intval($card->cvc));


        try {
            $charge = \Stripe\Charge::create([
                'amount' => intval($amount * 100),
                'currency' => 'USD',
                'source' => $token,
            ]);

            $data['status'] = 'paid';

            return Payment::create($data);
        } catch (CardException $e) {
            // dd($e);
            $error = $e->getError();
            $errorMessage = $error->message;

            $data['status'] = 'unpaid';

            $user = User::find($user_id);
           
            $message = 'Your payment failed. Subscription plan has been suspended.';
            EmailService::sendEmail($user->email, $message);
            return Payment::create($data);
        }
    }

    public function verifyCard($cardNumber)
    {
        // Логіка перевірки карти через Stripe
    }
}
