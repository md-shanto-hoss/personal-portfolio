<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        return view('admin.education.index');
    }
    public function create(Request $request)
    {
        Education::newEducation($request);
        return back()->with('message', 'Education Info Create Successful');
    }
    public function manage()
    {
        return view('admin.education.manage', ['educations' => Education::all()]);
    }
    public function edit($id)
    {
        return view('admin.education.edit', ['education' => Education::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Education::updateEducation($request, $id);
        return redirect('education/manage')->with('message', 'Education Update Successful');
    }
    public function delete($id)
    {
        Education::deleteEducation($id);
        return back()->with('message', 'Education Update Successful');
    }
}
