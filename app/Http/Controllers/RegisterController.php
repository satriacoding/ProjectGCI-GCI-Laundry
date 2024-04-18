<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            'title' => 'register'
        ]);
    }
    public function store(Request $request){
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]); 

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

       Session()->flash('success', 'Registration successfull! Please login');
        return redirect('/login');
    }
}
