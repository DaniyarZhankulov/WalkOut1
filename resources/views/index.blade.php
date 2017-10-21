<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WalkOut</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

      <link rel="stylesheet" type="text/css" href="http://localhost/WalkOut1/resources/assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="http://localhost/WalkOut1/resources/assets/css/footer-distributed-with-address-and-phones.css">
      <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Cookie">
      <link rel="stylesheet" type="text/css" href="http://localhost/WalkOut1/resources/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="http://localhost/WalkOut1/resources/assets/css/index.css">
  </head>
  <body>
 <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default"  role="navigation">
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                             <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button> <a class="navbar-brand" href="#"><img alt="WalkOut" src="http://localhost/WalkOut1/resources/assets/images/WalkOut.jpg" height = 100% /></a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Концерты<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>

                                </ul>

                            </li>
                            <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Заведения<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
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

                                </ul>

                            </li>

                            <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Бары<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">6</a>
                                    </li>
                                </ul>
                            </li>



                            <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Рестораны<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">6</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Парки<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">6</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Детям<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">6</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <form class="navbar-form navbar-right" role="search" >
                    <button type="submit" class="btn btn-default" style = "width:80px; background-color:#e68a57; border:0" >
                        <a href="sign in.html">Sign In</a>

                        </button>
                    <button type="submit" class="btn btn-default" style = "width:100px; background-color:#e68a57; border:0">
                        <a href="registration.html">
                            Sign Up</a>
                                </button>

                        </form>
                    </div>
                </nav>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                @endif
        <!--menu1-->
                    <div>

                      <ul class="ca-menu">
                    <li style="margin: 5px 10px 0 0;">
                     <span class="ca-icon"></span>
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/ДП.jpg" width=100% height=100% />
                            <span class="ca-icon">Dostyk Plaza</span>

                        </a>
                    </li>
                    <li style="margin: 5px 10px 0 0">
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/ЕМ.jpg" width=100% height=100% />
                            <span class="ca-icon">Esentai Mall</span>
                        </a>
                    </li>
                    <li style="margin: 5px 10px 0 0;">
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/uj.jpg" width=100% height=100%/>
                            <span class="ca-icon" id="heart">Mega Park</span>
                        </a>
                    </li>
                    <li style="margin: 5px 10px 0 0;">
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/ЕМ.jpg" width=100% height=100% />
                            <span class="ca-icon">ADK</span>
                        </a>
                    </li>
                </ul>
                </div>



    <!--menu2-->

                <div class="Bar">
              <ul class="ca-menu">
                    <li style="margin: 5px 0 0 0;">
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/hard.jpg" width=100% height=100%/>
                            <span class="ca-icon">Hard Rock</span>

                            <div class="ca-content">
                               <!-- <h2 class="ca-main">Hard Rock</h2>  -->

                            </div>
                        </a>
                    </li>
                    <li style="margin: 5px 0 0 10px">
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/selfi.jpg" width=100% height=100%/>
                            <span class="ca-icon">Selfie</span>
                            <div class="ca-content">
                                <!--<h2 class="ca-main">Selfi</h2>-->

                            </div>
                        </a>
                    </li>
                    <li style="margin: 5px 0 0 10px">
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/tsb.jpg" width=100% height=100%/>
                            <span class="ca-icon" id="heart">TSB</span>
                            <div class="ca-content">
                              <!--  <h2 class="ca-main">TSB</h2>-->

                            </div>
                        </a>
                    </li>
                    <li style="margin: 5px 0 0 10px">
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/sky.jpg" width=100% height=100%/>
                            <span class="ca-icon">Sky</span>
                            <div class="ca-content">
                              <!--  <h2 class="ca-main">Sky bar</h2> -->

                            </div>
                        </a>
                    </li>

                </ul>
                            </div>


    <!--menu3-->
                            <div class="Parki">

                                  <ul class="ca-menu">
                    <li style="margin: 5px 0 0 0;">
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/sdsd.jpg" width=100% height=100%/>
                        <span class="ca-icon">Парк Первого Президента </span>
                            <div class="ca-content">


                            </div>
                        </a>
                    </li>
                    <li style="margin: 5px 0 0 10px">
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/1.jpg" width=100% height=100%/>
                        <span class="ca-icon">Парк Горького</span>
                            <div class="ca-content">


                            </div>
                        </a>
                    </li>
                    <li style="margin: 5px 0 0 10px">
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/2.jpg" width=100% height=100%/>
                        <span class="ca-icon" id="heart">Парк 28 Панфиловцев</span>
                            <div class="ca-content">


                            </div>
                        </a>
                    </li>
                    <li style="margin: 5px 0 0 10px">
                        <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/3.jpg" width=100% height=100%/>
                            <span class="ca-icon">Family Парк</span>
                            <div class="ca-content">


                            </div>
                        </a>
                    </li>

                </ul>
                            </div>


             <!-- menu4-->

                <div class="Cafe">
                    <ul class="ca-menu">
                        <li style="margin: 5px 0 0 0;">
                            <a href="#">
                                <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/china.jpg" width=100% height=100%/>
                                <span class="ca-icon">China Gold </span>
                                <div class="ca-content">


                                </div>
                            </a>
                        </li>
                        <li style="margin: 5px 0 0 10px">
                            <a href="#">
                                <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/del.jpg" width=100% height=100%/>
                                <span class="ca-icon">Del'PaPa'</span>
                                <div class="ca-content">


                                </div>
                            </a>
                        </li>
                        <li style="margin: 5px 0 0 10px">
                            <a href="#">
                                <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/turandot.jpg" width=100% height=100%/>
                                <span class="ca-icon" id="heart">Turandot</span>
                                <div class="ca-content">


                                </div>
                            </a>
                        </li>
                        <li style="margin: 5px 0 0 10px">
                            <a href="#">
                                <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/ciao.jpg" width=100% height=100%/>
                                <span class="ca-icon">Ciao Pizza</span>
                                <div class="ca-content">


                                </div>
                            </a>
                        </li>

                    </ul>
                </div>


        <!-- menu5-->
        <div class="Priroda">
            <ul class="ca-menu">
                <li style="margin: 5px 0 0 0;">
                    <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/medeo.jpg" width=100% height=100%/>
                        <span class="ca-icon">Medeo</span>
                        <div class="ca-content">


                        </div>
                    </a>
                </li>
                <li style="margin: 5px 0 0 10px">
                    <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/bao.jpg" width=100% height=100%/>
                        <span class="ca-icon">BAO</span>
                        <div class="ca-content">


                        </div>
                    </a>
                </li>
                <li style="margin: 5px 0 0 10px">
                    <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/kok.jpg" width=100% height=100%/>
                        <span class="ca-icon" id="heart">Kok Tobe</span>
                        <div class="ca-content">


                        </div>
                    </a>
                </li>
                <li style="margin: 5px 0 0 10px">
                    <a href="#">
                        <img alt="Bootstrap Image Preview" src="http://localhost/WalkOut1/resources/assets/images/shym.jpg" width=100% height=100%/>
                        <span class="ca-icon">Shymbulak</span>
                        <div class="ca-content">


                        </div>
                    </a>
                </li>

            </ul>
        </div>




    <!--
                <div class="row">
                    <div class="col-md-3">
                        <div  class="extra-col">
                            <h3>Ближайшие события</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <img alt="Bootstrap Image Preview" src="images/d1.jpg" width=100% />
                                    <dl>
                                        <dt>
                                            <h4>Кулинарный Чемпионат «Шеф Battle BBQ — 2017»</h4>
                                        </dt>
                                        <dd>
                                            15-го октября на территории ТРЦ «Mega Alma-Ata», «Ресторанная критика Казахстана» и «Ассоциация шеф-поваров Казахстана» проводят третий кулинарный поединок- «ШЕФ BATTLE 2017”. Лучшие шеф-повара и рестораны со всех регионов Казахстана продемонстрируют широкой публике настоящее кулинарное искусство
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                        </div>
                    </div>


        <!--
                    <div class="row">
                    <div class="col-md-3">
                        <div  class="extra-col">
                            <h3>Похожие события</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <img alt="Bootstrap Image Preview" src="images/yoga.jpg" width=100% />
                                    <dl>
                                        <dt>
                                            <h4>Йога для начинающих в студии «Йога Ом»</h4>
                                        </dt>
                                        <dd>
                                            Йога для начинающих — это комплексы упражнений, помогающих человеку познакомиться с действием йоги, успокоиться, привести в мысли в порядок, а эмоции — в равновесие.

                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>


                    -->

        <div class="row">
            <!--<div class="col-md-12" align="center">
              <h3>Место проведения события</h3>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1222.0874068845724!2d76.94574853839022!3d43.23821494678433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38317bedeaf785bc!2z0JDQu9C80LDQu9GL!5e0!3m2!1sru!2s!4v1506158838672" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>-->
          </div>*
            <footer class="footer-distributed">
            <div class="footer-left">
                <img alt="WalkOut" src="http://localhost/WalkOut1/resources/assets/images/WalkOut.jpg" style="height:70px; border:20px" /></a>
                <p class="footer-links">
                    <a href="#">О нас</a>
                    ·
                    <a href="#">Реклама</a>
                    ·
                    <a href="#">Контакты</a>
                    ·
                    <a href="#">Жалобы и предложения</a>
                </p>

                <p class="footer-company-name">WolkOut &copy; 2017</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Проспект Абая 86/2</span>  город Алматы</p>
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
