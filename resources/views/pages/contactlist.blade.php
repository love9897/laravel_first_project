@extends('layout.default_layout')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <table class="table " style="margin-top: 100px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contact_list as $key => $val)
                <tr>
                    <th>{{ $val->id }}</th>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->email }}</td>
                    <td>{{ $val->phone }}</td>
                    <td>{{ $val->address }}</td>
                    <td><a href="{{ url('/delete') . '/' . $val->id }}"><button class="btn btn-primary">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div style="display: flex; justify-content:center;">
        {{ $contact_list->links() }}
    </div>
@endsection
