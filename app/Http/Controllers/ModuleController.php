<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['cafeteriaModule', 'classesModule', 'libraryModule', 'sportsModule', 'labsModule']]);
    }

    public function updateProgress()
    {
        $user = auth()->user();
        $user->progress += 20;

        if ($user->progress > 100) {
            $user->progress = 100;
        }

        $user->save();

        return redirect()->back();
    }

    public function cafeteriaModule(){

        //Kitchen Module Controller
        return view('modules.cafeteria');
    }

    public function classesModule(){

        //Kitchen Module Controller
        return view('modules.classes');
    }

    public function libraryModule(){

        //Kitchen Module Controller
        return view('modules.library');
    }

    public function sportsModule(){

        //Kitchen Module Controller
        return view('modules.sports');
    }

    public function labsModule(){

        //Kitchen Module Controller
        return view('modules.labs');
    }
}
