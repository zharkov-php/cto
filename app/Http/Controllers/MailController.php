<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class MailController extends Controller
{


    /**
     * Send
     */
    public function send(Request $request)
    {

        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
         ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
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
