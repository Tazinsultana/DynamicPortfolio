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
                <tr>
                    <th scope="row">1</th>
                    <td>BSc in SWE</td>
                    <td>Daffodil International University</td>
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
@include('backend.qualification.add')
@include('backend.qualification.ajax')
