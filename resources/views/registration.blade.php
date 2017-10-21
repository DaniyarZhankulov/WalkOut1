<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WalkOut</title>

    <link rel="stylesheet" type="text/css" href="http://localhost/WalkOut1/resources/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/WalkOut1/resources/assets/css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" type="text/css" href="http://localhost/WalkOut1/resources/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/WalkOut1/resources/assets/css/registr.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img alt="WalkOut" src="http://localhost/WalkOut1/resources/assets/images/WalkOut.jpg" height=100% />
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#">Кино</a>
                            </li>
                            <li>
                                <a href="#">Театры</a>
                            </li>
                            <li>
                                <a href="#">Музеи</a>
                            </li>
                            <li>
                                <a href="#">Парки</a>
                            </li>
                            <li>
                                <a href="#">Концерты</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Заведения<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Кафе</a>
                                    </li>
                                    <li>
                                        <a href="#">Рестораны</a>
                                    </li>
                                    <li>
                                        <a href="#">Торговые центры</a>
                                    </li>
                                    <li>
                                        <a href="#">Квест-заведения</a>
                                    </li>
                                    <li>
                                        <a href="#">Батутные центры</a>
                                    </li>
                                    <li>
                                        <a href="#">Пейнт Бол площадки</a>
                                    </li>
                                    <li>
                                        <a href="#">Больше...</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    <form class="navbar-form navbar-right" role="search" >
                             <button type="submit" class="btn btn-default" style = "width:80px; background-color:#e68a57; border:0" >
                                Sign In
                            </button>
                            <button type="submit" class="btn btn-default" style = "width:100px; background-color:#e68a57; border:0">
                                Sign Up
                            </button>

                        </form>
                    </div>
                </nav>

                <form action="/action_page.php">
                    <div class="container">

                        <label><b>Username</b>
                        </label>
                        <br>
                        <input type="text" placeholder="Enter Your Full Name" name="name" required>
                        <br>

                        <label><b>Email</b>
                        </label>
                        <br>
                        <input type="text" placeholder="Enter Email" name="email" required>
                        <br>

                        <label><b>Password</b>
                        </label>
                        <br>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <br>

                        <label><b>Repeat Password</b>
                        </label>
                        <br>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                        <br>
                        <input type="checkbox" checked="checked">Remember me
                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                        <div class="clearfix">
                            <button type="submit" class="signupbtn">Sign Up</button>
                        </div>
                    </div>
                </form>


                <footer class="footer-distributed">
                    <div class="footer-left">
                        <img alt="WalkOut" src="http://localhost/WalkOut1/resources/assets/images/WalkOut.jpg" style="height:70px; border:20px" />
                        </a>
                        <p class="footer-links">
                            <a href="#">О нас</a>
                            ·
                            <a href="#">Реклама</a>
                            ·
                            <a href="#">Контакты</a>
                            ·
                            <a href="#">Жалобы и предложения</a>
                        </p>

                        <p class="footer-company-name">WalkOut &copy; 2017</p>
                    </div>

                    <div class="footer-center">

                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p><span>Проспект Абая 86/2</span> город Алматы</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+7 (727) 727 72 72</p>
                            <p>+7 (700) 700 70 70</p>
                        </div>

                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>shodim@s-almaty.kz</p>
                        </div>

                    </div>

                    <div class="footer-right">

                        <p class="footer-company-about">
                            <span>О нашей организации</span>
                            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                        </p>

                        <div class="footer-icons">

                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>

                        </div>
                        <h3 style="margin-top:20px">Walk<span>Out</span></h3>
                    </div>
                </footer>


            </div>
        </div>
    </div>
</body>

</html>
