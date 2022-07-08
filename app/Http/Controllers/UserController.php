<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('welcome', ['users' => User::all()]);
    }
    public function createUser(Request $request){

        $newUser = new User;
        $newUser->name=$request->name;
        $newUser->phone=$request->phone;

        $newUser->save();

        return view('user_added');
    }

    public function deleteUser($id){

        User::destroy($id);

        return view('user_removed');
    }
}
