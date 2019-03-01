<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>MainPage proto</title>

        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png"/>
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png"/>
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png"/>

        <!-- // css block -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/large.css">

    </head>
    <body>
        <!-- ~~~~~~ HEADER ~~~~~ -->
        <header class="fixed-top b_light">
            <div class="topCollapsedMenu" id="hiddenTopMenu">
                <div id="search" class="collapse" data-parent="#hiddenTopMenu">
                    <div class="container">
                        <div class="row profile">
                            <!-- pt-4 pb-2-->
                            <h3 class="w-100 text-center"> Введите наименование интересующего вас товара или фирмы в строку поиска.</h3>
                            <!--mt-3 mb-2-->
                            <div class="col-6 offset-3 input-group">
                                <input type="text" class="form-control border-warning" placeholder="Строка поиска" aria-label="строка поиска" >
                                <div class="input-group-append">
                                    <button class="btn border-warning" type="button">OКЕЙ ГУГАЛ ...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="closet" class="collapse" data-parent="#hiddenTopMenu">
                    <div class="container">
                        <div class="row profile">
                            <strong class=" w-100 text-center"> Наименование... </strong>
                            <div class="col-2"><strong>Мужчины</strong>
                                <ul>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                </ul>
                            </div>
                            <div class="col-2"><strong>Женщины</strong>
                                <ul>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                </ul>
                            </div>
                            <div class="col-2"><strong>Бренды</strong>
                                <ul>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                </ul>
                            </div>
                            <div class="col-2"><strong>Скидки</strong>
                                <ul>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                </ul>
                            </div>
                            <div class="col-2"><strong>Хуидки</strong>
                                <ul>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                    <li><a>Ccылка</a></li>
                                </ul>
                            </div>
                            <div class="col-12">
                                А места тут просто ебанись хоть на весь экран разворачивай....<br>
                                Меж-строчные интервалы само собой будут больше, на столько на сколько нужно...
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shoes" class="collapse" data-parent="#hiddenTopMenu">
                    <div class="container">
                        <div class="row profile">
                            <h4 class=" w-100 text-center"> Обувка (заполнена только одежка) </h4>
                        </div>
                    </div>
                </div>
                <div id="balls" class="collapse" data-parent="#hiddenTopMenu">
                    <div class="container">
                        <div class="row profile">
                            <h4 class=" w-100 text-center"> Шары (заполнена только одежка) </h4>
                        </div>
                    </div>
                </div>
                <div id="access" class="collapse" data-parent="#hiddenTopMenu">
                    <div class="container">
                        <div class="row profile">
                            <h4 class=" w-100 text-center"> Аксессуары (все еще заполнена только одежка) </h4>
                        </div>
                    </div>
                </div>
                <div id="dscont" class="collapse" data-parent="#hiddenTopMenu">
                    <div class="container">
                        <div class="row profile">
                            <h4 class=" w-100 text-center"> Скидки (заполнена только одежка) </h4>
                        </div>
                    </div>
                </div>
                <div id="phoneCall" class="collapse" data-parent="#hiddenTopMenu">
                    <div class="container">
                        <div class="row profile">
                            <h3 class=" w-100 text-center"> Позвоните нам по бесплатному номеру 8-80000-545-45-3-53 
                                <a class="btn btn-sm border-warning"> Набрать чичас!</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div id="userProfileTop" class="collapse" data-parent="#hiddenTopMenu">
                    <div class="container">
                        <div class="row profile">
                            <!--pt-4 pb-2-->
                            <div class="col-sm-12 col-md-7">
                                <p>Для оформления заказа ребуется 
                                    <!--mb-1-->
                                    <a class="btn btn-sm border-warning">войти</a> или Вы можете <br>войти через соц.сети: 
                                    <a class="btn btn-sm border-warning">
                                        <i class="fab fa-vk"></i>
                                    </a>
                                    <a class="btn btn-sm border-warning">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </p>
                                <p>Зарегистрировать новый аккаунт 
                                    <!--mb-1--> 
                                    <a class="btn btn-sm border-warning">можно тут</a></p>
                                <p>Позвоните нам по бесплатному номеру 
                                    <!--mb-1--> 
                                    <a class="btn btn-sm border-warning">8-800-555-35-35</a> если возникли вопросы.</p>
                            </div>
                            <!--pt-4 pb-2-->
                            <div class="col-sm-12 col-md-5">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action list-group-item-warning d-flex justify-content-between align-items-center">
                                        <strong>Список ваших покупок:</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="cart-link" href="#" title="Перейти на страницу товара">Тапочка домашняя, удобная</a>

                                        <a class="btn btn-sm border-warning"><i class="fas fa-trash-alt"></i></a>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="btn btn-sm border-warning"><i class="fas fa-check-square"></i> Оформить заказ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="container realMenu d-flex flex-row justify-content-between">

                <nav class="navbar navbar-expand-lg w-75 align-self-start">
                    <button class="navbar-toggler border-dark" type="button" data-toggle="collapse" data-target="#topNavBar"
                            aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse align-items-center" id="topNavBar">
                        <a class="navbar-brand" href="#">
                            <div class="logo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73 71.88" width="40" height="40">
                                <defs><style>.cls-one,.cls-2{fill-rule:evenodd;}.cls-1{fill:#000;}.cls-4{fill:#e76e01;}</style></defs>
                                <g id="layer_h"><g id="slum_h"><g id="dunk_h"><g id="divider_h">
                                <path class="cls-one" d="M0,8V63.86a7.63,7.63,0,0,0,.8,3.22,8.6,8.6,0,0,0,7.34,4.8H64.86a8.33,8.33,0,0,0,5.65-2.46A8.09,8.09,0,0,0,73,63.86V8a8,8,0,0,0-1.54-4.46A8.89,8.89,0,0,0,68.12.79,8.07,8.07,0,0,0,64.86,0H8.14A7.74,7.74,0,0,0,4.88.79,8.43,8.43,0,0,0,0,8Z"/>
                                <path class="cls-1" d="M18.22,22.64a11.22,11.22,0,0,1-.29,2.77,3.88,3.88,0,0,1-1.13,1.91,5.14,5.14,0,0,1-1.75,1,7.49,7.49,0,0,1-2.55.39,5.91,5.91,0,0,1-4.26-1.4,4.12,4.12,0,0,1-1.11-1.82,10,10,0,0,1-.31-2.74h3.46a6.74,6.74,0,0,0,.12,1.42,2.15,2.15,0,0,0,.49,1,2.07,2.07,0,0,0,.63.4,2.49,2.49,0,0,0,1,.16,2.12,2.12,0,0,0,1.67-.6,2.09,2.09,0,0,0,.46-.94,6.63,6.63,0,0,0,.12-1.42,10.68,10.68,0,0,0-.08-1.4,2.36,2.36,0,0,0-.31-.94,2.11,2.11,0,0,0-.63-.64,5.06,5.06,0,0,0-1.05-.51l-2.63-1a6.61,6.61,0,0,1-1.42-.75,3.27,3.27,0,0,1-.94-1A4.75,4.75,0,0,1,7.18,15,11,11,0,0,1,7,12.9a7,7,0,0,1,.45-2.58A4.81,4.81,0,0,1,8.8,8.4a5.45,5.45,0,0,1,1.65-.94,6.16,6.16,0,0,1,2.12-.34,5.62,5.62,0,0,1,4,1.28,4.27,4.27,0,0,1,1.21,2A9.41,9.41,0,0,1,18.07,13H14.61a7.85,7.85,0,0,0-.09-1.28,2,2,0,0,0-.43-1,1.85,1.85,0,0,0-1.54-.63,2.1,2.1,0,0,0-.88.16,1.87,1.87,0,0,0-.6.43,3.08,3.08,0,0,0-.59,2.09,8.21,8.21,0,0,0,.06,1.1,1.86,1.86,0,0,0,.26.76,1.92,1.92,0,0,0,.56.55,4.27,4.27,0,0,0,.94.45l2.59,1a7.21,7.21,0,0,1,1.64.86,3.49,3.49,0,0,1,1,1.16,5.16,5.16,0,0,1,.53,1.64A14.62,14.62,0,0,1,18.22,22.64Z"/>
                                <polygon class="cls-1" points="21.42 28.52 21.42 7.3 25.09 7.3 25.09 25.51 31.23 25.51 31.23 28.52 21.42 28.52"/>
                                <path class="cls-1" d="M40.78,12.42l-2,8.88h4Zm3.64,16.09-1-4.2H38.06l-.92,4.2H33.27L39,7.3h3.58l5.67,21.22Z"/>
                                <polygon class="cls-1" points="62.71 28.52 62.71 15.28 59.52 23.99 57.49 23.99 54.38 15.43 54.38 28.52 50.7 28.52 50.7 7.3 54.01 7.3 58.54 18.44 63.03 7.3 66.38 7.3 66.38 28.52 62.71 28.52"/>
                                <path class="cls-1" d="M18.22,22.64a11.22,11.22,0,0,1-.29,2.77,3.88,3.88,0,0,1-1.13,1.91,5.14,5.14,0,0,1-1.75,1,7.49,7.49,0,0,1-2.55.39,5.91,5.91,0,0,1-4.26-1.4,4.12,4.12,0,0,1-1.11-1.82,10,10,0,0,1-.31-2.74h3.46a6.74,6.74,0,0,0,.12,1.42,2.15,2.15,0,0,0,.49,1,2.07,2.07,0,0,0,.63.4,2.49,2.49,0,0,0,1,.16,2.12,2.12,0,0,0,1.67-.6,2.09,2.09,0,0,0,.46-.94,6.63,6.63,0,0,0,.12-1.42,10.68,10.68,0,0,0-.08-1.4,2.36,2.36,0,0,0-.31-.94,2.11,2.11,0,0,0-.63-.64,5.06,5.06,0,0,0-1.05-.51l-2.63-1a6.61,6.61,0,0,1-1.42-.75,3.27,3.27,0,0,1-.94-1A4.75,4.75,0,0,1,7.18,15,11,11,0,0,1,7,12.9a7,7,0,0,1,.45-2.58A4.81,4.81,0,0,1,8.8,8.4a5.45,5.45,0,0,1,1.65-.94,6.16,6.16,0,0,1,2.12-.34,5.62,5.62,0,0,1,4,1.28,4.27,4.27,0,0,1,1.21,2A9.41,9.41,0,0,1,18.07,13H14.61a7.85,7.85,0,0,0-.09-1.28,2,2,0,0,0-.43-1,1.85,1.85,0,0,0-1.54-.63,2.1,2.1,0,0,0-.88.16,1.87,1.87,0,0,0-.6.43,3.08,3.08,0,0,0-.59,2.09,8.21,8.21,0,0,0,.06,1.1,1.86,1.86,0,0,0,.26.76,1.92,1.92,0,0,0,.56.55,4.27,4.27,0,0,0,.94.45l2.59,1a7.21,7.21,0,0,1,1.64.86,3.49,3.49,0,0,1,1,1.16,5.16,5.16,0,0,1,.53,1.64A14.62,14.62,0,0,1,18.22,22.64Z"/>
                                <polygon class="cls-1" points="21.42 28.52 21.42 7.3 25.09 7.3 25.09 25.51 31.23 25.51 31.23 28.52 21.42 28.52"/>
                                <path class="cls-1" d="M40.78,12.42l-2,8.88h4Zm3.64,16.09-1-4.2H38.06l-.92,4.2H33.27L39,7.3h3.58l5.67,21.22Z"/>
                                <polygon class="cls-1" points="62.71 28.52 62.71 15.28 59.52 23.99 57.49 23.99 54.38 15.43 54.38 28.52 50.7 28.52 50.7 7.3 54.01 7.3 58.54 18.44 63.03 7.3 66.38 7.3 66.38 28.52 62.71 28.52"/>
                                <path class="cls-1" d="M63.41,64.46,59.6,55.73,57.81,59v5.45H54.09V43.25h3.72v10l5.14-10H66.7L62,52l5.48,12.43Zm-15.95,0-5.57-12.6v12.6H38.18V43.25h3.32L47,55.85V43.25h3.72V64.46ZM35,59.25a5.44,5.44,0,0,1-.43,2.2,5.13,5.13,0,0,1-1.2,1.7A6.23,6.23,0,0,1,29,64.7a6.28,6.28,0,0,1-4.41-1.55,5.13,5.13,0,0,1-1.19-1.7,5.44,5.44,0,0,1-.43-2.2v-16h3.72V59.43a2.09,2.09,0,0,0,.68,1.7,2.49,2.49,0,0,0,1.64.57,2.42,2.42,0,0,0,1.63-.57,2.11,2.11,0,0,0,.66-1.7V43.25H35ZM16.12,53.83q0-2.8-.12-4.38a4.41,4.41,0,0,0-.68-2.32,1.91,1.91,0,0,0-.75-.63,2.55,2.55,0,0,0-1.14-.24H11.24v15.2h2.19a2.54,2.54,0,0,0,1.14-.24,1.91,1.91,0,0,0,.75-.63A4.48,4.48,0,0,0,16,58.24Q16.12,56.63,16.12,53.83Zm3.72,0q0,1.85-.05,3.23a20.65,20.65,0,0,1-.22,2.44,7.2,7.2,0,0,1-.51,1.83,4.56,4.56,0,0,1-.95,1.37A6.2,6.2,0,0,1,16.3,64a6.53,6.53,0,0,1-2.77.51h-6V43.25h6a6.53,6.53,0,0,1,2.77.51A6.18,6.18,0,0,1,18.11,45a4.61,4.61,0,0,1,.95,1.36,7,7,0,0,1,.51,1.82,20.66,20.66,0,0,1,.22,2.44Q19.84,52,19.84,53.83Z"/>
                                <path class="cls-1" d="M16.12,53.83q0-2.8-.12-4.38a4.41,4.41,0,0,0-.68-2.32,1.91,1.91,0,0,0-.75-.63,2.55,2.55,0,0,0-1.14-.24H11.24v15.2h2.19a2.54,2.54,0,0,0,1.14-.24,1.91,1.91,0,0,0,.75-.63A4.48,4.48,0,0,0,16,58.24Q16.12,56.63,16.12,53.83Zm3.72,0q0,1.85-.05,3.23a20.65,20.65,0,0,1-.22,2.44,7.2,7.2,0,0,1-.51,1.83,4.56,4.56,0,0,1-.95,1.37A6.2,6.2,0,0,1,16.3,64a6.53,6.53,0,0,1-2.77.51h-6V43.25h6a6.53,6.53,0,0,1,2.77.51A6.18,6.18,0,0,1,18.11,45a4.61,4.61,0,0,1,.95,1.36,7,7,0,0,1,.51,1.82,20.66,20.66,0,0,1,.22,2.44Q19.84,52,19.84,53.83Z"/>
                                <rect class="cls-4" x="6.83" y="34.95" width="59.56" height="2.44"/></g></g></g></g></svg> 
                            </div>
                        </a>

                <!--                                                targetID                    defaultVisible                  targetID
                <a class="collapsed" data-toggle="collapse" data-target="#userProfileTop" aria-expanded="false" aria-controls="userProfileTop" href="#">
                <i class="fa fa-user"></i>
                </a>-->
                        <ul class="navbar-nav mr-auto mt-lg-0">
                            <li class="nav-item mr-1">
                                <a class="btn border-warning collapsed" data-toggle="collapse" data-target="#closet" aria-expanded="false" aria-controls="closet" href="#">
                                    ОДЕЖДА
                                </a>
                            </li>
                            <li class="nav-item mr-1">
                                <a class="btn border-warning collapsed" data-toggle="collapse" data-target="#shoes" aria-expanded="false" aria-controls="shoes" href="#">
                                    ОБУВЬ
                                </a>
                            </li>
                            <li class="nav-item mr-1">
                                <a class="btn border-warning collapsed" data-toggle="collapse" data-target="#balls" aria-expanded="false" aria-controls="balls" href="#">
                                    <i class="fab fa-dribbble"></i> МЯЧИ
                                </a>
                            </li>
                            <li class="nav-item mr-1">
                                <a class="btn border-warning collapsed" data-toggle="collapse" data-target="#access" aria-expanded="false" aria-controls="access" href="#">
                                    <i class="fas fa-universal-access"></i> АКСЕССУАРЫ
                                </a>
                            </li>
                            <li class="nav-item mr-1">
                                <a class="btn border-warning collapsed" data-toggle="collapse" data-target="#dscont" aria-expanded="false" aria-controls="dscont" href="#">
                                    <i class="fas fa-exclamation"></i> СКИДКИ
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="w-25 lastBlock d-flex align-self-start justify-content-end align-items-start mt-1 mt-lg-0">

                    <a class="collapsed btn border-warning t_black mr-1" data-toggle="collapse" data-target="#phoneCall" aria-expanded="false" aria-controls="phoneCall" href="#">
                        <i class="fa fa-phone-volume"></i>
                    </a>
                    <a class="collapsed btn border-warning t_black mr-1" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="search" href="#">
                        <i class="fa fa-search"></i>
                    </a>
                    <a class="collapsed btn border-warning t_black " data-toggle="collapse" data-target="#userProfileTop" aria-expanded="false" aria-controls="userProfileTop" href="#">

                        <i class="fa fa-user mr-2"></i>&nbsp;<i class="fa fa-shopping-cart ml-2">
                        <span class="badge badge-warning in-cart">1</span>
                        </i>
                    </a>
                </div>
            </div>
        <div class="oranges"></div>
        </header>
        <!-- ~~~~~~ END HEADER ~~~~~ -->
        <!-- ~~~~~~ MAIN ~~~~~ -->
        <div id="carousel" class="d-none d-sm-none d-md-none d-lg-block col-lg-12 carousel slide mt-lg-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1" ></li>
                <li data-target="#carousel" data-slide-to="2" ></li>
            </ol>
            <div class="carousel-inner container">
                <div class="carousel-item active" data-interval="10000">
                    <div class="carousel-caption">
                        <h1>ИНДИВИДУАЛЬНАЯ РАБОТА С КАЖДЫМ</h1>
                        <p class="lead">Оригинальные фирменные товары от лучших производителей.</p>
                        <div class="firms w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 227.78 26.36" width="100%" height="36">
                            <defs><style>.cls-1,.cls-2{fill:#111;}.cls-2{fill-rule:evenodd;}</style></defs>
                            <title>brends</title>
                            <g id="Слой_2" data-name="Слой 2">
                            <g id="glavnaya"><g id="header">
                            <g id="black_line_near_header" data-name="black line near header">
                            <g id="brand_slider" data-name="brand slider">
                            <g id="_5" data-name="5">
                            <path id="_1" data-name="1" class="fill-dark" d="M56.29,11,29.16,22.72c-2.92,1.26-7.51,2.71-9.45-.35-1.08-1.7-.42-4.36,1.14-6.8a34.93,34.93,0,0,1,3.56-4.41c-.72,1.16-2.7,5.07,0,7,1,.74,2.85.81,5.09.2Z"/>
                            </g>
                            <g id="_4" data-name="4">
                            <path id="_12" data-name="12" class="fill-dark" d="M88.11,19.34a.77.77,0,0,0,.39.1h0a.77.77,0,0,0,.39-.1.69.69,0,0,0,.29-.29.8.8,0,0,0,0-.79.7.7,0,0,0-.3-.29.8.8,0,0,0-.39-.11h0a.86.86,0,0,0-.39.11.73.73,0,0,0-.3.29.8.8,0,0,0,0,.79A.69.69,0,0,0,88.11,19.34Zm-.18-1a.63.63,0,0,1,.25-.25A.7.7,0,0,1,88.5,18h0a.7.7,0,0,1,.32.09.64.64,0,0,1,.25.25.67.67,0,0,1,0,.66.61.61,0,0,1-.24.24.65.65,0,0,1-.33.09h0a.65.65,0,0,1-.33-.09.61.61,0,0,1-.24-.24.64.64,0,0,1,0-.66Z"/>
                            <path id="_11" data-name="11" class="fill-dark" d="M88.29,18.73h.08a.15.15,0,0,1,.11,0h0a.81.81,0,0,1,.13.18l.08.14h.16l-.1-.17a1.11,1.11,0,0,0-.13-.17l-.07,0a.27.27,0,0,0,.18-.08.22.22,0,0,0,.07-.16.2.2,0,0,0,0-.12.2.2,0,0,0-.11-.08.49.49,0,0,0-.16,0h-.35v.85h.14Zm0-.37h.3a.1.1,0,0,1,.06,0,.11.11,0,0,1,0,.07.12.12,0,0,1,0,.09.2.2,0,0,1-.12,0h-.21Z"/>
                            <polygon id="_10" data-name="10" class="fill-dark" points="67.89 18.45 69.12 18.45 67.89 16.41 66.86 14.69 62.45 17.33 63.13 18.45 67.89 18.45"/>
                            <polygon id="_9" data-name="9" class="fill-dark" points="79.3 18.45 81.56 18.45 85.29 18.45 81.56 12.24 77.44 5.38 75.74 6.4 73.04 8.02 75.74 12.52 79.3 18.45"/>
                            <path id="_8" data-name="8" class="fill-dark" d="M77.21,20.5a2.66,2.66,0,0,0-1.45-.43h0a2.7,2.7,0,0,0,0,5.4h0A2.66,2.66,0,0,0,77.21,25v.28h1.24V18.45H77.21Zm0,2.55a1.49,1.49,0,0,1-1.45,1.2h0a1.48,1.48,0,0,1,0-3h0a1.49,1.49,0,0,1,1.45,1.2Z"/>
                            <path id="_7" data-name="7" class="fill-dark" d="M83,20.5a2.65,2.65,0,0,0-1.45-.43h0a2.7,2.7,0,0,0,0,5.4h0A2.65,2.65,0,0,0,83,25v.28h1.24V20.21H83ZM83,23a1.49,1.49,0,0,1-1.45,1.2h0a1.48,1.48,0,0,1,0-3h0A1.49,1.49,0,0,1,83,22.49Z"/>
                            <path id="_6" data-name="6" class="fill-dark" d="M88.68,22.43l-.18-.07A13.08,13.08,0,0,0,87.14,22c-.55-.12-.83-.28-.83-.48a.42.42,0,0,1,.15-.34,1.07,1.07,0,0,1,.68-.16,1,1,0,0,1,.71.21.88.88,0,0,1,.19.46h1.32a1.46,1.46,0,0,0-.78-1.39l-.09,0A3.4,3.4,0,0,0,87.07,20a2.14,2.14,0,0,0-1.63.58A1.59,1.59,0,0,0,85,21.72a1.27,1.27,0,0,0,.83,1.21,8.84,8.84,0,0,0,1.53.41c.54.12.81.29.81.5a.43.43,0,0,1-.17.34,1,1,0,0,1-.68.19,1.42,1.42,0,0,1-.86-.2.65.65,0,0,1-.25-.55H84.82a1.52,1.52,0,0,0,.8,1.4,3.34,3.34,0,0,0,1.66.36,3.08,3.08,0,0,0,1.22-.23l.2-.1a1.52,1.52,0,0,0,.81-1.43A1.27,1.27,0,0,0,88.68,22.43Z"/>
                            <path id="_5-2" data-name="5" class="fill-dark" d="M63.48,20.5A2.68,2.68,0,0,0,62,20.07h0a2.7,2.7,0,0,0,0,5.4h0A2.68,2.68,0,0,0,63.48,25v.28h1.24V20.21H63.48Zm0,2.55A1.49,1.49,0,0,1,62,24.25h0a1.48,1.48,0,0,1,0-3h0a1.49,1.49,0,0,1,1.46,1.2Z"/>
                            <rect id="_4-2" data-name="4" class="fill-dark" x="71.22" y="18.48" width="1.35" height="1.19"/>
                            <rect id="_3" data-name="3" class="fill-dark" x="71.22" y="20.07" width="1.35" height="5.25"/>
                            <path id="_2" data-name="2" class="fill-dark" d="M69.36,20.5a2.68,2.68,0,0,0-1.46-.43h0a2.7,2.7,0,0,0,0,5.4h0A2.68,2.68,0,0,0,69.36,25v.28H70.6V18.45H69.36Zm0,2.55a1.49,1.49,0,0,1-1.46,1.2h0a1.48,1.48,0,0,1,0-3h0a1.49,1.49,0,0,1,1.46,1.2Z"/>
                            <polygon id="_1-2" data-name="1" class="fill-dark" points="77.2 18.45 75.74 16.01 72.15 10.03 67.89 12.59 67.75 12.68 67.89 12.92 71.22 18.45 75.74 18.45 77.2 18.45"/>
                            </g>
                            <g id="_3-2" data-name="3">
                            <g id="_1-3" data-name="1">
                            <g id="_3-3" data-name="3">
                            <path class="cls-2" d="M129.29,25.29s2.68-.11,3.2-.63c0,0,1.31-.34.86-2.17l-2.11-4s-.17-.74.34-.86l5.31.51s1.54.28,1.2,1.54a1.38,1.38,0,0,1-.57,1.37h-1.37V18.78H134v.74l.39.11v4l-.33.28v.57l2.51-.23v-.74l-.51-.11V22h1.49a2.18,2.18,0,0,0,2.05-2.4A2.18,2.18,0,0,0,138,17.42l-7.13-.8s-1.88-.23-1.31,2.11l2.11,4.05s.51,1.14-.34,1.43c0,0-1.2.29-1-1.08h-1v2.17Z"/>
                            <path class="cls-2" d="M138.59,24l-.11-.69s.57-.11.8-1c0,0,.4-.29,1.48-3.82l-.57-.06.06-.86h2.06l1.77,5.19.69-.06.06-4h-.63l.06-.68,2-.11v4.85h1a1.58,1.58,0,0,0,.4-.86l.63.06.11,1.6-6.28.23.06-.74.4-.12v-.63h-2.11v.86l.3.08,0,.77Zm2.34-2.63h1.14v-.57l-.69-1.14-.46,1.71Z"/>
                            <path class="cls-2" d="M148.85,23.56h3.41a3.44,3.44,0,0,0,1.32-2.71s.28-2.3-1.81-2.71h-3.41l-.17.62.59.14.07,4.67Zm1.39-.77h1.18a3.06,3.06,0,0,0,.76-2.09,1.64,1.64,0,0,0-1-1.74h-1l.07,3.82Z"/>
                            </g>
                            <path id="_2-2" data-name="2" class="cls-2" d="M153.93,18.62v-.7h1.81v4.73s.21.9,1.25.42V18.69a.73.73,0,0,0-.63-.28v-.77h2.37l1.67,4.1V18.2l-.56-.14v-.7l2-.35v.84l-.56.21v6.19h-1.53l-2.15-3.72v2.68h.69v1l-4.45-.42-.14-.56.69-.42v-4.1l-.49-.07Z"/>
                            <path id="_1-4" data-name="1" class="cls-2" d="M166.38,18.83V18a1.46,1.46,0,0,0-1.39-.42s-1.53.21-1.32,3.62c0,0-.28,2.16,1.39,3a1.37,1.37,0,0,0,.7-.7V21.26a.81.81,0,0,0-.7-.42V20l2.3.07v5.15s-4,.07-4.8-2.09a5.2,5.2,0,0,1,.07-4.8c1.32-2.78,4.8-1.67,4.8-1.67v2.16Z"/>
                            </g>
                            <g id="_1-5" data-name="1">
                            <path id="_2-3" data-name="2" class="cls-2" d="M153,10.9a2,2,0,0,1,.19,1,3.79,3.79,0,0,1-2.78,2.46c3.82-3.41-.35-4.31-.35-4.31a7.55,7.55,0,0,0-5.5,1.74A6.86,6.86,0,0,1,147,10c2.52-1.07,5.19-.69,5.93.85Zm-.52,2.73a6.65,6.65,0,0,1-2.71,2c-2.52,1.07-5.19.69-5.93-.85a2.41,2.41,0,0,1,.22-2.28,9,9,0,0,1,3.36-1.76,5.3,5.3,0,0,0-2.43,2c-.9,3.41,3.13,2.78,3.13,2.78a8.71,8.71,0,0,0,4.36-1.93Z"/>
                            <path id="_1-6" data-name="1" class="cls-2" d="M147,15.07s1.46.14,2-.77c0,0,.14-.14-.14-1L148.43,12s-.14-1.11.83-.9v.56h.35l.07-1a2.09,2.09,0,0,0-2,.7,2.36,2.36,0,0,0,.42,1.81s.28,1,.07,1.32h-.7V14l-.49.07.07,1Z"/>
                            </g>
                            </g>
                            <g id="_2-4" data-name="2">
                            <path id="_1-7" data-name="1" class="fill-dark" d="M113.67,1.75a1.48,1.48,0,1,1,1.55,1.2h-.15A.16.16,0,0,0,115,3c-.08.13.21.11,0,.68a.45.45,0,0,1,0,.13c0,.22-.1.87-.11,1.21,0,.05.05.07.05.2a8.21,8.21,0,0,1-.12.82.44.44,0,0,1-.21.32,5.46,5.46,0,0,1-.39,1.39,1.78,1.78,0,0,1-.14.74,3.11,3.11,0,0,1-.39,1.69,2.44,2.44,0,0,0,.11,1.25c.12.49.44.7.49,1.2a7.5,7.5,0,0,1-.17,2.92l.22.52c.27.13,1,.47.58,1a9.57,9.57,0,0,1,2,1.15,7.3,7.3,0,0,1,.8.75,1.37,1.37,0,0,1,.79.33,28.82,28.82,0,0,1,3.71,2.83c.17.1.24.17.37.24s0,.05,0,.06,0,.12-.09.22a2.5,2.5,0,0,0,.21.16c.05,0,.05,0,.15,0a.72.72,0,0,0,.33.2c.17,0,.14,0,.28-.16s.14,0,.14,0a1.31,1.31,0,0,1,.32-.27.94.94,0,0,1,.35-.08c.08,0,.06.08.06.11a2.59,2.59,0,0,0-.38.17,3.09,3.09,0,0,0-.4.55c.45-.06.73.05,1.11,0a.89.89,0,0,0,.58-.16,2.49,2.49,0,0,1,.39-.23.49.49,0,0,1,.51.08c.11.13.18.13,0,.31l-.27.26a9,9,0,0,1-.75.68,4.58,4.58,0,0,1-.8.51,5.15,5.15,0,0,0-.78.63c-.05,0-.18.13-.25.17s-.21,0-.31-.17c0,0,0-.07-.12-.22s-.15-.35-.12-.35a1.66,1.66,0,0,1-.52-.62,1.7,1.7,0,0,1-.49-.46l-.34-.27c-.39.08-.48-.16-1.5-.89a1.06,1.06,0,0,1-.56-.26c-.46-.37-1.57-1.21-1.76-1.3a3.53,3.53,0,0,1-.59-.32l-.45-.09a2.8,2.8,0,0,0-.5-.11,4.51,4.51,0,0,1-1.41-.48c-.22-.1-.41-.16-.6-.24a7.62,7.62,0,0,0-1.06-.4,3.49,3.49,0,0,1-.88-.32,1.15,1.15,0,0,0-.21-.11.45.45,0,0,0-.29,0l-1,.49-.8.45c-.24.14-.52.27-.81.41,0,0-.82.41-1.27.57A14.82,14.82,0,0,1,106.1,22c-.24.11-.71.41-.92.48l-.9.67-.46.36c-.15.14-.14.2-.44.08l-.2.15c-.21.15-.23.12-.31.11s-.17.06-.29.21,0,.1-.18.16-.06.06-.08.09-.14.45-.49.47-.15.31-.3.31c0,.15-.27.36-.32.36-.44.15-.47-.17-1,.07a1.1,1.1,0,0,1-.3.14.9.9,0,0,1-.68-.13,2.71,2.71,0,0,1-.51-.6c-.09-.2,0-.33.23-.52a.49.49,0,0,1,.32-.14c.09,0,.07,0,.23,0s.1,0,.29,0a.85.85,0,0,1,.19-.07l.3-.11s0,0,.19,0l.32-.15c0-.2,0-.19.1-.27s.13-.08.22,0,.05,0,0-.06-.1-.15-.08-.38a.63.63,0,0,1-.08-.27c0-.07,0-.11.08-.13s.06,0,.09,0a.7.7,0,0,1,.08.21c0,.17.07.4.24.27s.12-.38.33-.32l.15.13a.94.94,0,0,1,.21-.17s-.12-.12,0-.21a2.22,2.22,0,0,0,.31-.27,8.45,8.45,0,0,1,1.08-1,10.17,10.17,0,0,1,2.56-1.51,1.12,1.12,0,0,1,.88-.49,6.73,6.73,0,0,1,1.87-1.91c.2-.36.29-.32.55-.39s.25-.17.35-.34c.09-.36-.21-1.31.55-1.36a3.61,3.61,0,0,1,.3-.39,3.26,3.26,0,0,1-.2-.77s-.3-.23-.22-.5a4.06,4.06,0,0,1-.43-.66l-.1,0h-.14a.55.55,0,0,1-.46.39,3.2,3.2,0,0,1-1.57,1.8,2.66,2.66,0,0,0-.55,1,.75.75,0,0,0,0,.49c-.06.17,0,.19,0,.19a.27.27,0,0,0,.16.17c.13,0,.25,0,.25.17s-.25.15-.36.13c-.42-.07-.29-.34-.56-.25s-.29.54-.62.48c0,0,0-.12,0-.18s.13-.18.08-.22l-.66.22c-.21.06-.44,0-.23-.18a2,2,0,0,0,.4-.19s.09-.12-.08-.06a1.62,1.62,0,0,1-.64.08,3.22,3.22,0,0,1-.45-.08c-.05,0-.1-.15,0-.15a4.07,4.07,0,0,0,.85-.13c.15-.06.43-.22.58-.3a1.36,1.36,0,0,1,.26-.3c.16-.18.29-.29.43-.47a8.48,8.48,0,0,1,.72-1.4,6.52,6.52,0,0,1,.79-1,1.68,1.68,0,0,1,.5-.9,6.83,6.83,0,0,1,.37-.72l.16-.26c.13-.21.27-.59.78-.65a1.87,1.87,0,0,0,.3-.28c.13-.11.1-.28.21-.41-.16-.16-.58-.46-.62-.87a1.29,1.29,0,0,1,.38-1.07,1.23,1.23,0,0,1,1-.42,1,1,0,0,1,.71.38c.14.15.2.05.26.22.39.1.37.06.37.35a.48.48,0,0,1,.16.33,1.42,1.42,0,0,1,.51-.63c.08-.25.14-.49.21-.73s.15-.46.22-.64c-.07-.5.07-.58.27-1,0-.06,0-.08,0-.18.08-.29.19-.67.26-.92a.14.14,0,0,1,.13-.11c.09-.31.22-.9.24-1a.77.77,0,0,0,0-.62,1.12,1.12,0,0,0-.05-.21c-.11-.19-.23-.44-.31-.62a4.33,4.33,0,0,1-.13-.54c-.07-.22,0,0,0,0"/>
                            </g>
                            <g id="_1-8" data-name="1">
                            <path id="_13" data-name="13" class="fill-dark" d="M191.46,15.42h-.05a7.08,7.08,0,0,1-3.78-1,7.08,7.08,0,0,1,3.78-1h.1a7.08,7.08,0,0,1,3.78,1,7.08,7.08,0,0,1-3.78,1m7.55-1c2.64-1.16,4.37-2.91,4.46-4.85a12.62,12.62,0,0,0-3-1.37,16.44,16.44,0,0,0-3.49-.89v4.32a3,3,0,0,1-.75,1.89,20.89,20.89,0,0,0-4.88-.56h0a20.91,20.91,0,0,0-4.89.57,3,3,0,0,1-.75-1.89V7.34a16.44,16.44,0,0,0-3.49.89A12.61,12.61,0,0,0,179.4,9.6c.09,1.94,1.82,3.68,4.47,4.85-2.64,1.16-4.37,2.91-4.46,4.85a12.63,12.63,0,0,0,2.95,1.37,16.47,16.47,0,0,0,3.49.9V17.24a3,3,0,0,1,.75-1.89,20.89,20.89,0,0,0,4.88.56h0a20.91,20.91,0,0,0,4.89-.56,3,3,0,0,1,.75,1.89v4.32a16.47,16.47,0,0,0,3.49-.9,12.61,12.61,0,0,0,2.95-1.37c-.09-1.94-1.82-3.68-4.47-4.85"/>
                            <path id="_12-2" data-name="12" class="fill-dark" d="M175.94,26.33a.7.7,0,0,1-.77-.8V24.48c0-.06,0-.15.13-.15h.39c.13,0,.12.09.12.15v1.05a.25.25,0,0,0,.23.28h.72a.25.25,0,0,0,.29-.28V24.48c0-.06,0-.15.12-.15h.39c.14,0,.13.09.13.15v1.05a.7.7,0,0,1-.58.8h-.19"/>
                            <path id="_11-2" data-name="11" class="fill-dark" d="M179.57,26.21c-.27-.36-.65-.81-1-1.29v1.28c0,.06,0,.14-.12.14H178c-.13,0-.12-.09-.12-.14V24.48c0-.06,0-.15.12-.15h.71c.2,0,.49.41.68.67s.41.51.59.74V24.48c0-.06,0-.15.12-.15h.4c.13,0,.12.09.12.15v1.85h-.73a.4.4,0,0,1-.37-.13"/>
                            <path id="_10-2" data-name="10" class="fill-dark" d="M180.91,26.33v-2h1.77a.74.74,0,0,1,.83.75c0,.78.08,1.25-.82,1.25h-1l-.21-.42v.42m1-.53c.32,0,.3-.31.3-.45,0-.47-.13-.49-.34-.49h-1v.94Z"/>
                            <path id="_9-2" data-name="9" class="fill-dark" d="M184.2,24.35h1.63c.14,0,.12.09.12.26s0,.24-.12.24h-1.29s-.15,0-.15.1,0,.17.11.17h1.14s.16.31.18.37,0,.09-.08.09h-1.18l-.18-.36v.52c0,.12.11.1.14.1h1.34c.13,0,.12.09.12.24s0,.25-.12.25h-1.69c-.14,0-.42,0-.42-.48v-1.1a.41.41,0,0,1,.4-.41h.05"/>
                            <path id="_8-2" data-name="8" class="fill-dark" d="M186.38,24.34h1.78c.24,0,.59,0,.59.64,0,.42-.09.44-.28.57.32.06.28.47.28.68s0,.11-.07.11h-.52c-.11,0-.08-.17-.08-.26,0-.25-.14-.24-.19-.24h-.77c-.07-.13-.22-.41-.22-.41v.83c0,.07-.07.08-.1.08h-.53s-.05,0-.05-.07V24.51a.16.16,0,0,1,.14-.17h0m1.42.53H187c-.13,0-.13,0-.13.09v.36h.82c.4,0,.4-.1.4-.2s0-.24-.29-.24"/>
                            <path id="_7-2" data-name="7" class="fill-dark" d="M191.82,24.35c.13,0,.26.06.39.33s.74,1.36.88,1.6v.07h-.67l-.19-.35h-.82l-.18-.4c-.05.08-.32.6-.41.75h-.68v0c.14-.26,1.08-2,1.08-2m.39.55-.33.6s0,0,0,0h.61s0,0,0,0l-.31-.6h0"/>
                            <path id="_6-2" data-name="6" class="fill-dark" d="M193.43,24.34h1.78c.24,0,.59,0,.59.64,0,.42-.09.44-.28.57.32.06.28.47.28.68s0,.11-.07.11h-.52c-.11,0-.08-.17-.08-.26,0-.25-.14-.24-.19-.24h-.77c-.07-.13-.22-.41-.22-.41v.83c0,.07-.07.08-.1.08h-.53s-.05,0-.05-.07V24.51a.16.16,0,0,1,.14-.17h0m1.42.53h-.79c-.13,0-.13,0-.13.09v.36h.82c.39,0,.39-.1.39-.2s0-.24-.29-.24"/>
                            <path id="_5-3" data-name="5" class="fill-dark" d="M197.36,26.33l-.75-1.39v1.25c0,.06,0,.14-.12.14h-.36c-.14,0-.12-.09-.12-.14V24.48c0-.06,0-.15.12-.15h.62c.09,0,.23,0,.37.28s.35.73.51,1a10.84,10.84,0,0,0,.52-1c.15-.3.28-.28.38-.28h.62c.13,0,.11.09.11.15v1.71c0,.06,0,.14-.11.14h-.36c-.13,0-.12-.09-.12-.14V24.95c-.25.45-.62,1.14-.75,1.39"/>
                            <path id="_4-3" data-name="4" class="fill-dark" d="M200.07,26.34c-.59,0-.56-.63-.56-1s0-1,.7-1h1.31c.74,0,.69.6.69,1s0,1-.57,1m-.38-.51c.3,0,.29-.31.29-.52s0-.48-.35-.48h-.66c-.39,0-.34.29-.34.48s0,.52.28.52Z"/>
                            <path id="_3-4" data-name="3" class="fill-dark" d="M203.19,26.33a.7.7,0,0,1-.77-.8V24.48c0-.06,0-.15.13-.15h.39c.13,0,.12.09.12.15v1.05a.25.25,0,0,0,.23.28H204a.25.25,0,0,0,.29-.28V24.48c0-.06,0-.15.12-.15h.39c.14,0,.13.09.13.15v1.05a.7.7,0,0,1-.58.8h-.19"/>
                            <path id="_2-5" data-name="2" class="fill-dark" d="M205.36,24.34h1.78c.24,0,.59,0,.59.64,0,.42-.09.44-.28.57.32.06.28.47.28.68s0,.11-.07.11h-.52c-.11,0-.08-.17-.08-.26,0-.25-.14-.24-.19-.24h-.77c-.07-.13-.22-.41-.22-.41v.83c0,.07-.07.08-.1.08h-.52s-.05,0-.05-.07V24.51a.16.16,0,0,1,.14-.17h0m1.42.53H206c-.13,0-.13,0-.13.09v.36h.82c.4,0,.4-.1.4-.2s0-.24-.29-.24"/>
                            <path id="_1-9" data-name="1" class="fill-dark" d="M207.9,26.1a.26.26,0,0,1,.26-.26.26.26,0,0,1,.26.25h0a.27.27,0,0,1-.27.27.26.26,0,0,1-.25-.27m.26.2a.2.2,0,0,0,0-.39h0a.2.2,0,0,0-.2.19.2.2,0,0,0,.2.2h0m-.1-.08V26s0,0,0,0h.11a.08.08,0,0,1,.08.08h0s0,.08-.07.08l0,.09s0,0,0,0l-.08-.12h0v.1s0,0,0,0,0,0,0,0m.05-.15h.07s0,0,0,0h0s0,0,0,0h-.07Z"/>
                            </g>
                            <!-- <g id="buttons">
                            <g id="left">
                            <path id="left-2" data-name="left" class="cls-2" d="M6.39,9.29a6.38,6.38,0,0,0-4.52,1.87,6.4,6.4,0,0,0,0,9.05A6.39,6.39,0,1,0,6.39,9.29ZM7.13,13,4.49,15.63a.1.1,0,0,0,0,.11l2.64,2.64a.1.1,0,0,0,.11,0l.59-.59L5.76,15.74a.1.1,0,0,1,0-.11l2.08-2.05L7.25,13a.1.1,0,0,0-.11,0Z"/>
                            </g>
                            <g id="right">
                            <path id="right-2" data-name="right" class="cls-2" d="M221.38,22.66a6.38,6.38,0,0,0,4.52-1.87,6.4,6.4,0,0,0,0-9.05,6.39,6.39,0,1,0-4.53,10.92Zm-.74-3.7,2.65-2.64a.1.1,0,0,0,0-.11l-2.64-2.65a.1.1,0,0,0-.11,0l-.59.59L222,16.2a.1.1,0,0,1,0,.11l-2.08,2.05.59.59a.1.1,0,0,0,.11,0Z"/>
                            </g>
                            </g>--></g></g></g></g></g></svg>
                        </div>
                        <p >С доставкой в удобное для вас время</p>
                        <a class="btn border-warning b_black t_orange mt-2" href="#">СМОТРЕТЬ КАТАЛОГ</a>
                    </div>
                </div>
                <div class="carousel-item" data-interval="10000" >
                    <div class="carousel-caption">
                        <h1><em><s>СТИЛЬНО</s>, <s>МОДНО</s>, <s>МОЛОДЕЖНО</s></em></h1>
                        <p class="lead">Кто ты такое, когда тебе не удобно?!</p>
                        <p class="lead">Мы позаботимся что бы было комфортно!</p>
                        <a class="btn border-warning b_black t_orange mt-2" href="#">ВЫБИРАТЬ ЛУЧШИЕ ТОВАРЫ</a>
                    </div>
                </div>
                <div class="carousel-item" data-interval="10000">
                    <div class="carousel-caption">
                        <h1>В ТАКОЙ ОБУВИ ВИДНО ТОЛЬКО ТВОЮ СПИНУ</h1>
                        <p >Потому что ты рилли быстрый</p>
                        <p class="lead">как ебаный орёл</p>
                        <a class="btn border-warning b_black t_orange mt-2" href="#">ЛЕТАТЬ КАК ВЕТЕР</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev t_black" href="#carousel" role="button" data-slide="prev">
                <i class="fas fa-chevron-left fa-3x "></i>
            </a>
            <a class="carousel-control-next t_black" href="#carousel" role="button" data-slide="next">
                <i class="fas fa-chevron-right fa-3x "></i>
            </a>
        </div>
        <div class="container">
            <div class="mid-btn-block mb-2">
                <button class="btn border-warning b_black t_orange">НОВЫЕ ПОСТУПЛЕНИЯ</button>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                    <div class="card item_card card-big b_light">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <button class="btn b_black t_orange">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                    <div class="card item_card card-big b_light">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <button class="btn b_black t_orange">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                    <div class="card item_card card-big b_light">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <button class="btn b_black t_orange">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                    <div class="card item_card card-big b_light">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <button class="btn b_black t_orange">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid-btn-block mb-2">
                <button class="btn border-warning b_black t_orange">КОЛЛЕКЦИИ</button>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 mb-1">
                    <div class="card item_card card-big b_light">
                        <div class="card-body ">
                            <h2 class="ml-4 mt-4">КУПИ КИРПИЧ</h2>
                            <div class="ml-2 col-10">
                                За эту обувь не жаль и Родину продать. Поэтому докажи свою лольность бренду и неси свои денюжки к нам.
                            </div>
                            <a href="#" class="btn border-warning b_black t_orange mt-3 ml-4">ПОДРОБНЕЕ</a><br>
                            <a href="#" class="btn border-warning b_black t_orange ml-4 mt-3">КУПИТЬ</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2 mb-1">
                    <div class="card item_card card-big b_light ">
                        <svg class="card-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.61 382.57"><defs>
                        <style>.fill-dark{fill:#0b0f1b;}</style></defs>
                        <g id="man_1"><g id="man_2">
                        <path class="fill-dark" d="M25.51,24.23a41,41,0,0,0-2.31-3.79A22.53,22.53,0,0,0,23.52,27,26.75,26.75,0,0,1,25.51,24.23Z"></path>
                        <path class="fill-dark" d="M26,23.64a32.69,32.69,0,0,1,2.72-2.78,34.78,34.78,0,0,1-1.3-4.67,29,29,0,0,1-.54-6.11,22.66,22.66,0,0,0-3.56,9.3A40.44,40.44,0,0,1,26,23.64Z"></path>
                        <path class="fill-dark" d="M26.88,10.06s0,0,0,0c.12-.18.23-.36.35-.53Z"></path>
                        <path class="fill-dark" d="M33.06,12.38a7.8,7.8,0,0,0,1,4.41A54.78,54.78,0,0,1,41,13C48,9.71,56.1,8,63.8,9.12A22.6,22.6,0,0,0,41.46.4C37.16,3.29,33.42,7.71,33.06,12.38Z"></path>
                        <path class="fill-dark" d="M63.82,9.12h0c.1.14.22.27.32.42Z"></path>
                        <path class="fill-dark" d="M67.64,27.93h0c-.06.25-.13.51-.2.76h0Q67.54,28.31,67.64,27.93Z"></path>
                        <path class="fill-dark" d="M65,10.81q-.26-.43-.54-.84c-7.77-1.26-15.85.42-23,3.62a49.88,49.88,0,0,0-7,3.8C36,20,39,21.83,41.71,23.11,47,25.62,53.06,26.74,58.86,27.4a64.78,64.78,0,0,0,8.77.54A22.52,22.52,0,0,0,65,10.81Z"></path>
                        <path class="fill-dark" d="M27.67,9l-.07.09L27.67,9Z"></path>
                        <path class="fill-dark" d="M28.27,16.62a28.39,28.39,0,0,0,1,3.72,41.72,41.72,0,0,1,4.14-3.17,8.77,8.77,0,0,1-1-5.73c.65-4,3.6-7.82,7.18-10.61A22.67,22.67,0,0,0,27.67,9c0,.25,0,.5,0,.75A29.13,29.13,0,0,0,28.27,16.62Z"></path>
                        <path class="fill-dark" d="M102.58,255c-.54-.94-1-1.91-1.57-2.85A29.24,29.24,0,0,1,99,248.3a52.58,52.58,0,0,1-2.34-8.82c-.65-3.05-1.47-6.07-2-9.16a29.43,29.43,0,0,1,0-9.12c.44-2.92,1.31-5.73,2-8.59a21.42,21.42,0,0,0,.47-8.22c-.43-3.06-1.31-6-1.75-9.1a49.63,49.63,0,0,1-.29-5.19,4.38,4.38,0,0,0-1-2.63,29,29,0,0,1,.95-5.31c.64-.17,1.28-.35,1.9-.56a8.41,8.41,0,0,0,3.8-2.19c1.15-1.36.35-2.85-.46-4.17a29.64,29.64,0,0,1-3.15-8.37,82.45,82.45,0,0,1-1.74-9.43c-.42-3.16-.74-6.34-.86-9.52a37.3,37.3,0,0,1,.66-9.65c.65-2.86,1.9-5.53,2.77-8.32a29.09,29.09,0,0,0,1.09-9.16c-.06-3.2-.39-6.38-.24-9.58s.67-6.15.65-9.23a10,10,0,0,0-1.91-6.06c-1.51-2-3.85-3.06-6.08-4a34.74,34.74,0,0,0-3.82-1.37,25.66,25.66,0,0,0-2.65-.4,1.81,1.81,0,0,1-1.71-1.87,3.71,3.71,0,0,1,.07-.76,3.84,3.84,0,0,0,.21.37.1.1,0,0,0,.15,0,5.56,5.56,0,0,0,1.63-2.38,3.77,3.77,0,0,0,.81.85.1.1,0,0,0,.14-.06c.36-1.39.31-2.85.66-4.24a9.31,9.31,0,0,1,.87-2,16.41,16.41,0,0,0,.83-2c.52-1.43,1.31-2.73,1.95-4.11a19.25,19.25,0,0,0,1.25-4.11,27.57,27.57,0,0,0,.57-3.41,5.53,5.53,0,0,0,.27-1.82v0a.08.08,0,0,0,.09,0c.1.48.18,1,.25,1.46,0,.12.21.12.19,0a18.55,18.55,0,0,0-.38-2.08,6.07,6.07,0,0,0-.21-.65l.58.74c.12.52.2,1,.32,1.56,0,.12.22.07.19-.05-.06-.28-.12-.56-.17-.84a.1.1,0,0,0,.07-.12c0-.11,0-.21-.07-.31a.08.08,0,0,0,0-.11l-.08-.1a4.72,4.72,0,0,0-.17-.44l-.08-.27,0,0a1.73,1.73,0,0,1,.42,1.46.1.1,0,0,0,.19.05,1.67,1.67,0,0,0-.21-1.25l.32.19c0,.16.08.32.11.47s.2.07.19,0l.17.32c.06.11.22,0,.17-.1s-.14-.27-.23-.41l.25.14a.1.1,0,0,0,.1-.17l-.58-.32h0a4.84,4.84,0,0,0-.3-.81,7.82,7.82,0,0,0,2.77-.43,9.39,9.39,0,0,0,4.76-3.34c2.42-3.47,1.12-8.52-2.31-10.78a8.09,8.09,0,0,0-7.82-.38,6.79,6.79,0,0,0-3.56,4c0-.32,0-.63,0-1a.12.12,0,0,0,0-.07v0c0-.17.08-.34.11-.51a.1.1,0,0,0-.11-.12c0-.24,0-.47,0-.71s-.21-.12-.19,0,0,.51,0,.77a.09.09,0,0,0-.13,0,3.16,3.16,0,0,0-.2.49l-.07-.37c0-.12-.21-.07-.19.05s.1.49.15.73c0,.07,0,.13,0,.2a2,2,0,0,0-.1.38c-.15-.63-.29-1.5.18-1.75.11-.06,0-.23-.1-.17-.62.33-.36,1.42-.26,1.95,0,.18.08.36.13.54h0l-.13-.12,0-.17c-.07-.33-.12-.65-.19-1s-.29-.79,0-1c.1-.08,0-.21-.14-.14-.45.36,0,1.28,0,1.74l.07.35,0,0c-.27-.36-.56-.71-.85-1.05-.06-.08-.16,0-.16.07l-.13-.13a1.38,1.38,0,0,1-.33-.73c0-.12-.2-.13-.19,0a1.12,1.12,0,0,0,0,.26l0,0a.1.1,0,0,0-.14.14l.4.39c.21.34.49.66.68,1l.42.66-.16-.09a6.53,6.53,0,0,1-1-.94c-.08-.1-.21,0-.14.14a2.83,2.83,0,0,0,.32.34,12.82,12.82,0,0,0-2.49-.93,24.59,24.59,0,0,0-6.89-.77,14.25,14.25,0,0,0-3.35.47,19.17,19.17,0,0,0-3.33,1.35,13.94,13.94,0,0,0-2.89,1.78c-.46.39-.89.8-1.33,1.2a3.79,3.79,0,0,1-.51.4,38.36,38.36,0,0,1-1.24-4.48,40.06,40.06,0,0,1-.87-6c-.06-.92-.06-1.84-.09-2.77,0-.26,0-.52,0-.78a25.83,25.83,0,0,1,2.23-2.1c.74-.6,2-1.52,1.79-2.65a1.72,1.72,0,0,0-.5-.9c.11,0,.16-.17,0-.19l-.35,0a.86.86,0,0,0-1,.11,5.2,5.2,0,0,0-.69.23,22.58,22.58,0,0,0,3.74-7.55A67.06,67.06,0,0,1,57.74,28c-6.35-.81-12.89-2.18-18.52-5.34a15.25,15.25,0,0,1-5.42-4.88,40.15,40.15,0,0,0-4.24,3.29,36,36,0,0,0,4.14,7.74,34,34,0,0,0,6,6.56,10.38,10.38,0,0,0-1.22-.15,38.14,38.14,0,0,1-5.44-6A32.9,32.9,0,0,1,29,21.6a31.84,31.84,0,0,0-2.61,2.74c.75,1.4,1.43,2.81,2,4.13a48,48,0,0,1,3.81,10.72c-.2.28-.39.56-.56.84l0,0a47.14,47.14,0,0,0-3.86-11.21c-.57-1.25-1.2-2.57-1.89-3.9A26,26,0,0,0,23.76,28a22.65,22.65,0,0,0,7.75,12.14l-.48.46c-1.09,1-2.22,1.93-3.25,3-2.12,2.17-4,4.53-6,6.84a72.79,72.79,0,0,1-6.42,6.43c-2.11,1.93-4.25,3.83-6.37,5.75A55.18,55.18,0,0,0,3.37,68.4a26.73,26.73,0,0,0-2.24,3.16A6.31,6.31,0,0,0,0,74.41c-.12,2,1.17,3.83,2.35,5.28A27.82,27.82,0,0,0,7,84.06a53.81,53.81,0,0,0,7.25,4.42c2.67,1.44,5.29,3,8,4.35a19.82,19.82,0,0,0,4.08,1.48c1.45.35,2.92.58,4.37.89a14.32,14.32,0,0,1,5.57,2.65c.35.77.66,1.55,1,2.33a41.21,41.21,0,0,1,2.31,8.49c.53,3,.82,6.06,1.07,9.09a27.23,27.23,0,0,1,.1,3.72c-.2.28-.42.54-.65.8a11,11,0,0,0-1.87,2.22c-.54,1.08-.22,2.34-.14,3.49.11,1.59.1,3.18.11,4.77s.07,3.16.19,4.75.25,3.14.25,4.72c0,3.16-.9,6.23-1.6,9.29a36.86,36.86,0,0,0-.78,4.4c-.16,1.55-.12,3.11-.14,4.66a22.47,22.47,0,0,1-.44,4.77,20.52,20.52,0,0,1-1.47,4c-.54,1.19-1.11,2.37-1.55,3.6a4.73,4.73,0,0,0-.3,3.11,11.53,11.53,0,0,0,2.75,4.1,10.92,10.92,0,0,0,1.05,1c0,2.45.31,4.91.17,7.35a3,3,0,0,0-.55.32c-.77.61-.65,1.73-.69,2.61A80.42,80.42,0,0,1,34,200.83a40.14,40.14,0,0,0-.56,4.24,32.22,32.22,0,0,0,.11,4.55,39.76,39.76,0,0,0,1.71,8.69c3.46,11,6.48,22.53,5.65,34.19a35,35,0,0,1-1.53,8.42,7.14,7.14,0,0,0-.56,3.58,3.15,3.15,0,0,0,1.7,1.92,19.44,19.44,0,0,0,2.16,1c-.13,4.35,1.39,8.72,1.36,13.07,0,3.07-1.07,6-1.51,9a59.24,59.24,0,0,0-.55,8.94,69.6,69.6,0,0,0,2.38,17c1.43,5.53,3.31,10.93,5,16.36,1,3,.14,5.56.92,8.6.11.44.21.87.32,1.31-.62.23-1.68.38-1.93,1s.31,1.65.32,2.47a25.71,25.71,0,0,0,1.27,6.31c.13,1.09.3,2.17.39,3.26a31.09,31.09,0,0,1,0,3.87c0,.39,0,.77-.07,1.15a39.62,39.62,0,0,0-.27,6.06q0,.53.12,1.06c.6,3.65,1.29,6.38,3.13,9a8.94,8.94,0,0,0,.66.86,7.63,7.63,0,0,0,7.09,2.64A6,6,0,0,0,66.66,374c0-.25.06-.5.08-.75s0-.5.05-.75a33.79,33.79,0,0,0,.11-3.82c0-3.16-2-7.05-1.24-10.13.63-2.7,2.48-4.65.68-11.22a7.94,7.94,0,0,0-.57-1.38,15.37,15.37,0,0,0-1.94-5.4c-.24-.33-.38-1.18-.66-1.36-.46-.3-1.1.22-1.68.48-.42-2.56-1.84-5.3-2.08-7.89-.3-3.13-.42-6.26-.41-9.39a67.27,67.27,0,0,1,.57-9.69c.21-1.41.55-2.81.79-4.22a39.25,39.25,0,0,0,.41-4.18c.18-2.94.24-5.88.24-8.83,0-3.45-.09-6.9-.18-10.36l.08-.25c.43-1.33.9-2.67,1.22-4a21.94,21.94,0,0,0,.45-5.83,14.24,14.24,0,0,1,.24-3.21v0a.1.1,0,0,0,.17-.06c0-.3,0-.6,0-.91a8.47,8.47,0,0,0,.13-1.53,11.13,11.13,0,0,1,1-3.37,4.32,4.32,0,0,1,1.09,2.64c.15,1,.17,2,.39,3,.3,1.35.87,2.66,1.3,4a38.14,38.14,0,0,1,1.12,4.4c.62,3.11,1.17,6.24,1.82,9.34s1.26,6,1.86,9c2.41,12.1,4.29,24.59,2.33,36.89q-.3,1.86-.72,3.7a2.93,2.93,0,0,1-1.21.9s1.76,6.43-.24,16.41c-.4,2.85-2.35,8.19-2.67,11.05a63,63,0,0,0-.47,8.07,3.29,3.29,0,0,0,.32,1.44,8.37,8.37,0,0,0,.37,1.5,7,7,0,0,0,5,4.16c4.44,1.14,7.88-3.23,9.85-6.54a26.76,26.76,0,0,0,3-7,33.31,33.31,0,0,0,.66-4.56A13.27,13.27,0,0,1,89.7,359c3-5.36.87-10.9-1.27-16.15-.14-.5-.29-1-.45-1.49-.35-1.08-.05-3.58,0-4.86.07-1.13-.84-.94-2.65-.65a87,87,0,0,1,.51-12.64,70.16,70.16,0,0,1,1.78-9.07c.75-2.9,1.56-5.79,2.15-8.73a35.62,35.62,0,0,0,.72-8.79,47.28,47.28,0,0,0-1.44-8.9c-.73-3-1.63-5.91-2.51-8.84-.8-2.67-2.19-5.12-2.81-7.85a10.3,10.3,0,0,1-.19-3.42,60.61,60.61,0,0,1,5.86-3.34c2.83-1.31,5.62-2.7,8.48-3.94,1.57-.69,3.31-1,4.8-1.84.45-.27,1-.67.9-1.24A6.58,6.58,0,0,0,102.58,255ZM86.14,52.32,85.92,52l.45.43.28.38c0,.12.05.24.08.36l-.12-.08C86.45,52.82,86.29,52.57,86.14,52.32ZM57.38,85.2c-3.71-1.4-7.35-3-11.15-4.13a33.11,33.11,0,0,0-7.31-1.38c-1.39-.09-2.78-.16-4.17-.2a10.78,10.78,0,0,0-1.82.07l-.13,0c-.37-.38-.74-.76-1.12-1.13a19.75,19.75,0,0,0-5.39-3.64c-1-.46-1.93-.94-2.92-1.34A16.51,16.51,0,0,0,20,72.6c-.88-.16-1.74-.35-2.6-.57l-.35-.09c2.14-3,3.56-6.61,5.36-9.81a42,42,0,0,1,8.27-10.72,19.42,19.42,0,0,1,11.86-5.33,16.84,16.84,0,0,1,3.54.21,33.21,33.21,0,0,1,4.07,1.11,9.19,9.19,0,0,0,3.83.48h.07a18.2,18.2,0,0,1,.8,1.7,14.3,14.3,0,0,1,.88,4.49c.1,1.54.09,3.08.24,4.61s.28,3,.39,4.55c.47,6,.92,12,3,17.72a.1.1,0,0,0,.13.06A7.89,7.89,0,0,1,57.38,85.2Z"></path></g></g></svg>
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <button class="btn border-warning b_black t_orange">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2 mb-1">
                    <div class="card item_card card-big b_red">
                        <svg class="card-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.61 382.57"><defs>
                        <style>.fill-red{fill:#bb2914;}</style></defs>
                        <g id="man_3"><g id="man_4">
                        <path class="fill-red" d="M25.51,24.23a41,41,0,0,0-2.31-3.79A22.53,22.53,0,0,0,23.52,27,26.75,26.75,0,0,1,25.51,24.23Z"></path>
                        <path class="fill-red" d="M26,23.64a32.69,32.69,0,0,1,2.72-2.78,34.78,34.78,0,0,1-1.3-4.67,29,29,0,0,1-.54-6.11,22.66,22.66,0,0,0-3.56,9.3A40.44,40.44,0,0,1,26,23.64Z"></path>
                        <path class="fill-red" d="M26.88,10.06s0,0,0,0c.12-.18.23-.36.35-.53Z"></path>
                        <path class="fill-red" d="M33.06,12.38a7.8,7.8,0,0,0,1,4.41A54.78,54.78,0,0,1,41,13C48,9.71,56.1,8,63.8,9.12A22.6,22.6,0,0,0,41.46.4C37.16,3.29,33.42,7.71,33.06,12.38Z"></path>
                        <path class="fill-red" d="M63.82,9.12h0c.1.14.22.27.32.42Z"></path>
                        <path class="fill-red" d="M67.64,27.93h0c-.06.25-.13.51-.2.76h0Q67.54,28.31,67.64,27.93Z"></path>
                        <path class="fill-red" d="M65,10.81q-.26-.43-.54-.84c-7.77-1.26-15.85.42-23,3.62a49.88,49.88,0,0,0-7,3.8C36,20,39,21.83,41.71,23.11,47,25.62,53.06,26.74,58.86,27.4a64.78,64.78,0,0,0,8.77.54A22.52,22.52,0,0,0,65,10.81Z"></path>
                        <path class="fill-red" d="M27.67,9l-.07.09L27.67,9Z"></path>
                        <path class="fill-red" d="M28.27,16.62a28.39,28.39,0,0,0,1,3.72,41.72,41.72,0,0,1,4.14-3.17,8.77,8.77,0,0,1-1-5.73c.65-4,3.6-7.82,7.18-10.61A22.67,22.67,0,0,0,27.67,9c0,.25,0,.5,0,.75A29.13,29.13,0,0,0,28.27,16.62Z"></path>
                        <path class="fill-red" d="M102.58,255c-.54-.94-1-1.91-1.57-2.85A29.24,29.24,0,0,1,99,248.3a52.58,52.58,0,0,1-2.34-8.82c-.65-3.05-1.47-6.07-2-9.16a29.43,29.43,0,0,1,0-9.12c.44-2.92,1.31-5.73,2-8.59a21.42,21.42,0,0,0,.47-8.22c-.43-3.06-1.31-6-1.75-9.1a49.63,49.63,0,0,1-.29-5.19,4.38,4.38,0,0,0-1-2.63,29,29,0,0,1,.95-5.31c.64-.17,1.28-.35,1.9-.56a8.41,8.41,0,0,0,3.8-2.19c1.15-1.36.35-2.85-.46-4.17a29.64,29.64,0,0,1-3.15-8.37,82.45,82.45,0,0,1-1.74-9.43c-.42-3.16-.74-6.34-.86-9.52a37.3,37.3,0,0,1,.66-9.65c.65-2.86,1.9-5.53,2.77-8.32a29.09,29.09,0,0,0,1.09-9.16c-.06-3.2-.39-6.38-.24-9.58s.67-6.15.65-9.23a10,10,0,0,0-1.91-6.06c-1.51-2-3.85-3.06-6.08-4a34.74,34.74,0,0,0-3.82-1.37,25.66,25.66,0,0,0-2.65-.4,1.81,1.81,0,0,1-1.71-1.87,3.71,3.71,0,0,1,.07-.76,3.84,3.84,0,0,0,.21.37.1.1,0,0,0,.15,0,5.56,5.56,0,0,0,1.63-2.38,3.77,3.77,0,0,0,.81.85.1.1,0,0,0,.14-.06c.36-1.39.31-2.85.66-4.24a9.31,9.31,0,0,1,.87-2,16.41,16.41,0,0,0,.83-2c.52-1.43,1.31-2.73,1.95-4.11a19.25,19.25,0,0,0,1.25-4.11,27.57,27.57,0,0,0,.57-3.41,5.53,5.53,0,0,0,.27-1.82v0a.08.08,0,0,0,.09,0c.1.48.18,1,.25,1.46,0,.12.21.12.19,0a18.55,18.55,0,0,0-.38-2.08,6.07,6.07,0,0,0-.21-.65l.58.74c.12.52.2,1,.32,1.56,0,.12.22.07.19-.05-.06-.28-.12-.56-.17-.84a.1.1,0,0,0,.07-.12c0-.11,0-.21-.07-.31a.08.08,0,0,0,0-.11l-.08-.1a4.72,4.72,0,0,0-.17-.44l-.08-.27,0,0a1.73,1.73,0,0,1,.42,1.46.1.1,0,0,0,.19.05,1.67,1.67,0,0,0-.21-1.25l.32.19c0,.16.08.32.11.47s.2.07.19,0l.17.32c.06.11.22,0,.17-.1s-.14-.27-.23-.41l.25.14a.1.1,0,0,0,.1-.17l-.58-.32h0a4.84,4.84,0,0,0-.3-.81,7.82,7.82,0,0,0,2.77-.43,9.39,9.39,0,0,0,4.76-3.34c2.42-3.47,1.12-8.52-2.31-10.78a8.09,8.09,0,0,0-7.82-.38,6.79,6.79,0,0,0-3.56,4c0-.32,0-.63,0-1a.12.12,0,0,0,0-.07v0c0-.17.08-.34.11-.51a.1.1,0,0,0-.11-.12c0-.24,0-.47,0-.71s-.21-.12-.19,0,0,.51,0,.77a.09.09,0,0,0-.13,0,3.16,3.16,0,0,0-.2.49l-.07-.37c0-.12-.21-.07-.19.05s.1.49.15.73c0,.07,0,.13,0,.2a2,2,0,0,0-.1.38c-.15-.63-.29-1.5.18-1.75.11-.06,0-.23-.1-.17-.62.33-.36,1.42-.26,1.95,0,.18.08.36.13.54h0l-.13-.12,0-.17c-.07-.33-.12-.65-.19-1s-.29-.79,0-1c.1-.08,0-.21-.14-.14-.45.36,0,1.28,0,1.74l.07.35,0,0c-.27-.36-.56-.71-.85-1.05-.06-.08-.16,0-.16.07l-.13-.13a1.38,1.38,0,0,1-.33-.73c0-.12-.2-.13-.19,0a1.12,1.12,0,0,0,0,.26l0,0a.1.1,0,0,0-.14.14l.4.39c.21.34.49.66.68,1l.42.66-.16-.09a6.53,6.53,0,0,1-1-.94c-.08-.1-.21,0-.14.14a2.83,2.83,0,0,0,.32.34,12.82,12.82,0,0,0-2.49-.93,24.59,24.59,0,0,0-6.89-.77,14.25,14.25,0,0,0-3.35.47,19.17,19.17,0,0,0-3.33,1.35,13.94,13.94,0,0,0-2.89,1.78c-.46.39-.89.8-1.33,1.2a3.79,3.79,0,0,1-.51.4,38.36,38.36,0,0,1-1.24-4.48,40.06,40.06,0,0,1-.87-6c-.06-.92-.06-1.84-.09-2.77,0-.26,0-.52,0-.78a25.83,25.83,0,0,1,2.23-2.1c.74-.6,2-1.52,1.79-2.65a1.72,1.72,0,0,0-.5-.9c.11,0,.16-.17,0-.19l-.35,0a.86.86,0,0,0-1,.11,5.2,5.2,0,0,0-.69.23,22.58,22.58,0,0,0,3.74-7.55A67.06,67.06,0,0,1,57.74,28c-6.35-.81-12.89-2.18-18.52-5.34a15.25,15.25,0,0,1-5.42-4.88,40.15,40.15,0,0,0-4.24,3.29,36,36,0,0,0,4.14,7.74,34,34,0,0,0,6,6.56,10.38,10.38,0,0,0-1.22-.15,38.14,38.14,0,0,1-5.44-6A32.9,32.9,0,0,1,29,21.6a31.84,31.84,0,0,0-2.61,2.74c.75,1.4,1.43,2.81,2,4.13a48,48,0,0,1,3.81,10.72c-.2.28-.39.56-.56.84l0,0a47.14,47.14,0,0,0-3.86-11.21c-.57-1.25-1.2-2.57-1.89-3.9A26,26,0,0,0,23.76,28a22.65,22.65,0,0,0,7.75,12.14l-.48.46c-1.09,1-2.22,1.93-3.25,3-2.12,2.17-4,4.53-6,6.84a72.79,72.79,0,0,1-6.42,6.43c-2.11,1.93-4.25,3.83-6.37,5.75A55.18,55.18,0,0,0,3.37,68.4a26.73,26.73,0,0,0-2.24,3.16A6.31,6.31,0,0,0,0,74.41c-.12,2,1.17,3.83,2.35,5.28A27.82,27.82,0,0,0,7,84.06a53.81,53.81,0,0,0,7.25,4.42c2.67,1.44,5.29,3,8,4.35a19.82,19.82,0,0,0,4.08,1.48c1.45.35,2.92.58,4.37.89a14.32,14.32,0,0,1,5.57,2.65c.35.77.66,1.55,1,2.33a41.21,41.21,0,0,1,2.31,8.49c.53,3,.82,6.06,1.07,9.09a27.23,27.23,0,0,1,.1,3.72c-.2.28-.42.54-.65.8a11,11,0,0,0-1.87,2.22c-.54,1.08-.22,2.34-.14,3.49.11,1.59.1,3.18.11,4.77s.07,3.16.19,4.75.25,3.14.25,4.72c0,3.16-.9,6.23-1.6,9.29a36.86,36.86,0,0,0-.78,4.4c-.16,1.55-.12,3.11-.14,4.66a22.47,22.47,0,0,1-.44,4.77,20.52,20.52,0,0,1-1.47,4c-.54,1.19-1.11,2.37-1.55,3.6a4.73,4.73,0,0,0-.3,3.11,11.53,11.53,0,0,0,2.75,4.1,10.92,10.92,0,0,0,1.05,1c0,2.45.31,4.91.17,7.35a3,3,0,0,0-.55.32c-.77.61-.65,1.73-.69,2.61A80.42,80.42,0,0,1,34,200.83a40.14,40.14,0,0,0-.56,4.24,32.22,32.22,0,0,0,.11,4.55,39.76,39.76,0,0,0,1.71,8.69c3.46,11,6.48,22.53,5.65,34.19a35,35,0,0,1-1.53,8.42,7.14,7.14,0,0,0-.56,3.58,3.15,3.15,0,0,0,1.7,1.92,19.44,19.44,0,0,0,2.16,1c-.13,4.35,1.39,8.72,1.36,13.07,0,3.07-1.07,6-1.51,9a59.24,59.24,0,0,0-.55,8.94,69.6,69.6,0,0,0,2.38,17c1.43,5.53,3.31,10.93,5,16.36,1,3,.14,5.56.92,8.6.11.44.21.87.32,1.31-.62.23-1.68.38-1.93,1s.31,1.65.32,2.47a25.71,25.71,0,0,0,1.27,6.31c.13,1.09.3,2.17.39,3.26a31.09,31.09,0,0,1,0,3.87c0,.39,0,.77-.07,1.15a39.62,39.62,0,0,0-.27,6.06q0,.53.12,1.06c.6,3.65,1.29,6.38,3.13,9a8.94,8.94,0,0,0,.66.86,7.63,7.63,0,0,0,7.09,2.64A6,6,0,0,0,66.66,374c0-.25.06-.5.08-.75s0-.5.05-.75a33.79,33.79,0,0,0,.11-3.82c0-3.16-2-7.05-1.24-10.13.63-2.7,2.48-4.65.68-11.22a7.94,7.94,0,0,0-.57-1.38,15.37,15.37,0,0,0-1.94-5.4c-.24-.33-.38-1.18-.66-1.36-.46-.3-1.1.22-1.68.48-.42-2.56-1.84-5.3-2.08-7.89-.3-3.13-.42-6.26-.41-9.39a67.27,67.27,0,0,1,.57-9.69c.21-1.41.55-2.81.79-4.22a39.25,39.25,0,0,0,.41-4.18c.18-2.94.24-5.88.24-8.83,0-3.45-.09-6.9-.18-10.36l.08-.25c.43-1.33.9-2.67,1.22-4a21.94,21.94,0,0,0,.45-5.83,14.24,14.24,0,0,1,.24-3.21v0a.1.1,0,0,0,.17-.06c0-.3,0-.6,0-.91a8.47,8.47,0,0,0,.13-1.53,11.13,11.13,0,0,1,1-3.37,4.32,4.32,0,0,1,1.09,2.64c.15,1,.17,2,.39,3,.3,1.35.87,2.66,1.3,4a38.14,38.14,0,0,1,1.12,4.4c.62,3.11,1.17,6.24,1.82,9.34s1.26,6,1.86,9c2.41,12.1,4.29,24.59,2.33,36.89q-.3,1.86-.72,3.7a2.93,2.93,0,0,1-1.21.9s1.76,6.43-.24,16.41c-.4,2.85-2.35,8.19-2.67,11.05a63,63,0,0,0-.47,8.07,3.29,3.29,0,0,0,.32,1.44,8.37,8.37,0,0,0,.37,1.5,7,7,0,0,0,5,4.16c4.44,1.14,7.88-3.23,9.85-6.54a26.76,26.76,0,0,0,3-7,33.31,33.31,0,0,0,.66-4.56A13.27,13.27,0,0,1,89.7,359c3-5.36.87-10.9-1.27-16.15-.14-.5-.29-1-.45-1.49-.35-1.08-.05-3.58,0-4.86.07-1.13-.84-.94-2.65-.65a87,87,0,0,1,.51-12.64,70.16,70.16,0,0,1,1.78-9.07c.75-2.9,1.56-5.79,2.15-8.73a35.62,35.62,0,0,0,.72-8.79,47.28,47.28,0,0,0-1.44-8.9c-.73-3-1.63-5.91-2.51-8.84-.8-2.67-2.19-5.12-2.81-7.85a10.3,10.3,0,0,1-.19-3.42,60.61,60.61,0,0,1,5.86-3.34c2.83-1.31,5.62-2.7,8.48-3.94,1.57-.69,3.31-1,4.8-1.84.45-.27,1-.67.9-1.24A6.58,6.58,0,0,0,102.58,255ZM86.14,52.32,85.92,52l.45.43.28.38c0,.12.05.24.08.36l-.12-.08C86.45,52.82,86.29,52.57,86.14,52.32ZM57.38,85.2c-3.71-1.4-7.35-3-11.15-4.13a33.11,33.11,0,0,0-7.31-1.38c-1.39-.09-2.78-.16-4.17-.2a10.78,10.78,0,0,0-1.82.07l-.13,0c-.37-.38-.74-.76-1.12-1.13a19.75,19.75,0,0,0-5.39-3.64c-1-.46-1.93-.94-2.92-1.34A16.51,16.51,0,0,0,20,72.6c-.88-.16-1.74-.35-2.6-.57l-.35-.09c2.14-3,3.56-6.61,5.36-9.81a42,42,0,0,1,8.27-10.72,19.42,19.42,0,0,1,11.86-5.33,16.84,16.84,0,0,1,3.54.21,33.21,33.21,0,0,1,4.07,1.11,9.19,9.19,0,0,0,3.83.48h.07a18.2,18.2,0,0,1,.8,1.7,14.3,14.3,0,0,1,.88,4.49c.1,1.54.09,3.08.24,4.61s.28,3,.39,4.55c.47,6,.92,12,3,17.72a.1.1,0,0,0,.13.06A7.89,7.89,0,0,1,57.38,85.2Z"></path></g></g></svg>
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <button class="btn border-warning b_black t_orange">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2 mb-1">
                    <div class="card item_card card-big b_orange">
                        <svg class="card-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.61 382.57"><defs>
                        <style>.fill-gray{fill:#333;}</style></defs>
                        <g id="man_5"><g id="man_6">
                        <path class="fill-gray" d="M25.51,24.23a41,41,0,0,0-2.31-3.79A22.53,22.53,0,0,0,23.52,27,26.75,26.75,0,0,1,25.51,24.23Z"></path>
                        <path class="fill-gray" d="M26,23.64a32.69,32.69,0,0,1,2.72-2.78,34.78,34.78,0,0,1-1.3-4.67,29,29,0,0,1-.54-6.11,22.66,22.66,0,0,0-3.56,9.3A40.44,40.44,0,0,1,26,23.64Z"></path>
                        <path class="fill-gray" d="M26.88,10.06s0,0,0,0c.12-.18.23-.36.35-.53Z"></path>
                        <path class="fill-gray" d="M33.06,12.38a7.8,7.8,0,0,0,1,4.41A54.78,54.78,0,0,1,41,13C48,9.71,56.1,8,63.8,9.12A22.6,22.6,0,0,0,41.46.4C37.16,3.29,33.42,7.71,33.06,12.38Z"></path>
                        <path class="fill-gray" d="M63.82,9.12h0c.1.14.22.27.32.42Z"></path>
                        <path class="fill-gray" d="M67.64,27.93h0c-.06.25-.13.51-.2.76h0Q67.54,28.31,67.64,27.93Z"></path>
                        <path class="fill-gray" d="M65,10.81q-.26-.43-.54-.84c-7.77-1.26-15.85.42-23,3.62a49.88,49.88,0,0,0-7,3.8C36,20,39,21.83,41.71,23.11,47,25.62,53.06,26.74,58.86,27.4a64.78,64.78,0,0,0,8.77.54A22.52,22.52,0,0,0,65,10.81Z"></path>
                        <path class="fill-gray" d="M27.67,9l-.07.09L27.67,9Z"></path>
                        <path class="fill-gray" d="M28.27,16.62a28.39,28.39,0,0,0,1,3.72,41.72,41.72,0,0,1,4.14-3.17,8.77,8.77,0,0,1-1-5.73c.65-4,3.6-7.82,7.18-10.61A22.67,22.67,0,0,0,27.67,9c0,.25,0,.5,0,.75A29.13,29.13,0,0,0,28.27,16.62Z"></path>
                        <path class="fill-gray" d="M102.58,255c-.54-.94-1-1.91-1.57-2.85A29.24,29.24,0,0,1,99,248.3a52.58,52.58,0,0,1-2.34-8.82c-.65-3.05-1.47-6.07-2-9.16a29.43,29.43,0,0,1,0-9.12c.44-2.92,1.31-5.73,2-8.59a21.42,21.42,0,0,0,.47-8.22c-.43-3.06-1.31-6-1.75-9.1a49.63,49.63,0,0,1-.29-5.19,4.38,4.38,0,0,0-1-2.63,29,29,0,0,1,.95-5.31c.64-.17,1.28-.35,1.9-.56a8.41,8.41,0,0,0,3.8-2.19c1.15-1.36.35-2.85-.46-4.17a29.64,29.64,0,0,1-3.15-8.37,82.45,82.45,0,0,1-1.74-9.43c-.42-3.16-.74-6.34-.86-9.52a37.3,37.3,0,0,1,.66-9.65c.65-2.86,1.9-5.53,2.77-8.32a29.09,29.09,0,0,0,1.09-9.16c-.06-3.2-.39-6.38-.24-9.58s.67-6.15.65-9.23a10,10,0,0,0-1.91-6.06c-1.51-2-3.85-3.06-6.08-4a34.74,34.74,0,0,0-3.82-1.37,25.66,25.66,0,0,0-2.65-.4,1.81,1.81,0,0,1-1.71-1.87,3.71,3.71,0,0,1,.07-.76,3.84,3.84,0,0,0,.21.37.1.1,0,0,0,.15,0,5.56,5.56,0,0,0,1.63-2.38,3.77,3.77,0,0,0,.81.85.1.1,0,0,0,.14-.06c.36-1.39.31-2.85.66-4.24a9.31,9.31,0,0,1,.87-2,16.41,16.41,0,0,0,.83-2c.52-1.43,1.31-2.73,1.95-4.11a19.25,19.25,0,0,0,1.25-4.11,27.57,27.57,0,0,0,.57-3.41,5.53,5.53,0,0,0,.27-1.82v0a.08.08,0,0,0,.09,0c.1.48.18,1,.25,1.46,0,.12.21.12.19,0a18.55,18.55,0,0,0-.38-2.08,6.07,6.07,0,0,0-.21-.65l.58.74c.12.52.2,1,.32,1.56,0,.12.22.07.19-.05-.06-.28-.12-.56-.17-.84a.1.1,0,0,0,.07-.12c0-.11,0-.21-.07-.31a.08.08,0,0,0,0-.11l-.08-.1a4.72,4.72,0,0,0-.17-.44l-.08-.27,0,0a1.73,1.73,0,0,1,.42,1.46.1.1,0,0,0,.19.05,1.67,1.67,0,0,0-.21-1.25l.32.19c0,.16.08.32.11.47s.2.07.19,0l.17.32c.06.11.22,0,.17-.1s-.14-.27-.23-.41l.25.14a.1.1,0,0,0,.1-.17l-.58-.32h0a4.84,4.84,0,0,0-.3-.81,7.82,7.82,0,0,0,2.77-.43,9.39,9.39,0,0,0,4.76-3.34c2.42-3.47,1.12-8.52-2.31-10.78a8.09,8.09,0,0,0-7.82-.38,6.79,6.79,0,0,0-3.56,4c0-.32,0-.63,0-1a.12.12,0,0,0,0-.07v0c0-.17.08-.34.11-.51a.1.1,0,0,0-.11-.12c0-.24,0-.47,0-.71s-.21-.12-.19,0,0,.51,0,.77a.09.09,0,0,0-.13,0,3.16,3.16,0,0,0-.2.49l-.07-.37c0-.12-.21-.07-.19.05s.1.49.15.73c0,.07,0,.13,0,.2a2,2,0,0,0-.1.38c-.15-.63-.29-1.5.18-1.75.11-.06,0-.23-.1-.17-.62.33-.36,1.42-.26,1.95,0,.18.08.36.13.54h0l-.13-.12,0-.17c-.07-.33-.12-.65-.19-1s-.29-.79,0-1c.1-.08,0-.21-.14-.14-.45.36,0,1.28,0,1.74l.07.35,0,0c-.27-.36-.56-.71-.85-1.05-.06-.08-.16,0-.16.07l-.13-.13a1.38,1.38,0,0,1-.33-.73c0-.12-.2-.13-.19,0a1.12,1.12,0,0,0,0,.26l0,0a.1.1,0,0,0-.14.14l.4.39c.21.34.49.66.68,1l.42.66-.16-.09a6.53,6.53,0,0,1-1-.94c-.08-.1-.21,0-.14.14a2.83,2.83,0,0,0,.32.34,12.82,12.82,0,0,0-2.49-.93,24.59,24.59,0,0,0-6.89-.77,14.25,14.25,0,0,0-3.35.47,19.17,19.17,0,0,0-3.33,1.35,13.94,13.94,0,0,0-2.89,1.78c-.46.39-.89.8-1.33,1.2a3.79,3.79,0,0,1-.51.4,38.36,38.36,0,0,1-1.24-4.48,40.06,40.06,0,0,1-.87-6c-.06-.92-.06-1.84-.09-2.77,0-.26,0-.52,0-.78a25.83,25.83,0,0,1,2.23-2.1c.74-.6,2-1.52,1.79-2.65a1.72,1.72,0,0,0-.5-.9c.11,0,.16-.17,0-.19l-.35,0a.86.86,0,0,0-1,.11,5.2,5.2,0,0,0-.69.23,22.58,22.58,0,0,0,3.74-7.55A67.06,67.06,0,0,1,57.74,28c-6.35-.81-12.89-2.18-18.52-5.34a15.25,15.25,0,0,1-5.42-4.88,40.15,40.15,0,0,0-4.24,3.29,36,36,0,0,0,4.14,7.74,34,34,0,0,0,6,6.56,10.38,10.38,0,0,0-1.22-.15,38.14,38.14,0,0,1-5.44-6A32.9,32.9,0,0,1,29,21.6a31.84,31.84,0,0,0-2.61,2.74c.75,1.4,1.43,2.81,2,4.13a48,48,0,0,1,3.81,10.72c-.2.28-.39.56-.56.84l0,0a47.14,47.14,0,0,0-3.86-11.21c-.57-1.25-1.2-2.57-1.89-3.9A26,26,0,0,0,23.76,28a22.65,22.65,0,0,0,7.75,12.14l-.48.46c-1.09,1-2.22,1.93-3.25,3-2.12,2.17-4,4.53-6,6.84a72.79,72.79,0,0,1-6.42,6.43c-2.11,1.93-4.25,3.83-6.37,5.75A55.18,55.18,0,0,0,3.37,68.4a26.73,26.73,0,0,0-2.24,3.16A6.31,6.31,0,0,0,0,74.41c-.12,2,1.17,3.83,2.35,5.28A27.82,27.82,0,0,0,7,84.06a53.81,53.81,0,0,0,7.25,4.42c2.67,1.44,5.29,3,8,4.35a19.82,19.82,0,0,0,4.08,1.48c1.45.35,2.92.58,4.37.89a14.32,14.32,0,0,1,5.57,2.65c.35.77.66,1.55,1,2.33a41.21,41.21,0,0,1,2.31,8.49c.53,3,.82,6.06,1.07,9.09a27.23,27.23,0,0,1,.1,3.72c-.2.28-.42.54-.65.8a11,11,0,0,0-1.87,2.22c-.54,1.08-.22,2.34-.14,3.49.11,1.59.1,3.18.11,4.77s.07,3.16.19,4.75.25,3.14.25,4.72c0,3.16-.9,6.23-1.6,9.29a36.86,36.86,0,0,0-.78,4.4c-.16,1.55-.12,3.11-.14,4.66a22.47,22.47,0,0,1-.44,4.77,20.52,20.52,0,0,1-1.47,4c-.54,1.19-1.11,2.37-1.55,3.6a4.73,4.73,0,0,0-.3,3.11,11.53,11.53,0,0,0,2.75,4.1,10.92,10.92,0,0,0,1.05,1c0,2.45.31,4.91.17,7.35a3,3,0,0,0-.55.32c-.77.61-.65,1.73-.69,2.61A80.42,80.42,0,0,1,34,200.83a40.14,40.14,0,0,0-.56,4.24,32.22,32.22,0,0,0,.11,4.55,39.76,39.76,0,0,0,1.71,8.69c3.46,11,6.48,22.53,5.65,34.19a35,35,0,0,1-1.53,8.42,7.14,7.14,0,0,0-.56,3.58,3.15,3.15,0,0,0,1.7,1.92,19.44,19.44,0,0,0,2.16,1c-.13,4.35,1.39,8.72,1.36,13.07,0,3.07-1.07,6-1.51,9a59.24,59.24,0,0,0-.55,8.94,69.6,69.6,0,0,0,2.38,17c1.43,5.53,3.31,10.93,5,16.36,1,3,.14,5.56.92,8.6.11.44.21.87.32,1.31-.62.23-1.68.38-1.93,1s.31,1.65.32,2.47a25.71,25.71,0,0,0,1.27,6.31c.13,1.09.3,2.17.39,3.26a31.09,31.09,0,0,1,0,3.87c0,.39,0,.77-.07,1.15a39.62,39.62,0,0,0-.27,6.06q0,.53.12,1.06c.6,3.65,1.29,6.38,3.13,9a8.94,8.94,0,0,0,.66.86,7.63,7.63,0,0,0,7.09,2.64A6,6,0,0,0,66.66,374c0-.25.06-.5.08-.75s0-.5.05-.75a33.79,33.79,0,0,0,.11-3.82c0-3.16-2-7.05-1.24-10.13.63-2.7,2.48-4.65.68-11.22a7.94,7.94,0,0,0-.57-1.38,15.37,15.37,0,0,0-1.94-5.4c-.24-.33-.38-1.18-.66-1.36-.46-.3-1.1.22-1.68.48-.42-2.56-1.84-5.3-2.08-7.89-.3-3.13-.42-6.26-.41-9.39a67.27,67.27,0,0,1,.57-9.69c.21-1.41.55-2.81.79-4.22a39.25,39.25,0,0,0,.41-4.18c.18-2.94.24-5.88.24-8.83,0-3.45-.09-6.9-.18-10.36l.08-.25c.43-1.33.9-2.67,1.22-4a21.94,21.94,0,0,0,.45-5.83,14.24,14.24,0,0,1,.24-3.21v0a.1.1,0,0,0,.17-.06c0-.3,0-.6,0-.91a8.47,8.47,0,0,0,.13-1.53,11.13,11.13,0,0,1,1-3.37,4.32,4.32,0,0,1,1.09,2.64c.15,1,.17,2,.39,3,.3,1.35.87,2.66,1.3,4a38.14,38.14,0,0,1,1.12,4.4c.62,3.11,1.17,6.24,1.82,9.34s1.26,6,1.86,9c2.41,12.1,4.29,24.59,2.33,36.89q-.3,1.86-.72,3.7a2.93,2.93,0,0,1-1.21.9s1.76,6.43-.24,16.41c-.4,2.85-2.35,8.19-2.67,11.05a63,63,0,0,0-.47,8.07,3.29,3.29,0,0,0,.32,1.44,8.37,8.37,0,0,0,.37,1.5,7,7,0,0,0,5,4.16c4.44,1.14,7.88-3.23,9.85-6.54a26.76,26.76,0,0,0,3-7,33.31,33.31,0,0,0,.66-4.56A13.27,13.27,0,0,1,89.7,359c3-5.36.87-10.9-1.27-16.15-.14-.5-.29-1-.45-1.49-.35-1.08-.05-3.58,0-4.86.07-1.13-.84-.94-2.65-.65a87,87,0,0,1,.51-12.64,70.16,70.16,0,0,1,1.78-9.07c.75-2.9,1.56-5.79,2.15-8.73a35.62,35.62,0,0,0,.72-8.79,47.28,47.28,0,0,0-1.44-8.9c-.73-3-1.63-5.91-2.51-8.84-.8-2.67-2.19-5.12-2.81-7.85a10.3,10.3,0,0,1-.19-3.42,60.61,60.61,0,0,1,5.86-3.34c2.83-1.31,5.62-2.7,8.48-3.94,1.57-.69,3.31-1,4.8-1.84.45-.27,1-.67.9-1.24A6.58,6.58,0,0,0,102.58,255ZM86.14,52.32,85.92,52l.45.43.28.38c0,.12.05.24.08.36l-.12-.08C86.45,52.82,86.29,52.57,86.14,52.32ZM57.38,85.2c-3.71-1.4-7.35-3-11.15-4.13a33.11,33.11,0,0,0-7.31-1.38c-1.39-.09-2.78-.16-4.17-.2a10.78,10.78,0,0,0-1.82.07l-.13,0c-.37-.38-.74-.76-1.12-1.13a19.75,19.75,0,0,0-5.39-3.64c-1-.46-1.93-.94-2.92-1.34A16.51,16.51,0,0,0,20,72.6c-.88-.16-1.74-.35-2.6-.57l-.35-.09c2.14-3,3.56-6.61,5.36-9.81a42,42,0,0,1,8.27-10.72,19.42,19.42,0,0,1,11.86-5.33,16.84,16.84,0,0,1,3.54.21,33.21,33.21,0,0,1,4.07,1.11,9.19,9.19,0,0,0,3.83.48h.07a18.2,18.2,0,0,1,.8,1.7,14.3,14.3,0,0,1,.88,4.49c.1,1.54.09,3.08.24,4.61s.28,3,.39,4.55c.47,6,.92,12,3,17.72a.1.1,0,0,0,.13.06A7.89,7.89,0,0,1,57.38,85.2Z"></path></g></g></svg>
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <button class="btn border-warning b_black t_orange">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid-btn-block mb-2">
                <button class="btn border-warning b_black t_orange">ИЗБРАННЫЕ СТАТЬИ</button>
            </div>

            <div class="offset-artem-designer-2019">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="no-decor">
                            <div class="card item_card card-small b_light t_black d-flex align-content-between flex-wrap">
                                <div class="card-header w-100 pan">
                                    <em>ЖИВИ БАСКЕТБОЛОМ</em>
                                </div>
                                <div class="card-body mb-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                    <defs><style>.cls-1{fill:#f5f5f5;}</style></defs>
                                    <g id="ball_1"><g id="ball_2">
                                    <path class="cls-1" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                    <path class="cls-1" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                    <path class="cls-1" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                    <path class="cls-1" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                    <path class="cls-1" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                    </g></g>
                                    </svg>
                                </div>
                                <div class="card-footer pan">
                                    <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА ПЛОЩАДКЕ</em>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="no-decor">
                            <div class="card item_card card-small b_red t_black d-flex align-content-between flex-wrap">
                                <div class="card-header w-100 pan">
                                    <em>НЕ ПОПАЛ?</em>
                                </div>
                                <div class="card-body mb-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                    <defs><style>.cls-1{fill:#f5f5f5;}</style></defs>
                                    <g id="ball_1"><g id="ball_2">
                                    <path class="cls-1" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                    <path class="cls-1" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                    <path class="cls-1" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                    <path class="cls-1" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                    <path class="cls-1" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                    </g></g>
                                    </svg>
                                </div>
                                <div class="card-footer pan">
                                    <em>ВЫБИРАЕМ ОБУВЬ КАК У ДЖОРДАНА</em>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="no-decor">
                            <div class="card item_card card-small b_black t_white d-flex align-content-between flex-wrap">
                                <div class="card-header w-100 pan">
                                    <em>КУПИ МЯЧИК ЧТО ЛИ?</em>
                                </div>
                                <div class="card-body mb-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                    <defs><style>.cls-1{fill:#f5f5f5;}</style></defs>
                                    <g id="ball_1"><g id="ball_2">
                                    <path class="cls-1" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                    <path class="cls-1" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                    <path class="cls-1" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                    <path class="cls-1" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                    <path class="cls-1" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                    </g></g>
                                    </svg>
                                </div>
                                <div class="card-footer pan">
                                    <em>МОЖЕТ КОМУ ИМ УЕБЕШЬ ПО БАШКЕ...</em>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="no-decor">
                            <div class="card item_card card-small b_orange t_black d-flex align-content-between flex-wrap">
                                <div class="card-header w-100 pan">
                                    <em>НЕ ХОЧЕШЬ?</em>
                                </div>
                                <div class="card-body mb-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                    <defs><style>.cls-1{fill:#f5f5f5;}</style></defs>
                                    <g id="ball_1"><g id="ball_2">
                                    <path class="cls-1" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                    <path class="cls-1" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                    <path class="cls-1" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                    <path class="cls-1" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                    <path class="cls-1" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                    </g></g>
                                    </svg>
                                </div>
                                <div class="card-footer pan">
                                    <em>НУ И ПОШоЛ ТЫ НАХУЙ!</em>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mid-btn-block mb-2">
                <button class="btn border-warning b_black t_orange">ЕЩЁ ТЕБЕ ПОНРАВИТСЯ</button>
            </div>
            <div class="offset-artem-designer-2019">
                <div class="row no-gutters justify-content-around">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 card-deck">
                        <!--<div class="col-sm-12 col-md-6 col-lg-3 mb-1">-->
                        <div class="card item_card">
                            <img src="https://www.slamdunk.su/thumbs/5aedcfc77ad82a2653e8abc76605fe2f46b96316190e2.jpg" class="card-img-top" alt="">
                            <div class="card-footer mt-auto">
                                <p class="lead">Super Very Long Model name with number and more</p>
                                <p class="small">Short item description</p>
                                <div class="w-100 d-flex align-items-center mt-1">Price: 43 $ <a href="#" class="btn btn-sm b_black t_orange ml-auto">Buy now</a></div>
                            </div>
                            <div class="discount b_red t_black">
                                <span class=" p-2">
                                    СКИДКА
                                </span>
                            </div>
                        </div>
                        <!--                    </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 mb-1">-->
                        <div class="card item_card">
                            <img src="https://www.slamdunk.su/thumbs/5b239d7d48d70Jordan-Why-Not-Zer0.1-Fashion-King-AA2510-034-Release-Date.jpg" class="card-img-top" alt="">
                            <div class="card-footer mt-auto">
                                <p class="lead">Not all images have transparent background</p>
                                <p class="small">What to do... </p>
                                <div class="w-100 d-flex align-items-center mt-1">Price: 43 $ <a href="#" class="btn btn-sm b_black t_orange ml-auto">Buy now</a></div>
                            </div>
                            <div class="discount b_red t_black">
                                <span class=" p-2">
                                    СКИДКА
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 card-deck">
                        <div class="card item_card">
                            <img src="https://www.slamdunk.su/thumbs/5aeaff7772216nike-PG_2-BLACK_BLACK_WHITE_SOLAR_RED-1.jpg" class="card-img-top" alt="">
                            <div class="card-footer mt-auto">
                                <p class="lead">low Model name</p>
                                <p class="small">Short item description</p>
                                <div class="w-100 d-flex align-items-center mt-1">Price: 13 $ <a href="#" class="btn btn-sm b_black t_orange ml-auto">Buy now</a></div>
                            </div>
                            <div class="discount b_orange t_black">
                                <span class=" p-2">
                                    НОВИНКА
                                </span>
                            </div>
                        </div>
                        <!--</div>-->
                        <!--<div class="col-sm-12 col-md-6 col-lg-3 mb-1">-->
                        <div class="card item_card">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" class="card-img-top" alt="">
                            <div class="card-footer mt-auto">
                                <p class="lead">Super Very Long Model name with number and more</p>
                                <p class="small">Short item description</p>
                                <div class="w-100 d-flex align-items-center mt-1">Price: 55 $ <a href="#" class="btn btn-sm b_black t_orange ml-auto">Buy now</a></div>
                            </div>
                            <div class="discount b_red t_black">
                                <span class=" p-2">
                                    СКИДКА
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid-btn-block mb-2">
                <button class="btn border-warning b_black t_orange">СМОТРЕТЬ ЕЩЁ</button>
            </div>
        </div>
        <!-- ~~~~~~ END MAIN ~~~~~ -->
        <!-- ~~~~~~ SECONDARY ~~~~~ -->
        <div class="w-100 subscribe b_black">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <h4 class="col-sm-11 col-md-5 col-lg-3 offset-lg-3 t_white">ПОДПИШИСЬ НА НОВОСТИ SLUMDUNK И ПОЛУЧИ СКИДКУ 10%!</h4>
                    <div class="col-md-5 col-lg-3 mb-sm-3 mb-md-0">
                        <div class="input-group">
                            <input type="text" class="form-control border-warning" placeholder="АДРЕС ЭЛ.ПОЧТЫ" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn border-warning b_black t_light" type="button" id="button-addon2">
                                    <i class="fas fa-check"></i> 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="w-100 btm_links d-flex justify-content-center">
                    <div class="col-sm-6 col-md-3 col-lg-2 ml-4">
                        <h5>О компании</h5>
                        <ul>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Новости</a></li>
                            <li><a href="#">Гарантии</a></li>
                            <li><a href="#">Контакты</a></li>
                            <li><a href="#">Обратная связь</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <h5>Помощь</h5>
                        <ul>
                            <li><a href="#">Как заказать</a></li>
                            <li><a href="#">Доставка и оплата</a></li>
                            <li><a href="#">Программа лояльности</a></li>
                            <li><a href="#">Обмен и возврат</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2 d-sm-none d-lg-block">
                        <h5>Бренды</h5>
                        <ul>
                            <li><a href="#">Jordan</a></li>
                            <li><a href="#">Nike</a></li>
                            <li><a href="#">Under Armour</a></li>
                            <li><a href="#">Spalding</a></li>
                            <li><a href="#">Molten</a></li>
                            <li><a href="#">Mitchell & Ness</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2 d-sm-none d-lg-block">
                        <h5>Магазин</h5>
                        <ul>
                            <li><a href="#">Кросовки</a></li>
                            <li><a href="#">Толстовки</a></li>
                            <li><a href="#">Футболки и майки</a></li>
                            <li><a href="#">Компрессионное белье</a></li>
                            <li><a href="#">Мячи</a></li>
                        </ul>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center">
                    <ul class="social-rate align-items-center">
                        <h5>ОЦЕНИТЕ НАС </h5>
                        <li><a href="#" class="" target="_blank" rel="noindex, nofollow"><i class="fab fa-instagram fa-2x mr-3"></i></a></li>
                        <li><a href="#" class="" target="_blank" rel="noindex, nofollow"><i class="fab fa-vk fa-2x mr-3"></i></a></li>
                        <li><a href="#" class="" target="_blank" rel="noindex, nofollow"><i class="fab fa-facebook fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ~~~~~~ END SECONDARY ~~~~~ -->
        <!-- ~~~~~~ FOOTER ~~~~~ -->
        <footer class="b_black">
            <div class="container">
                <div class="row">
                    <div class="w-100 d-flex justify-content-center p-2 mb-1">
                        <a class="t_light w-50 text-right mr-2" href="#">Юридическая информация</a>
                        <a class="t_light w-25 text-center" href="#">Все права защищены</a>
                        <a class="t_light w-50 ml-2" href="#">Политика конфиденциальности</a>
                    </div>
                    <div class="w-100 pb-2 text-center t_orange"><small>&COPY; <?php echo date("Y"); ?> SLAMDUNK</small> </div>
                </div>
            </div>
        </footer>
        <!-- ~~~~~~ END FOOTER ~~~~~ -->
        <!-- ~~~~~~ JS ~~~~~ -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/large_app.js"></script>
        <!-- ~~~~~~ END JS ~~~~~ -->
    </body>
</html>