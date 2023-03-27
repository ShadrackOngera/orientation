<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

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

    //this global class is used to print the users list, which is in the composer.lock DOM PDF configurations
    public function exportPdf(){
        $allUsers = User::get();
        $pdf = (new \Barryvdh\DomPDF\PDF)->loadView('admin.users',
            [
                'allUsers'=>$allUsers,
            ]);

        return $pdf->download('users.pdf');
    }
}
