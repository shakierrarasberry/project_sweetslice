<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>hai</p>
    @auth
        <h1> hi, {{Auth::user()->name}}</h1>
        <h6>{{Auth::user()->email}}</h6>

        @endauth

        <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

</div>
</body>
</html>


