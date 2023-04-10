<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;

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
   //dd(Project::all()); //see its content
    return view('test',[
        'one'=>1 ,// access in view as normal variable $one
        'projects'=> Project::all(), //user's projects
        'arr'=>[
            'one'=>1,
            'two'=>2,
            'three'=>3,
            'four'=>4,
        ]
    ]);
});




// USER ROUTES --------------------------------------------------------

// register forum
Route::get('/register', [UserController::class, 'create']);//->middleware('guest');

// create new user
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);//->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login');//->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


// PROJECT ROUTES --------------------------------------------------------

//showing all projects
Route::get('/projects',[ProjectController::class,'index']);//->middleware('auth');


//create new project
Route::get('/projects/create',[ProjectController::class,'create']);//->middleware('auth');

//store new project POST REQUEST SENT BACK TO projects PAGE
Route::post('/projects',[ProjectController::class,'store']);//->middleware('auth');


//show project edit forum
Route::get('projects/{project}/edit', [ProjectController::class,'edit']);//->middleware('auth');

//update project request
Route::put('project/{project}',[ProjectController::class,'update']);//->middleware('auth');

//delete project request
Route::delete('project/{project}',[ProjectController::class,'delete']);//->middleware('auth');

//project page --> showing all tasks of a specific single project
Route::get('projects/{project}',[ProjectController::class,'show'])->name('taskshow');//->middleware('auth');

//--------------------------------------------------------

// TASKS ROUTE --------------------------------------------------------

//create new task
Route::get('/projects/{project}/create',[TaskController::class,'create']);//->middleware('auth');

//store new task 
Route::post('/projects/{project}',[TaskController::class,'store']);//->middleware('auth');


//show project edit forum
Route::get('projects/{project}/{task}/edit', [TaskController::class,'edit']);//->middleware('auth');

//update project request
Route::put('project/{project}/{task}',[TaskController::class,'update']);//->middleware('auth');

//delete project request
Route::delete('project/{project}/{task}',[TaskController::class,'delete']);//->middleware('auth');



//task page --> showing single task KEEP AT THE END

