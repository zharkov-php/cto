<?php

namespace App\Http\Controllers;


use App\Model\RecordService;
use App\Model\Service;
use Illuminate\Http\Request;

/**
 * Class MainAdminController
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
     */
    public function record()
    {
        $allServices = Service::all();

        return view('main.record', compact('allServices'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function createRecord(Request $request)
    {
        $this->validate($request, [
        //todo: create validate
        ]);

        RecordService::create($request->all());
        return redirect('main.record');
    }
}
