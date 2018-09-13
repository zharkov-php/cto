<?php

namespace App\Http\Controllers;


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


}
