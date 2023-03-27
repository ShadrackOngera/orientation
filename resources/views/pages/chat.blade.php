@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <div class="card shadow p-3 mb-3">
                <p class="text-center">
                    You are Chatting with the Admin
                </p>
                <hr>
                @foreach($chatMessages as $chatMessage)
                    @if($chatMessage->sender_id == auth()->user()->id)
                        <div class="text-capitalize">
                            <p class="float-end">
                                {{ $chatMessage->content }}
                            </p>
                        </div>
                    @else
                        <div class="text-muted text-capitalize">
                            {{ $chatMessage->content }}
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <form action="{{ route('chat.store') }}" method="POST">
            @csrf
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave your Message here" name="content" id="floatingTextarea2" style="height: 100px"></textarea>
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
