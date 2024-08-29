<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;

class MailController extends Controller
{
    public function sendNotification(Request $request)
    {
        $details = [
            'title' => 'New Notification',
            'body' => 'You have a new notification.'
        ];

        SendEmailJob::dispatch($details);
        return view('welcome');
    }
}
