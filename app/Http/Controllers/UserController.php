<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(){
        return view('perfil');
    }
    // public function edit($id)
    // {
    //     if(Auth::check()){
    //         $usuario = Auth::user()->id;
    //         return view('perfil',$usuario);
    //     }
    //     return redirect('/');
    // }
}
