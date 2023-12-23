<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <p>Youer logged in</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
        
    </form>
        
@else
<div style="border :3px solid black">
    <h2> Register</h2>
    
    <form action="/register" method="POST">
    @csrf 
    <input type="text" placeholder="Name" name="name">
    <input type="text" placeholder="Email" name="email">
    <input type="password" placeholder="Password" name="password">
    <button>Register</button>
    
    
    </form>
    </div>

    @endauth




    
</body>
</html>