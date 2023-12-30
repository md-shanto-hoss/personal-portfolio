<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Personal;
use App\Models\Review;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;

class ShantoController extends Controller
{
    public function index()
    {
        return view('website.home.index', [
            'personals' => Personal::all(),
            'services' => Service::orderBy('id', 'desc')->get(),
            'educations' => Education::orderBy('id', 'desc')->get(),
            'experiences' => Experience::orderBy('id', 'desc')->get(),
            'works' => Work::orderBy('id', 'desc')->get(),
            'reviews' => Review::orderBy('id', 'desc')->get()
        ]);
    }
}
