<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        //admin home page
        $users_count = User::count();
        $admins_count = User::role('admin')->count();
        return view('admin.index')
            ->with('users_count', $users_count)
            ->with('admins_count', $admins_count);
    }

    public function users(){
        //show users
        $users = User::get();
        return view('admin.users')
            ->with('users', $users);
    }

    public function exportPdf(){

        $allUsers = User::orderBy('updated_at', 'DESC')->get();
        $pdf = Pdf::loadView('admin.users',
            [
                'allUsers'=>$allUsers,
            ]);

        return $pdf->download('users.pdf');
    }
}
