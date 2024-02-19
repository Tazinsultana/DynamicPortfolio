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
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $experience)
                    <tr>
                        <th scope="row">{{ $experience->id }}</th>
                        <td>{{ $experience->des_name }}</td>
                        <td>{{ $experience->company_name }}</td>
                        <td>{{ $experience->start_date }}</td>
                        <td>{{ $experience->end_date }}</td>
                        <td>{{ $experience->short_description }}</td>

                        <td>
                            <a href="{{ route('experience.edit', $experience->id) }}" class="btn btn-success">Edit</a>
                            {{-- <a href="{{ route('experience.show', $experience->id) }}" class="btn btn-primary">View</a> --}}
                            {{-- <a href="{{ route('experience.destroy', $experience->id) }}" class="btn btn-primary">Delete</a> --}}

                            <form action="{{ route('experience.destroy', $experience->id) }}" method="POST"><br>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"> Delete </button>

                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
