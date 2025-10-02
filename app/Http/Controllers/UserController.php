<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:50'
        ]);
        
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        User::create($incomingFields);


        return 'Welcome to our website!';
    }
}
