<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    // STILL TO ADD USER AUTHORIZATION IN DELETE AND UPDATE

    //show all project , returns index 
    public function index(){
        $projects = Project::where('user_id', auth()->user()->id)->get();
        return view('project.projects',[
            'projects' => $projects
        ]);
    }

    //show create project forum
    public function create(){
        return view('project.create');
    }

    //store project forum
    public function store(Request $request){
        $fields_to_store = $request->validate([
            'pname'=>['required',Rule::unique('projects', 'pname')],
            'description'=>'nullable' //verify that nullable works
        ]); 

        $fields_to_store['user_id'] = auth()->id();

        Project::create($fields_to_store);
        return redirect('/projects');
    }

    //show edit project forum
    public function edit(Project $project){
        return view('project.edit',['project'=>$project]);
    }


    //update project request
    public function update(Request $request , Project $project){

         //USER AUTHORIZATION
         if($project->user_id != auth()->id()) {
            abort(403, 'boi what you doin here , go back!');
        }

        $fields_to_store = $request->validate([
            'pname'=>'required',
            'description'=>'nullable' //verify that nullable works
        ]); 

        $project->update($fields_to_store);
        return back();
    }

    //delete project request
    public function delete(Project $project){

         //USER AUTHORIZATION
         if($project->user_id != auth()->id()) {
            abort(403, 'Caught you red handed!');
        }
        
        $project->delete();
        return redirect('project.projects');
    }


    //open a single project  and shows its tasks
    public function show(Project $project){
        
        // if($project->user_id != auth()->id()) {
        //     abort(403, 'What are you trying to do big man hm?');
        // }

        $tasks = Project::find($project->id)->tasks; 
        
        return view('project.tasks',[
            'project' => $project,
            'tasks' => $tasks 
        ]);
    }

   

   
}
