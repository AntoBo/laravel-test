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
            <h1>Edit user</h1>
            <form method="post"
                  action="{{ route('update', ['user' => $user]) }}"
                  class="add-user-form">
                @csrf
                @method('put')
                <label>
                    Name
                    <input type="text" name="name" value="{{$user->name}}"/>
                </label>
                <label>
                    Phone
                    <input type="text" name="phone" value="{{$user->phone}}"/>
                </label>
                <button type="submit">Save</button>
            </form>
        </div>
    </body>
</html>
