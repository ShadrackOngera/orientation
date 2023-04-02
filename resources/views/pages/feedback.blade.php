@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="align-items-center">
            @if (\Session::has('message'))
                <div class="alert alert-success">
                    {!! \Session::get('message') !!}
                </div>
            @endif
        </div>

        <h3>Welcome to Our Feedback page</h3>
        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf
            <div>
                <label for="floatingInput" class="text-muted">How Comfortable are you now visiting the school</label>
                <select class="form-select mb-3 py-3" aria-label="Default select example" name="comfort" required>
                    <option value="1">Very Uncomfortable</option>
                    <option value="2">Somewhat Uncomfortable</option>
                    <option value="3">unsure</option>
                    <option value="4">Somewhat comfortable</option>
                    <option value="5">very comfortable</option>
                </select>
            </div>

            <div>
                <label for="floatingInput" class="text-muted">How Likely are you to recommend our system</label>
                <select class="form-select mb-3 py-3" aria-label="Default select example" name="likely" required>
                    <option value="1">Very Unlikely</option>
                    <option value="2">Somewhat Unlikely</option>
                    <option value="3">unsure</option>
                    <option value="4">Somewhat likely</option>
                    <option value="5">very likely</option>
                </select>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave your FeedBack here" name="content" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Leave Your Feedback here</label>
            </div>
            <div class="col-sm-5 d-grid float-end">
                <button type="submit" class="btn btn-outline-info">
                    Send
                </button>
            </div>
        </form>
    </div>
@endsection
