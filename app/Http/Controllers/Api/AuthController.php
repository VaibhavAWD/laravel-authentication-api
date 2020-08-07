<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    
    public function register(Request $request) {
        
        $request->validate([
            "name" => "required|string",
            "email" => "required|string|email|unique:users",
            "password" => "required|confirmed"
        ]);

        $user = new User([
            "name" => $request->name,
            "email" => $request->email,
            "password" => \bcrypt($request->password)
        ]);

        $user->save();

        return response()->json([
            "message" => "User registered successfully!"
        ]);
    }

    public function login() {
        echo "Login Endpoint Requested";
    }

    public function hello() {
        echo "Hello World";
    }

}
