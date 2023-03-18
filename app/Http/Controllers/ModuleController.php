<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function kitchenModule(){

        //Kitchen Module Controller
        return view('modules.kitchen');
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
