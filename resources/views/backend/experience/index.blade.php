@extends('backend.layouts.main')
@section('content')
    <div class="container">


        <h1 class="my-4">Experience Details..</h1>
        <div style="display:flex;justify-content:end">
            <a href="{{ route('experience.create') }}" class="btn btn-primary">Add</a>

        </div><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Position</th>
                    <th scope="col">Company</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Laravel Developer</td>
                    <td>SeoPage</td>
                    <td>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-primary">View</a>
                        <a href="" class="btn btn-danger"> Delete</a>

                    </td>
                </tr>


            </tbody>
        </table>

    </div>
@endsection
