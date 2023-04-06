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

    //show create project forum
    public function create(){
        return view('project.create');
    }

    //store project forum
    public function store(Request $request){
        //TO FILL 
        $fields_to_store = $request->validate([
            'pname'=>'required',
            'description'=>'nullable' //verify that nullable works
        ]); 

        Project::create($fields_to_store);
        return redirect('project.projects');
    }

    //show edit project forum
    public function edit(Project $project){
        return view('project.edit',['project'=>$project]);
    }


    //update project request
    public function update(Request $request , Project $project){
        $fields_to_store = $request->validate([
            'pname'=>'required',
            'description'=>'nullable' //verify that nullable works
        ]); 

        $project->update($fields_to_store);
        return back();
    }

    //delete project request
    public function delete(Project $project){
        $project->delete();
        return redirect('project.projects');
    }


    //open a single project  , returns show
    public function show(Project $project){
        return view('project.tasks',[
            //'project' => $project
            //'tasks' => Task::all()->where('') //STILL NOT DONE
            //get tasks of project in $project
        ]);
    }


   
}
