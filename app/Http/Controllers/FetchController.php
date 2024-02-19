<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class FetchController extends Controller
{
    public function experiencePage()
    {
        // $experiences = Experience::findOrFail($id);
        // $experiences = Experience::where('id', $id)->latest()->get();
        $experiences = Experience::latest()->get();

        return view('frontend.home', compact('experiences'));
    }
}
