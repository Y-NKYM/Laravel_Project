<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all()->except(Auth::id());
        $user = Auth::user();
        return view('user.index', compact('users', 'user'));
    }
    
    public function show($id){
        $user = User::find($id);
        return view('user.show', compact('user'));
    }
    
    public function edit($id){
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }
    
    public function update(Request $request, $id){
        $image = $request->file('profile_image');
        if($request->hasFile('profile_image')){
            //storage < app < public内に画像を保存
            //$pathにはパス："public/画像ファイル名"が入っている。
            $path = \Storage::put('/public', $image);
            //画像ファイル名のみ保存したいので、explode()で名前のみに変換している。
            $path = explode('/', $path);
        } else {
            $path = null;
        }
        
        $request-> validate([
            'name' => 'required|max:20',
        ]);
        
        $user = User::find($id);
        $user->name = $request->input(["name"]);
        $user->introduction = $request->input(["introduction"]);
        if($path){
            $user->profile_image = $path[1];
        }
        $user->update();
        
        return redirect()->route('user.show', $user->id);
    }
}
