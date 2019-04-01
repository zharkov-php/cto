<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ServicesRequest;
use App\Model\Service;


class ServicesController extends MainAdminController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $services = Service::select('id','name', 'title', 'image')->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * @param ServicesRequest $servicesRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ServicesRequest $servicesRequest)
    {

        $service = Service::create($servicesRequest->all());
        $service->uploadImage($servicesRequest->file('image'));

        return redirect()->route('services.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service', 'id'));
    }

    /**
     * @param ServicesRequest $servicesRequest
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ServicesRequest $servicesRequest, $id)
    {

        $service = Service::find($id);
        $service->update($servicesRequest->all());
        $service->uploadImage($servicesRequest->file('image'));

        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->route('services.index');
    }
}
