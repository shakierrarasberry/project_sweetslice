<div>
   <h1>login</h1>
   <form action="{{ url('proseslogin') }}" method="post">
    @csrf
    @method("post")
    username : <input type="text" name = "username">
    password : <input type="password" name = "password">
    <input type="submit" value="login">
   </form>
</div>
