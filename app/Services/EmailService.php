<?php

namespace App\Services;

use Mailchimp;

class EmailService
{
    public static function sendEmail($email, $message)
    {
        $mailchimp = new MailChimp(env('MAILCHIMP_APIKEY'));
        //dd($mailchimp);
        dd($mailchimp);
        $mailchimp->send('your-campaign-template', [
            'email' => $email,
            'html' => $message,
        ]);
        /*
        Newsletter::subscribe($email);
        Newsletter::send('your-campaign-template', [
            'email' => $email,
            'html' => $message,
        ]);

        $result = Newsletter::subscribeOrUpdate($email, [
            'им\'я' => 'ім\'я_підписника',
        ]);
        */
    }
}
