<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}
