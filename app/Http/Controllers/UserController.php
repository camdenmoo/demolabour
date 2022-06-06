<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show login form
    public function login(){
        return view('users.login')->with('message', 'Welcome back!');
    }

    // Authernticate user to log in
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(auth()->attempt($formFields)){

            $request->session()->regenerate();
            
            return redirect('/dashboard')->with('message', 'You have successfully logged in!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }   

    // Log user out
    public function logout(Request $request){
        
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    // Show registration form
    public function register(){
        return view('users.register');
    }

    // Store new user
    public function store(Request $request){

        $formFields = $request->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'gender' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        // Other required fields for this new user
        $formFields['hex'] = Str::random(11);
        $formFields['user_type_id'] = 1;

        // Hash password with bCrypt
        $formFields['password'] = bcrypt($formFields['password']);

        // Create user
        $user = User::create($formFields);

        // Log user in
        auth()->login($user);

        return redirect('/dashboard')->with('message', 'User created and logged in');

    }
}
