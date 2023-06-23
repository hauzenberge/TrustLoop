<?php

namespace App\Services;

use Mailchimp;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class EmailService
{
    public static function sendEmail($email, $message2)
    {
        try {
            $subject = env('APP_NAME');

            Mail::raw($message2, function ($message) use ($email, $subject) {
                $message->to($email);
                $message->subject($subject);
            });
        } catch (\Exception $e) {
            Log::error('Error sand email: ' . $e->getMessage());
        }
    }
}
