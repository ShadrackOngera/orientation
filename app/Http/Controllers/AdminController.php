<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    //Global class used to show admin home page
    public function index(){
        //admin home page
        $users_count = User::count();
        $admins_count = User::role('admin')->count();
        $feedback_count = Feedback::count();
        return view('admin.index')
            ->with('users_count', $users_count)
            ->with('feedback_count', $feedback_count)
            ->with('admins_count', $admins_count);
    }

    //This global class is used to show the admin all users of the system
    public function users(){
        //show users
        $users = User::get();
        return view('admin.users')
            ->with('users', $users);
    }

    public function exportPdf()
    {
        $users = User::get();
        $pdf = \PDF::loadHTML(view('admin.users', ['users' => $users]));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('users.pdf');
    }
}
