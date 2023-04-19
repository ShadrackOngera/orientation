<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
{

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

    public function progressIncrease()
    {
        $user = Auth::user(); // Get the authenticated user
        $currentProgress = $user->progress;
        $newProgress = $currentProgress + 20;

        // Update the user's progress field
        $user->update(['progress' => $newProgress]);

        return redirect()->back();
    }
}
