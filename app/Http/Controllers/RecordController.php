<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecordRequest;
use App\Model\RecordService;
use Illuminate\Http\Request;
use Mail;
use Session;

class RecordController extends Controller
{

    /**
     * Send
     */
    public function send(RecordRequest $recordRequest)
    {

        RecordService::create($recordRequest->all());

            $data = [
            'date' => $recordRequest->date,
            'model' => $recordRequest->model,
            'run' => $recordRequest->run,
            'name' => $recordRequest->name,
            'service' => $recordRequest->service,
            'email' => $recordRequest->email,
            'phone' => $recordRequest->phone,
            'text' => $recordRequest->text,
        ];
//dd($recordRequest);
        Mail::send('email_record', $data, function ($text) use ($data){

            $text->to('c.autokiev@gmail.com');
            $text->subject( $data['text'] );
            $text->from($data['email'], $data['name']);
        });

        session::flash('success', "Вы отправили письмо!! В ближайшее время с Вами свяжется администратор");
        return redirect()->back();
    }


}
