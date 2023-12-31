<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('about.index')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('item.index')}}">Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('policy.index')}}">Policy</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="{{route('post.index')}}">Posts</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="{{route('main.index')}}">Main</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>
