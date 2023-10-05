<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
</head>
<body>
<div class="ContentForm">
        <h1>Login</h1>
        <form method="POST">
            <label>
                <text>UserName</text>
                <input type="text" width=120> 
            </label>    
            <label>
                <text>Password</text>
                <input type="password" width=120> 
            </label>   
            <div>
                <text>No tiene una cuenta?
                <a href="{{route('register')}}">Registrate Aquí</a>
                </text>  
            </div>
            <button type="Submit">Login</button>
        </form>
    </div>
</body>
</html>
