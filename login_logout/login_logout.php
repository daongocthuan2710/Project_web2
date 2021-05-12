<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_dn.css" type="text/css">
    <link rel="stylesheet" href="../icon/font-awesome/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <title>Đăng Nhập</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login process.php" method="POST" class="sign-in-form" >
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fa fa-user"></i>
                        <input type="text" id="user" name="username" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-lock"></i>
                        <input type="password" id="pass" name="password" placeholder="Password">
                    </div>
                    <input type="submit" id="btn" name="login" class="btn solid" value="login" default>
                    <p class="social-text">Or Sing in with social platforms</p>
                    <div class="socail-media">
                        <a href="#" class="socail-icon">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                        <a href="#" class="socail-icon">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="socail-icon">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="#" class="socail-icon">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </form>
            <!-- </div>
            <div class="signup-signup"> -->
                <form action="#" class="sign-up-form" >
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fa fa-user"></i>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-envelope"></i>
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <input type="submit" class="btn solid" value="Login">
                    <p class="social-text">Or Sing Up with social platforms</p>
                    <div class="socail-media">
                        <a href="#" class="socail-icon">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                        <a href="#" class="socail-icon">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="socail-icon">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="#" class="socail-icon">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here?</h3>
                    <p>
                        Loren ipsum dolor sit anet consectetur, 
                        adipiscing elit. 
                        Ducimus ab ipsam deserunt vero
                    </p>
                    <button class="btn transparent"
                     id="sign-up-button">Sign Up</button>
                </div>
                <img src="img/log.svg" alt="" class="image"/>
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>On of us</h3>
                    <p>
                        Loren ipsum dolor sit anet consectetur, 
                        adipiscing elit. 
                        Ducimus ab ipsam deserunt vero
                    </p>
                    <button class="btn transparent"
                     id="sign-in-button">Sign In</button>
                </div>
                <img src="img/register.svg" alt="" class="image"/>
            </div>
        </div>
    </div>
    <script src = "app_dn.js"></script>
</body>
</html>