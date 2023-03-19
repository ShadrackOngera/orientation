@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>You are an viewing the Admin Home page</h3>
        <hr class="mb-3">
        <div>
            <div class="row">
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
        </div>
    </div>
@endsection
