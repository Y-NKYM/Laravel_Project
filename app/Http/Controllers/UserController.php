<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id){
        $user = User::find($id);
        return view('user.show', compact('user'));
    }
    
    public function edit($id){
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }
    
    public function update(){
        
    }
}
