<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::latest()->get();
        return view('backend.experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([

            // form name...

            'des_name' => 'required',
            'company_name' => 'required',
            'start' => 'required',
            'end' => 'required',
            'short_description' => 'required',



        ]);
        // dd($request->all());

        Experience::create([
            'des_name' => $request->des_name,
            'company_name' => $request->company_name,
            'start_date' => $request->start,
            'end_date' => $request->end,
            'short_description' => $request->short_description,

        ]);
        return redirect()->route('experience.index')->withMessage('Experience Added SuccessFully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view('backend.experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        // dd($request->all());
        $request->validate([

            'up_des_name' => 'required',
            'up_company_name' => 'required',
            'up_start' => 'required',
            'up_end' => 'required',
            'up_short_description' => 'required',


        ]);
        // dd($request->all());

        $experience->update([

            'des_name' => $request->up_des_name,
            'company_name' => $request->up_company_name,
            'start_date' => $request->up_start,
            'end_date' => $request->up_end,
            'short_description' => $request->up_short_description,


        ]);
        return redirect()->route('experience.index')->withMessage('Experience Added SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        // dd(delete());
        return redirect()->route('experience.index')->withMessage('Experience Deleted Succefully');
    }

    // public function destroy(Request $id)
    // {
    //     Experience::findOrFail($id)->delete();
    //     // dd(delete());
    //     return redirect()->route('experience.index')->withMessage('Experience Deleted Succefully');
    // }
}
