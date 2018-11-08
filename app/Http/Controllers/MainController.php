<?php

namespace App\Http\Controllers;


use App\Model\RecordService;
use App\Model\Service;
use Illuminate\Http\Request;

/**
 * Class MainController
 * @package App\Http\Controllers
 */
class MainController extends Controller
{


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('main.index');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('main.about');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('main.contact');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
     */
    public function record(Request $request)
    {
        $allServices = Service::all();
       // dd($allServices);




        return view('main.record', compact('allServices'));
    }


    public function createRecord(Request $request)
    {
        $this->validate($request, [
            // 'type' => 'required'
        ]);

        RecordService::create($request->all());
        return redirect('main.record');
    }
}
