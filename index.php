<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LoginPage</title>
        <link rel="stylesheet" href="./login_style.css">
        <link rel="icon" href="img/logo/logo45.png" type="image/png">
    </head>
    <body>
        <header>
            <div class="header">
                <div class="logom">
                    <img src="images/Logo_Main.png" class="logo_main"> 
                </div>
                <h1>Sound Scape</h1>
                <h6>..Ultimate Music Store</h6>
            </div>
        </header>
        
        
        
        <form action="login_action.php" method="POST">
            <div class="login-box">
                <h1>Login</h1>
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Username" name="username" value="" required>
                </div>
                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password" name="password" value="" required>
                </div>
                <input class="btn" type="submit" name="" value="Sign In">
                <p>Don't have an account?<a href="register.php" style="font-size: 20px;color : #bb55ee;"> <strong> Register</strong></a></p>
            </div>
        </form>
    </body>
</html>