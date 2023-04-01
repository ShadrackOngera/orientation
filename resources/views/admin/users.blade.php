@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>You are an viewing the Admin Home page</h3>
        <hr class="mb-3">
        <a href="{{ route('export.users') }}" class="btn btn-outline-primary">Export Lists To PDF</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
