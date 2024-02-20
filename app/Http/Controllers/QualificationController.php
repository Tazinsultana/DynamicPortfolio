<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function index()
    {
        return view('backend.qualification.index');
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'deg_name' => 'required',
            'inst_name' => 'required',
            'start' => 'required',
            'end' => 'required',
            'des' => 'required',


        ]);

//   dd($request->all());
        Qualification::create([
            'deg_title' => $request->deg_name,
            'inst_name' => $request->inst_name,
            'start_date' => $request->start,
            'end_date' => $request->end,
            'description' => $request->des,

        ]);
        return response()->json([
            'status' => 'success',
            'msg'=>'Create Successfully',

        ]);
    }
}
