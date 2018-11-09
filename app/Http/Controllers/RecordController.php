<?php

namespace App\Http\Controllers;

use App\Model\RecordService;
use Illuminate\Http\Request;
use Mail;
use Session;

class RecordController extends Controller
{


    /**
     * Send
     */
    public function send(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [

        ]);
        RecordService::create($request->all());

            $data = [
            'date' => $request->date,
            'model' => $request->model,
            'run' => $request->run,
            'name' => $request->name,
            'service' => $request->service,
            'email' => $request->email,
            'phone' => $request->phone,
            'text' => $request->text,
        ];

        Mail::send('email_record', $data, function ($text) use ($data){

            $text->to('c.autokiev@gmail.com');
            $text->subject( $data['date'] );
            $text->from('c.autokiev@gmail.com', $data['name']);
        });

        session::flash('success', "Вы отправили письмо!! В ближайшее время с Вами свяжется администратор");
        return redirect()->back();
    }


}
