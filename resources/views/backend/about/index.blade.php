@extends('backend.layouts.main')
@section('content')
    <div class="container">


        <h1 class="my-4"> About List</h1>
        <div style="display:flex;justify-content:end">
            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</a>

        </div><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($about as $key => $abouts)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $abouts->full_name}}</td>
                        <td>{{$abouts->description}}</td>
                        <td>
                            <a href="" class="btn btn-success data-bs-toggle="modal"
                                data-bs-target="#updateModal">Edit</a>
                            <a href="" class="btn btn-primary">View</a>
                            <a href="" class="btn btn-danger"> Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
@include('backend.about.ajax')
@include('backend.about.update')
@include('backend.about.addmodal')
