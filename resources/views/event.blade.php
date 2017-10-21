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


    <script type="text/javascript" src="http://localhost/WalkOut1/resources/assets/myjs/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/WalkOut1/resources/assets/myjs/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://localhost/WalkOut1/resources/assets/myjs/scripts.js"></script>

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
                    <form class="navbar-form navbar-right" >
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @if (Auth::check())
                                    <button type="submit" action = "home" class="btn btn-default" style = "width:80px; background-color:#e68a57; border:0" >
                                        Домой
                                    </button>
                                @else
                                    <button type="submit" action = "login" class="btn btn-default" style = "width:80px; background-color:#e68a57; border:0" >
                                        Вход
                                    </button>
                                    <button type="submit" action = "register" class="btn btn-default" style = "width:100px; background-color:#e68a57; border:0">
                                        Регистрация
                                    </button>
                                @endif
                            </div>
                        @endif
                    </form>
                </div>

            </nav>

            <div class="carousel slide" id="carousel-87706">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel-87706">
                    </li>
                    <li data-slide-to="1" data-target="#carousel-87706">
                    </li>
                    <li data-slide-to="2" data-target="#carousel-87706">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="carousel-image" alt="Carousel First" src="{!! $images[0]->LINK !!}" />
                        <div class="carousel-caption">
                            <h4>
                                «Artbat Fest 8»
                            </h4>
                            <p>
                                Фестиваль современного искусства
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="carousel-image" alt="Carousel Second" src="{!! $images[1]->LINK !!}" />
                        <div class="carousel-caption">
                            <h4>
                                «Artbat Fest 8»
                            </h4>
                            <p>
                                Фестиваль современного искусства
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="carousel-image" alt="Carousel Third" src="{!! $images[2]->LINK !!}" />
                        <div class="carousel-caption">
                            <h4>
                                «Artbat Fest 8»
                            </h4>
                            <p>
                                Фестиваль современного искусства
                            </p>
                        </div>
                    </div>
                </div> <a class="left carousel-control" href="#carousel-87706" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-87706" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div  class="extra-col">
                        <h3>Похожие события</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <img alt="Similar events" src="{!! $images[3]->LINK !!}" width=100% />
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
                        <div class="row">
                            <div class="col-md-12">
                                <img alt="Similar events" src="{!! $images[4]->LINK !!}" width=100% />
                                <dl>
                                    <dt>
                                        <h4>Woman Land Fest 2017</h4>
                                    </dt>
                                    <dd>
                                        Woman Land Fest – это большой городской праздник, объединяющий на одной площадке мастеров, тренеров, коучей, психологов и организаций, которые вносят значимый вклад в разностороннее развитие женщин.
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{!! $images[5]->LINK !!}" width = 100% />
                    <div>
                        <h3>
                            {!! nl2br(e($events[0]->HEADER)) !!}
                        </h3>
                    </div>
                    <br>
                    <div>
                        {!! nl2br(e($events[0]->TEXT)) !!}
                    </div>

                </div>
                <div class="col-md-3">
                    <div  class="extra-col">
                        <h3>Коментарии</h3>
                        <div class="media">
                            <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="{!! $images[7]->LINK !!}" class="media-object" /></a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Алия
                                </h4>Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                <div class="media">
                                    <a href="#" class="pull-left"><img alt="Bootstrap Media Another Preview" src="{!! $images[7]->LINK !!}" class="media-object" /></a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            Зарина
                                        </h4> Cras sit amet nibh libero, in gravida nulla.
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left"><img alt="Bootstrap Media Another Preview" src="{!! $images[6]->LINK !!}" class="media-object" /></a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            Данияр
                                        </h4> Cras sit amet nibh libero, in gravida nulla.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="{!! $images[6]->LINK !!}" class="media-object" /></a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Дамир
                                </h4>Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                <div class="media">
                                    <a href="#" class="pull-left"><img alt="Bootstrap Media Another Preview" src="{!! $images[6]->LINK !!}" class="media-object" /></a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            Олег
                                        </h4> Cras sit amet nibh libero, in gravida nulla.
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left"><img alt="Bootstrap Media Another Preview" src="{!! $images[6]->LINK !!}" class="media-object" /></a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            Батыржан
                                        </h4> Cras sit amet nibh libero, in gravida nulla.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form role="form">
                            <div class="form-group">

                                <label for="exampleInputEmail1">
                                    Оставьте Свой Коментарий
                                </label>
                                <input type="text" class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-default">
                                Отправить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" align="center">
                    <h3>Место проведения события</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1222.0874068845724!2d76.94574853839022!3d43.23821494678433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38317bedeaf785bc!2z0JDQu9C80LDQu9GL!5e0!3m2!1sru!2s!4v1506158838672" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <footer class="footer-distributed">
                <div class="footer-left">
                    <img alt="WalkOut" src="http://localhost/WalkOut1/resources/assets/images/WalkOut.jpg" style="height:70px; border:20px"/>
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

<!--
/bootstrap.min.js
-->