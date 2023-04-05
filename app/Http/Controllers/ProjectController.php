<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //show all project , returns index 
    public function index(){
        return view('project.projects',[
            //'projects' => Project::all()
        ]);
    }

    //open a single project  , returns show
    public function show(){
        return view('project.tasks',[
            //'tasks' => Task::all()->where('') //STILL NOT DONE
        ]);
    }

    //show create project forum
    public function create(){
        return view('project.create');
    }

    //store project forum
    public function store(){
        //TO FILL 
    }
}
