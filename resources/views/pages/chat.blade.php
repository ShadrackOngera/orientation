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
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>
        </div>
        <div class="py-5"></div>

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
