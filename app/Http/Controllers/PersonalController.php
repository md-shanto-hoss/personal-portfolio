<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        return view('admin.personal.index');
    }
    public function create(Request $request)
    {

        Personal::newPersonal($request);
        return back()->with('message', 'Personal Info Create Successful');
    }
    public function manage()
    {
        return view('admin.personal.manage', ['personals' => Personal::all()]);
    }
    public function edit($id)
    {
        return view('admin.personal.edit', ['personal' => Personal::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Personal::updatePersonal($request, $id);
        return redirect('personal/manage')->with('message', 'Personal Info Update Successful');
    }
    public function delete($id)
    {
        Personal::deletePersonal($id);
        return back()->with('message', 'Personal Info Delete Successful');
    }
}
