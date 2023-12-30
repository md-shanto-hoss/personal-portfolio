<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        return view('admin.experience.index');
    }
    public function create(Request $request)
    {
        Experience::newExperience($request);
        return back()->with('message', 'Experience Info Create Successful');
    }
    public function manage()
    {
        return view('admin.experience.manage', ['experiences' => Experience::all()]);
    }
    public function edit($id)
    {
        return view('admin.experience.edit', ['experience' => Experience::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Experience::updateExperience($request, $id);
        return redirect('experience/manage')->with('message', 'Experience Info Update Successful');
    }
    public function delete($id)
    {
        Experience::deleteExperience($id);
        return back()->with('message', 'Experience Delete Successful');
    }
}
