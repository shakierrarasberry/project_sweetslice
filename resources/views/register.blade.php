<div>
    <h1>register</h1>
    <form action="{{ url('prosesregister') }}" method="post">
        @csrf
        email : <input type="text" name="email">
        password : <input type="password" name="password">
        <input type="submit" value="daftar">
    </form>
</div>
