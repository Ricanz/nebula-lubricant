<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_mail(){
        $to_name = 'riyanti';
        $to_email = 'riyantimaulya17@gmail.com';
        $data = array('name'=>"Ogbonna Vitalis(sender_name)", 'body' => "A test mail");

        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Laravel Test Mail');
        $message->from('noreply@nebula.id', 'Test Mail');
        });
    }
}
