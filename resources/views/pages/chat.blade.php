@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Start a Conversation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    @foreach($users as $user)
                        <a class="nav-link border align-self-center my-3" href="#">
                            <span class="py-3 ms-4">{{ $user->first_name }} {{ $user->last_name }}</span>
                        </a>
                    @endforeach
                </div>
                <div class="py-5"></div>
            </div>

        </div>

        <div class="">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">View Participants</button>
        </div>
        <div class="py-5"></div>

        <div>
            <div class="card shadow p-3 mb-3">
                <p class="text-center">
                    General Group Chat
                </p>
                <hr>
                @foreach($chatMessages as $chatMessage)
                    @if($chatMessage->sender_id == auth()->user()->id)
                        <div class="float-end bg-primary-fade mb-1 rounded-4">
                            <p class="float-end me-4 mt-2">
                                {!! nl2br(e($chatMessage->content)) !!}
                            </p>
                        </div>
                    @else
                        <div class="text-muted text-capitalize bg-light mb-1 rounded-5 border">
                            <small class="fw-bold text-dark ms-4">{{ $chatMessage->user->first_name }} {{ $chatMessage->user->last_name }}</small>
                            <p class="text-muted ms-5">
                                {!! nl2br(e($chatMessage->content)) !!}
                            </p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <form action="{{ route('chat.store') }}" method="POST">
            @csrf
            <div class="input-group">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave your Message here" name="content" id="floatingTextarea2" style="height: 65px"></textarea>
                    <label for="floatingTextarea2">Message</label>
                </div>
                <input type="number" value="{{ auth()->user()->id }}" name="sender_id" hidden>
                <button type="submit" class="btn btn-outline-primary">
                    Send
                </button>
            </div>
        </form>
    </div>
@endsection
