<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function getSend()
    {
        $content='hi你好';
        $data = ['name' => '蔡大姊', 'content'=> $content, ];
        Mail::send('email.test', $data, function($message){
            $message->subject('Laravel 5 Mail');
            $message->to('3a432011@gmail.com', '蔡大姊');
            $message->from('scorpio1106vt@gmail.com', 'admin');
        });
    }
}
