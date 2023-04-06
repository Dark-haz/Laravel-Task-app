<?php

use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//test page
Route::get('/test', function () {
    return view('test',[
        'one'=>1 ,// access in view as normal variable $one
        //'project'=> Project::all() //user's projects
        'arr'=>[
            'one'=>1,
            'two'=>2,
            'three'=>3,
            'four'=>4,
        ]
    ]);
});

//login or register

//main page --> showing all projects
Route::get('/projects',[ProjectController::class,'index']);


//create new project
Route::get('/projects/create',[ProjectController::class,'create']);

//store new project POST REQUEST SENT BACK TO projects PAGE
Route::post('/projects',[ProjectController::class,'store']);


//show project edit forum
Route::get('projects/{$project}/edit', [ProjectController::class,'edit']);

//update project request
Route::put('project/{$project}',[ProjectController::class,'update']);

//delete projcet request
Route::delete('project{$project}',[ProjectController::class,'delete']);



//project page --> showing all tasks of a specific single project
Route::get('projects/{$project}',[ProjectController::class,'show']);




//create new task



//task page --> showing single task KEEP AT THE END

