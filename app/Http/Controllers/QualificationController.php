<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function index(){
        return view('backend.qualification.index');
    }
}
