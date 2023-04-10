<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view('user.register');
    }

    // Create New User
    public function store(Request $request) {
        //dd($request);
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6' 
            //add password_confirmation in forum in html
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
        //dd($formFields);
        // Create User
        $user = User::create($formFields);
        //dd($user);// to test
        // Login
        auth()->login($user);

        return redirect('/projects');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'You have been logged out!');

    }

    // Show Login Form
    public function login() {
        return view('user.login');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/projects');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
        //show undel email input field in html
    }

   
}
