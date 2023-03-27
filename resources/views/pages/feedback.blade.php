@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Welcome to Our Feedback page</h3>
        <form action="">
            @csrf
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave your FeedBack here" name="content" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Message</label>
            </div>
            <div class="col-sm-5 d-grid float-end">
                <button type="submit" class="btn btn-outline-primary">
                    Send
                </button>
            </div>
        </form>
    </div>
@endsection
