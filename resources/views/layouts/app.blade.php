<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class = "bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-6">Home</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-6">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="p-6">Posts</a>
            </li>
        </ul>


        <ul class="flex items-center">
            @auth
            <li>
                <a href="" class="p-6">{{ auth()->user()->name}}</a>
            </li>
            <li>
                <form action="{{ route('logout')}}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @endauth
            @guest
            <li>
                <a href="{{ route('login') }}" class="p-6">Login</a>
            </li>
            <li>
                <a href="{{ route('register')  }}" class="p-6">Register</a>
            </li>
            @endguest
            
            
            
        </ul>

    </nav>
   @yield('content') 
</body>
</html>