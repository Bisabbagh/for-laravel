<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="border :3px solid black">
        <h2> login</h2>
        
        <form action="/login" method="POST">
        @csrf 
        <input type="text" placeholder="loginName" name="loginname">
        
        <input type="password" placeholder="loginPassword" name="loginpassword">
        <button>login</button>
        
        
        </form>
        </div>
</body>
</html>