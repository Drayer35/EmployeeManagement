<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Righteous&display=swap" rel="stylesheet">
</head>
<body>
    <main class="background">
        <section class="section-form">
            <div class="content-form" id="login">
                <form class="form" method="post" name="register-form" id="register-form">
                    <h2 class="title-login">Login</h2>
                    <div class="inputs"><input type="text" id="username" name='username' placeholder="Username" autofocus required  autocomplete="off"></div>
                    <div class="inputs"><input type="password" id="pass" name='pass' placeholder="Password" required  autocomplete="off"></div>
                    <div class="option">
                        <input class="btn-submit" type="submit" value="Sign in" name="register-employee" id="register-btn">
                    </div>   
                </form>    
            </div>
        </section>
    </main>
</body>
</html>