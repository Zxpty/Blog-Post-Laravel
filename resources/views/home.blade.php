<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
</head>

<body>
    @auth
    <p>Felicitades has iniciado sesion</p>
    <form action="/logout" method="POST">
    @csrf
    <button>Log out</button>
    </form>

    <div>
        <h2>Create a new post</h2>
        <form action="/create-post" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Please enter a post title">
        <textarea name="body" placeholder="body content...."></textarea>
        <button>Create Post</button>
        </form>
    </div>


    @else
    <div >
        <h3>Register</h3>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>
    <div >
        <h3>Login</h3>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Log in</button>
        </form>
    </div>
    @endauth
</body>

</html>