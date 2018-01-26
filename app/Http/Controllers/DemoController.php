<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        return view('home', ['message' => ""]);
    }
    public function login()
    {
        return view('login', ['message' => ""]);
    }
    public function logout()
    {
        session(['user' => null]);
        return view('home', ['message' => "You have been logged out"]);
    }
  
    public function processLogin(Request $request)
    {
        $users = \App\User::where('username',"=", $request['username'])->get();
        if ($users->count() == 0) {
            return view('login', ['message' => "Username/password not found"]);
        } else {
            session(['user' => $users->first()->fullname]);
            return view('content', ['message' => session('user') . ": welcome back!"]);        
        }
    }
    public function content() {
        if (session('user') == null) {
            return view('home', ['message' => ""]);
        } else {
            return view('content', ['message' => ""]);
        }
    }
    public function register() {
        if (session('user') == null) {
            return view('home', ['message' => "Please login first"]);
        } else {
            return view('register', ['message' => ""]);
        }
    }
    public function processRegister(Request $request)
    {
        $users = \App\User::where('username',"=", $request['username'])->get();
        if ($users->count() > 0) {
            return view('register', ['message' => "Username unavailable"]);
        } else {
            $user = new \App\User;
            $user->fullname = $request['fullname'];
            $user->username = $request['username'];
            $user->password = $request['password'];
            $user->save();
            return view('home', ['message' => "New user registered: " . $user->fullname]);        
        }
    }
}
