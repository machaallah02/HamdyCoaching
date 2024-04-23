<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Function to display the login page
    public function login(){
        // Return the login view
        // User::create([
        //     'name'=>'mach',
        //     'email'=>'mach@fr.com',
        //     'password'=> Hash::make('0000')
        // ]);
        return view('admin.signin');
    }

    // Function to handle user login
    public function doLogin(LoginRequest $request){
        $credential = $request->validated();
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended(route('admin.article.index'));
        }
        return back()->withErrors(['email'=>'identifiant incorrect Reessayez!!'])->onlyInput('email');
    }

    public function logout(){
        // Log out the user
        Auth::logout();
        return to_route('login')->with('success', 'vous etes maintenant deconnecter');
    }

    // Function to register a new user
    public function registerUser(Request $request)
    {
        // Validate the user input
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|unique:users|max:255',
        //     'password' => 'required|string|min:8',
        // ]);

        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Redirect the user to the login page
        return redirect()->route('login');
    }
}
