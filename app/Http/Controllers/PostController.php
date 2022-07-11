<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
//        $user = User::find($request->id);
////        dd($user);
////        $post = Post::create(request()->all());
//        $post = new Post(['title' => $request->title, 'body' => $request->body]);
////        dd($post);
//
//        $user->posts()->save($post);
//
////        return  ['user' => $user, 'hasNewPost' => true];
//        return redirect()->route('show', ['user' => $user, 'hasNewPost' => true]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
    public function store(Request $request, User $user)
    {

        $validated = $request->validate([
            'title' => 'required|unique:posts|max:5',
            'body' => 'required',
        ]);

        $user->posts()->create($request->all());
        return $user->posts;

//        dd($request->all());

//        $user = User::find($request->id);
//        $post = new Post(['title' => $request->title, 'body' => $request->body]);
//        $post = Post::create($request->all());

//        return redirect()->route('show', ['user' => $user, 'hasNewPost' => true]);

//        return  ['user' => $user, 'hasNewPost' => true];
//        $post = Post::create(request()->all());
//        dd($request->user_id);
//        $post = Post::create(request()->all());
////        $post = new Post(['title' => $request->title, 'body' => $request->body]);
//
//        dd($post);
//        $user->posts()->save($post);
//
//        return redirect()->route('user.show', ['user' => $user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
