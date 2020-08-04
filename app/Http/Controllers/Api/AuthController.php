<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    
    public function register(Request $request) {
        echo "Register Endpoint Requested";
    }

    public function login() {
        echo "Login Endpoint Requested";
    }

    public function hello() {
        echo "Hello World";
    }

}
