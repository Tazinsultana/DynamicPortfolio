<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        return view('backend.about.index');
    }
    // for Create...
    public function insert(Request $request)
    {
        dd($request->all());

        $request->validate([

            'title' => 'required:abouts',
            'description' => 'required',
            'full_name' => 'required',
            'date' => 'required',
            'degree' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'img' => 'required',

        ]);
        About::create([
            'title' => $request->title,
            'description' => $request->des,
            'full_name' => $request->name,
            'date' => $request->date,
            'degree' => $request->deg,
            'phone' => $request->phn,
            'address' => $request->address,
            'email' => $request->email,
            'img' => $request->img



        ]);
        return response()->json([
            'status' => 'success'
        ]);
    }
}
