<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;
class MailController extends Controller
{
    public function sendEmail()
    {
        try
        {
            $toEmailAddress = "haiderscheema5@gmail.com";
            $welcomeMessage = "Hello! This is the mailtrap email configuration";
            Mail::to($toEmailAddress)->send(new SendMail( $welcomeMessage));


            return response()->json(['success' => 'Email Sent Successfully!']);


        }

        catch(Exception $e)
        {
            \Log::error("Unable to send Email" . $e->getMessage());

            return response()->json(['error' => 'Unable to send email. Please try again later.']);

        }

    }
}
