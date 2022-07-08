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
        return view('create');
    }

    public function store(Request $request){
        User::create(['name' => $request->name, 'phone' => $request->phone]);
        return view('index', ['users' => User::all(), 'hasNewUser' => true]);
    }

    public function destroy($id){
        User::destroy($id);
        return view('index', ['users' => User::all(), 'userDestroyed' => true]);
    }

    public function show(User $userToShow){
//        dd($userToShow);
        return view('show', ['userToShow' => $userToShow]);
    }

    public function edit(User $userToEdit){
//        dd($userToEdit);
        return view('edit', ['userToEdit' => $userToEdit]);
    }

    public function update(Request $request, User $userToEdit){
        $userToEdit->update($request->all());
        return view('index', ['users' => User::all(), 'userEdited' => true]);
    }
}
