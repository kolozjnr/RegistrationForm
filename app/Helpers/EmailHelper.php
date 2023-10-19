<?php
namespace App\Helpers;

use App\Mail\WelcomeEmail;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class EmailHelper {
    public static function sendWelcomeEmail(Mailable $mailable, $to, $subject) {
        Mail::to($to)->send($mailable);
    }
}