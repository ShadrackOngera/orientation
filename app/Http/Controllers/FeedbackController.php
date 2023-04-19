<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index',]]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $likely_rating = DB::table('feedback')->avg('likely');
        $comfortable_rating = DB::table('feedback')->avg('likely');

        return view('pages.feedback')
            ->with('likely_rating', $likely_rating)
            ->with('comfortable_rating', $comfortable_rating);
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
        $user = auth()->user();
//        $user = User::findOrFail(Auth::user());

        $request->validate([
            'content' => 'required',
            'comfort' => 'required',
            'likely' => 'required',
        ]);


        $feedback = Feedback::create([
            'content' => $request->input('content'),
            'comfort' => $request->input('comfort'),
            'likely' => $request->input('likely'),
            'sender_id' => $user->id,
        ]);

        $message = 'Your Feedback has been Received';
        return redirect('/dashboard')->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
