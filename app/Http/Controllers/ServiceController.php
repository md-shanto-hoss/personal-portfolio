<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index');
    }
    public function create(Request $request)
    {
        Service::newService($request);
        return back()->with('message', 'Service Info Create Successful');
    }
    public function manage()
    {
        return view('admin.service.manage', ['services' => Service::get()]);
    }
    public function edit($id)
    {
        return view('admin.service.edit', ['service' => Service::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Service::updateService($request, $id);
        return redirect('service/manage')->with('message', 'Service Update Successful');
    }
    public function delete($id)
    {
        Service::deleteService($id);
        return back()->with('message', 'Service Info Delete Successful');
    }
}
