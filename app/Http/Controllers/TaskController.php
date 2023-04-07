<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // STILL TO ADD USER AUTHORIZATION IN DELETE AND UPDATE

    //show create task forum
    public function create(){
        return view('task.create');
    }

    //store task forum
    public function store(Request $request , Project $project){
        $fields_to_store = $request->validate([
            'tname'=>['required'],
            'description'=>'required' 
        ]); 

        $fields_to_store['project_id'] = $project->id;

        Task::create($fields_to_store);
        return redirect('project.projects'); //redirect to projects page
        //new task should appear there
    }

     //show edit task forum
     public function edit(Project $project ,Task $task){
        return view('task.edit',['task'=>$task]);
    }

    //update task request
    public function update(Request $request , Project $project , Task $task){

        //USER AUTHORIZATION
        if($task->project_id != $project->id) {
            abort(403, 'Unauthorized Action');
        }


        $fields_to_store = $request->validate([
            'tname'=>'required',
            'description'=>'nullable' 
        ]); 

        $task->update($fields_to_store);
        return back();
    }


    //delete task request
    public function delete(Project $project, Task $task){
        // USER AUTHORIZTION
        if($task->project_id != $project->id) {
            abort(403, 'Unauthorized Action');
        }

        $task->delete();
        return redirect()->route('taskshow',['project'=>$project]);
        //task deleted should not appear
    }
}
   