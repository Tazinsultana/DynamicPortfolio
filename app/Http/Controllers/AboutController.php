<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index()
    {

        return view('backend.about.index');
    }
    // for Create...
    public function insert(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make(
            $request->all(),
            [

                'title' => 'required',
                'des' => 'required',
                'fullname' => 'required',
                'date' => 'required',
                'degree' => 'required',
                'phnno' => 'required',
                'add' => 'required',
                'email' => 'required|unique:abouts,email',
                'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',

            ]
        );
        $image = $request->file('img');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->img->move(public_path('upload'), $img_name);
        $img_url = 'upload/' . $img_name;

        // $image = $request->file('product_img');
        // $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // $request->product_img->move(public_path('upload'), $img_name);
        // $img_url = 'upload/' . $img_name;

        // $file=$request->file('img');
        // $extension=$file->getClientOriginalExtension();
        // $fileName=time(). '.' . $extension;
        // $file->move('upload/img', $fileName);


        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()

            ]);
        } else {

        About::create([
            'title' => $request->title,
            'description' => $request->des,
            'full_name' => $request->name,
            'date' => $request->date,
            'degree' => $request->deg,
            'phone' => $request->phone,
            'address' => $request->add,
            'email' => $request->email,
            'img' => $request->img_url,



        ]);
        return response()->json([
            'status' => 'success'

        ]);
    }
}
}
