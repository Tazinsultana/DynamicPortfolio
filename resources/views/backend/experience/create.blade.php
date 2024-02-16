@extends('backend.layouts.main')
@section('content')
    <div class="container">


        <h1 class="my-4">Experience Details..</h1>

        <div style="display:flex;justify-content:end">

        </div><br>
        <form action="{{ route('experience.store') }}" method="post">
            @csrf

            <div class="mb-3">

                <x-form.input title="Position Name" name="deg_name" type="text" placeholder="" />

            </div>
            <div class="mb-3">

                <x-form.input title="Company Name" name="company_name" type="text" placeholder="" />

            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Start date</label>
                <input type="number" name="start" min="1900" max="2099" step="1" value="2016" />
            </div>
            <div class="mb-3">

                <label for="name" class="form-label">End Date</label>
                <input type="number" name="end" min="1900" max="2099" step="1" value="2016" />
            </div>

            <div class="mb-3">

                <x-form.textarea title="Description" id="short_description" name="short_description" row="10"
                    placeholder=" I'm confident at...." />

            </div>
            <div class="mb-3">
                <a href="{{ route('experience.index') }}" class="btn btn-primary" type="submit">Add</a>
            </div>
    </div>
@endsection
