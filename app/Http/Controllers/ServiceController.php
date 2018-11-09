<?php

namespace App\Http\Controllers;

use App\Model\Service;

class ServiceController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $query = Service::all();
        $services = $query;


        return view('service.index', compact('services'));
    }
}
