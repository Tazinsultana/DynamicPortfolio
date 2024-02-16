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
        return view('backend.experience.index');
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
        $request->validate([
            'des_name' => 'required:experiences',
            'company_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'short_description' => 'required',


        ]);
        Experience::create([
            'des_name' => $request->deg_name,
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
