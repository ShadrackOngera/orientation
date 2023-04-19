<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        $chatMessages = ChatMessage::get();

        return view('pages.chat')
            ->with('users', $users)
            ->with('chatMessages', $chatMessages);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

//        $user = auth()->user()->firstOrFail();
//        $user = User::findOrFail(Auth::user());

        $request->validate([
            'content' => 'required',
            'sender_id' => 'required',
        ]);

        $chat = ChatMessage::create([
            'content' => $request->input('content'),
            'sender_id' => $request->input('sender_id'),
            'receiver_id' => 1,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
