<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="{{ asset("assets/app.css") }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            @auth
                <a href="{{ route('logout') }}">Logout</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
            @endauth
        </header>
        <main>
            {{$slot}}
        </main>
    </div>
</body>
</html>