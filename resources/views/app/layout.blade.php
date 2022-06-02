<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</body>
    <title>Test App</title>
</head>
<body>
    <nav class='navbar navbar-dark navbar-expand-md bg-dark'>
        <div class='container'>
            <a class='navbar-brand'>Brand</a>
            <button class='navbar-toggler' data-bs-toggle='collapse' data-bs-target='#navcol-1'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div id='navcol-1' class='collapse navbar-collapse'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link' href={{route('home')}}>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='{{route('posts')}}'>Posts</a>
                    </li>
                    @if (auth()->user())
                        <li class='nav-item'>
                            <a class='nav-link'>{{auth()->user()->name}}</a>
                            <form action='{{route('logout')}}' method='post'>
                                @csrf
                                <button class='btn btn-danger' type='submit'>Logout</button>
                            </form>
                        </li>
                    @else
                        <li class='nav-item'>
                            <a class='nav-link' href={{route('login')}}>Login</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='{{route('register')}}'>Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class='container'>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

    @yield('scripts')
</html>
