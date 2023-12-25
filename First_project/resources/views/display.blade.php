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
    <div style="border :3px solid black">
        <h2>create a new post</h2>
        <form action="\create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="title">
            <textarea name="body" placeholder="body content"></textarea>
            <button> save the </button>

        </form>
    </div>
        
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
    <div style="border :3px solid black">
        <h2> login</h2>
        
        <form action="/login" method="POST">
        @csrf 
        <input type="text" placeholder="loginName" name="loginname">
        
        <input type="password" placeholder="loginPassword" name="loginpassword">
        <button>login</button>
        
        
        </form>
        <h1>hello</h1>
        </div>

    @endauth




    
</body>
</html>