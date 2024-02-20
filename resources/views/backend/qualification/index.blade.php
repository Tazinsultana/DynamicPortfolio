@extends('backend.layouts.main')
@section('content')
    <div class="container">


        <h1 class="my-4"> Educational Information</h1>
        <div style="display:flex;justify-content:end">
            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</a>

        </div><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Institute</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody">
                @foreach ($education as $key => $educations)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $educations->deg_title }}</td>
                        <td>{{ $educations->inst_name }}</td>
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

@include('backend.qualification.ajax')
@include('backend.qualification.add')
@include('backend.qualification.update')
