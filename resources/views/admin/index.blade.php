@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>You are an viewing the Admin Home page</h3>
        <hr class="mb-3">
        <div>
            <div class="row mb-3">
                <div class="col-sm-4">
                    <div class="card shadow text-center py-3">
                        <h5>
                            {{$users_count}} Users
                        </h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow text-center py-3">
                        <h5>
                            {{$admins_count}} Admins
                        </h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow text-center py-3">
                        <h5>
                            {{$users_count - $admins_count}} Students
                        </h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="card shadow text-center py-3">
                        <h5>
                            {{$feedback_count}} Feedback(s)
                        </h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow text-center py-3">
                        <h5>

                        </h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow text-center py-3">
                        <h5>

                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5"></div>

        <div class="row">
            <h3 class="text-center">Admin Quick Navigation</h3>
            <hr>
            <div class="col-sm-6 text-center align-self-center">
                <ul class="list-unstyled fs-5">
                    <li>
                        <a href="{{ route('admin.users') }}">View Users</a>
                    </li>
                    <li>
                        <a href="{{ route('feedback.index') }}">FeedBack Page</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('images/map.jpg') }}" alt="" class="img-fluid rounded-5">
            </div>
        </div>
    </div>
@endsection
