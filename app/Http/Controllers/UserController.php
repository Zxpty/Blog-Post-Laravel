<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function loginGet()
    {
        $title = "Login";
        return view('/auth/login', compact("title"));
    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
            return redirect('/home');
        }
        return redirect('/');
    }


    public function logout(Request $request)
    {
        auth()->logout();
        return redirect('/');
    }

    public function registerGet()
    {
        $title = 'Registration';
        return view('/auth/register', compact('title'));
    }
    
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:32']

        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        User::create($incomingFields);
        // auth()->login($user);
        return redirect('/');
    }
}
