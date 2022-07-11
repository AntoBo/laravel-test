<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CREATE USER</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="container">
            <h1>Add user</h1>
            <form method="post"
                  action="{{ route('store') }}"
                  class="add-user-form">
                @csrf
                <label>
                    <p>Name</p>
                    <input type="text" name="name"/>
                </label>
                <label>
                    <p>Phone</p>
                    <input type="text" name="phone"/>
                </label>
                <button type="submit">Add</button>
            </form>
        </div>
    </body>
</html>
