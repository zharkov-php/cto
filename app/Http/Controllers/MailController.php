<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use Illuminate\Http\Request;
use Mail;
use Session;

class MailController extends Controller
{


    /**
     * Send
     */
    public function send(MailRequest $mailRequest)
    {
        $data = [
            'name' => $mailRequest->name,
            'email' => $mailRequest->email,
            'phone' => $mailRequest->phone,
            'message' => $mailRequest->message,
        ];

         Mail::send('email', $data, function ($text) use ($data){

             $text->to('c.autokiev@gmail.com');
             $text->subject( $data['message']);
             $text->from($data['email'], $data['name']);
         });

                session::flash('success', "Вы отправили письмо!! В ближайшее время с Вами свяжется администратор");
                 return redirect()->back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function email()
    {
        return view('email');
    }



    }
