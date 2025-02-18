<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store(RegisterRequest $request)
    {
        try{
            User::create($request->validated());
            return redirect('/')->with('success', 'Registration successful!');
        }catch(\Illuminate\Validation\ValidationException $e){
            return redirect()->back()->withErrors($e->errors())->withInput();
        }catch(\Exception $e){
            return redirect()->back()->with('error','Registration Failed !');            
        }
    }
}
