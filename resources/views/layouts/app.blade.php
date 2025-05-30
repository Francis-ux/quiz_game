<!DOCTYPE html>
<html>

    <head>
        <title>Quiz Game</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('play') }}">QuizGame</a>
                @auth
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                @endauth
            </div>
        </nav>
        <div class="container mt-4">
            @yield('content')
        </div>
    </body>

</html>
