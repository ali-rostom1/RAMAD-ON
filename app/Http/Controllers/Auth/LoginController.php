<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }
    public function store(LoginRequest $request)
    {
        if(Auth::attempt($request->validated())){
            return redirect()->intended("/");
        }
        return back()
        ->withErrors([
            'email' => 'Invalid credentials',
        ])
        ->withInput($request->only('email'));
    }
}
