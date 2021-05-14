<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="../icon/font-awesome/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

    <title>BOOKSTORE</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form  class="sign-in-form" id="sign-in-form"> 
                    <h2 class="title">Đăng Nhập</h2>
                    <div class="input-field" id="nameL">
                        <i class="fa fa-user"></i>
                        <input type="text"  id = "nameLogin"  placeholder="Tài khoản">
                    </div>
                    <div class="input-field" id="passL">
                        <i class="fa fa-lock"></i>
                        <input type="password"  id = "passLogin"   placeholder="Mật khẩu">
                    </div>
                    <button  type="submit" class="btn solid" id= "login" >Login</button>
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
                <form action="process.php" method="POST" class="sign-up-form" id="sign-up-form">
                    <h2 class="title">Đăng Ký</h2>

                    <div class="input-field" id="usernameS">
                        <i class="fa fa-user"></i>
                        <input type="text" id = "username"  placeholder="Họ và tên">
                    </div>

                   
                    <div class="input-field" id="nameS">
                        <i class="fa fa-user"></i>
                        <input type="text"  id ="userSignup" name="name" placeholder="Tài khoản">
                    </div>
                    
                    <div class="input-field" id="phone">
                        <i class="fa fa-phone"></i>
                        <input type="text" id = "phoneInput"  placeholder="Số điện thoại">
                    </div>


                    <div class="input-field" id="email">
                        <i class="fa fa-envelope"></i>
                        <input type="text" id = "emailInput"  placeholder="email">
                    </div>



                    <div class="input-field" id="pass">
                        <i class="fa fa-lock"></i>
                        <input type="password" id = "passSignup" name="password" placeholder="Mật khẩu">
                    </div>
                    <div class="input-field" id="re_pass">
                        <i class="fa fa-lock"></i>
                        <input type="password" id = "re_password"placeholder="Nhập lại mật khẩu">
                    </div>
                    <button type="submit" class="btn solid" id="DK_ThanhCong">SignUp</button>
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
                    <h3>For You</h3>
                    <p id="contentLeft">
                        Người đọc quá nhiều và dùng tới bộ óc quá ít sẽ rơi vào thói quen suy nghĩ lười biếng.<br> – Albert Einstein –
                    </p>
                    <button class="btn transparent"
                     id="sign-up-button">Sign Up</button>
                </div>
                <img src="img/log.svg" alt="" class="image"/>
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>For Us</h3>
                    <p id="contentRight">
                        Một người không đọc sách chẳng hơn gì kẻ không biết đọc. <br>– Mark Twain –
                    </p>
                    <button class="btn transparent"
                     id="sign-in-button">Sign In</button>
                </div>
                <img src="img/register.svg" alt="" class="image"/>
            </div>
        </div>
    </div>
    <div id="customalert"></div>
    <!-- <script src = "app.js"></script> -->
    <script src = "js.js"></script>
</body>
</html>