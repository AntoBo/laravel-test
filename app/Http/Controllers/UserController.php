<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('index', ['users' => User::all()]);
    }

    public function create(){
        return view('user.create');
    }

    public function show(User $user){
//        dd($user);
        return view('user.show', ['user' => $user]);
    }

    public function edit(User $user){
//        dd($user);
        return view('user.edit', ['user' => $user]);
    }

    public function store(Request $request){
        dd($request);
        User::create(['name' => $request->name, 'phone' => $request->phone]);
        return redirect()->route('index', ['users' => User::all(), 'hasNewUser' => true]);
    }

    public function destroy($id){
        User::destroy($id);
        return redirect()->route('index', ['users' => User::all(), 'userDestroyed' => true]);
//        return view('index', ['users' => User::all(), 'userDestroyed' => true]);
    }

    public function update(Request $request, User $user){
        $user->update($request->all());
        return redirect()->route('index', ['users' => User::all(), 'userEdited' => true]);
    }
}
