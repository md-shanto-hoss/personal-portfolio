<?php

namespace App\Http\Controllers;

use App\Models\OtherImage;
use App\Models\Work;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class WorkController extends Controller
{
    public $work;

    public function index()
    {
        return view('admin.work.index');
    }

    public function create(Request $request)
    {
        $this->work = Work::newWork($request);
        return back()->with('message', 'Project Info Create Successful');
    }

    public function manage()
    {
        return view('admin.work.manage', ['works' => Work::all()]);
    }

    public function detail($id)
    {
        return view('admin.work.detail', ['work' => Work::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.work.edit', ['work' => Work::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Work::updateWork($request, $id);
        if ($request->other_image) {
            OtherImage::updateOtherImage($request, $id);
        }
        return redirect('work/manage')->with('message', 'Project Update Successful');
    }

    public function delete($id)
    {
        Work::deleteWork($id);
        return back()->with('message', 'Work Delete Successful');
    }

}
