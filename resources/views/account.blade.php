<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    @if (Auth::check())
    <div>
        @auth
            <h1>Hi, {{ Auth::user()->name }}</h1>
            <h6>{{ Auth::user()->email }}</h6>
        @endauth

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
    @else
        <h1>Anda belum login, ayo login dulu</h1>
        <p>Ke halaman login
            <a href="/auth">klik di sini untuk ke halaman login</a>
        </p>
    @endif
    
    @if(Auth::user() && Auth::user()->role == "admin")
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown link
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="admin">Ke halaman admin</a></li>
            </ul>
        </li>
    @endif
</body>
</html>
