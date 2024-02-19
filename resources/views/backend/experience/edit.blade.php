@extends('backend.layouts.main')
@section('content')
    <div class="container">


        <h1 class="my-4"> Update Experience Details..</h1>

        <div style="display:flex;justify-content:end">

        </div><br>
        {{-- @dd('hi') --}}
        <form action="{{ route('experience.update',$experience->id) }}" method="post">
            @csrf
            @method('put')

            <div class="mb-3">

                <x-form.input title="Position Name" name="up_des_name" type="text" placeholder="" value="{{$experience->des_name }}" />

            </div>
            <div class="mb-3">

                <x-form.input title="Company Name" name="up_company_name" type="text" placeholder="" value="{{$experience->company_name }}"  />

            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Start date</label>
                <input type="number" name="up_start" min="1900" max="2099" step="1" value="{{$experience->start_date }}" />
            </div>
            <div class="mb-3">

                <label for="name" class="form-label">End Date</label>
                <input type="number" name="up_end" min="1900" max="2099" step="1" value="{{ $experience->end_date }}" />
            </div>

            <div class="mb-3">

                <x-form.textarea title="Description" id="short_description" name="up_short_description" row="10"
                    placeholder=" I'm confident at...." value="{{$experience->short_description }}"  />

            </div>
            <div class="mb-3">
                {{-- <a href="{{ route('experience.index') }}" class="btn btn-primary" type="submit">Add</a> --}}
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
    </div>
@endsection
