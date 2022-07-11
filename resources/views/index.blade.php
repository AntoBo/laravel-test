{{--@extends('layouts.app')--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>USERS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">

        <div class="container">

            <a class="btn link" href="/user/create/">Create new user</a>

            <h1>Users</h1>
            @isset(request()->hasNewUser)
            <p class="user-action">New user added</p>
            @endisset

            @isset(request()->userDestroyed)
                <p class="user-action">User destroyed</p>
            @endisset

            @isset(request()->userEdited)
                <p class="user-action">User edited</p>
            @endisset
            <ol>
                @foreach($users as $user)
                    <li>
                        <p>
                            Name: {{$user->name}}, Phone: {{$user->phone}}
                        </p>

                        <a href="{{ route('show', ['user' => $user]) }}" class="btn">Show</a>
                        <a href="{{ route('edit', ['user' => $user]) }}" class="btn">Edit</a>

                        <form method="post" action="{{ route('destroy', ['id' => $user->id]) }}" class="remove-user-form">
                            @method('delete')
                            @csrf
                            <button class="btn" type="submit" value="delete">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ol>
{{--            @section('content')--}}

{{--                <show-user-component></show-user-component>--}}
{{--            @endsection--}}

{{--            @yield('content')--}}

        </div>
    </body>
</html>
