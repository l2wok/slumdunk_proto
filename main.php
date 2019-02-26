<?php
$ver = 100000 + rand(1, 100000);
/**
 * remove VER in local files and check title
 */
?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Main page v=<?php echo $ver; ?></title>
        <!-- // css block -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/colors.css?v=<?php echo $ver; ?>">
        <link rel="stylesheet" href="assets/css/styles_main.css?v=<?php echo $ver; ?>">
    </head>
    <body class="d-flex flex-column h-100">
        <header>
            <div id="collapseParent" class="bg-color-smoke pb-1">
                <div class="container">
                    <div class="collapse" id="userPanel" data-parent="#collapseParent">
                        <div class="row">
                            <div class="col-md-12 col-lg-8 my-1">
                                <div class="card">
                                    <div class="card-header">
                                        Мы не хотим тратить Ваше время на регистрации или напоминания паролей.
                                    </div>
                                    <div class="card-body">
                                        Для того чтобы сделать заказ достаточно представится используя соц. сети - VK, FB или Instagaram
                                    </div>
                                    <div class="card-footer d-flex justify-content-center">
                                        <button class="btn btn-sm btn-outline-dark mr-2">ВХОД ЧЕРЕЗ <i class="fab fa-vk"></i></button>
                                        <button class="btn btn-sm btn-outline-dark mr-2">ВХОД ЧЕРЕЗ <i class="fab fa-facebook"></i></button>
                                        <button class="btn btn-sm btn-outline-dark">ВХОД ЧЕРЕЗ <i class="fab fa-instagram"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 my-1">
                                <div class="card">
                                    <div class="card-header">
                                        Ваша корзина пуста!
                                    </div>
                                    <div class="card-body">
                                        Товары не добавлены
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-sm btn-block btn-outline-dark"><i class="fa fa-phone-volume"></i> Сделать заказ по телефону</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="callPanel" data-parent="#collapseParent">
                        <div class="row">
                            <div class="w-100 text-center py-1">
                                <h4 class="only-desktop">Номер нашего бесплатного телефона 8-800-500-62-63.</h4>
                                <a href="tel:88005006263" class="btn btn-outline-dark only-mobile">Позвонить 8-800-500-62-63</a>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="searchPanel" data-parent="#collapseParent">
                        <div class="row">
                            <div class="w-100 text-center py-1">
                                <div class="input-group col-sm-12 col-md-4 offset-md-4">
                                    <input id="search_input" type="text" class="form-control" placeholder="Наименование товара или его категория" aria-describedby="s_input">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="s_input">Поиск</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-end-shadow-block"></div>
            </div>
            <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-color-smoke">
                <div class="container">
                    <div class="w-100 top-nav d-flex align-items-center">
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" 
                                data-target="#j-nav" aria-controls="j-nav" 
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse offcanvas-collapse" id="j-nav">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a class="btn btn-outline-dark" href="/slamdunk/main.php"><i class="fa fa-home"></i><span class="d-inline d-lg-none d-md-block"> НА&nbsp;ГЛАВНУЮ</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="btn btn-outline-dark dropdown-toggle" href="#" id="cat-col"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> стдСтолбик
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="cat-col">
                                        <a class="dropdown-item" href="#">Кросовки</a>
                                        <a class="dropdown-item" href="#">Зимние кросовки</a>
                                        <a class="dropdown-item" href="#">Кеды</a>
                                        <a class="dropdown-item" href="#">Сланцы</a>
                                        <a class="dropdown-item" href="#">Дети</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-dark" href="#">МЯЧИ <i class="fab fa-dribbble"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-dark" href="#">СКИДКИ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ml-auto">
                            <ul class="navbar-nav nav-right">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <!--<div class="btn-group d-none d-md-none d-lg-block" role="group">-->
                                    <div class="btn-group " role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                            Регион
                                        </button>
                                        <div class="dropdown-menu short-drop dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#"><i class="fas fa-location-arrow"></i> Авто-определение</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-location-arrow"></i> Выбрать регион</a>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-dark" type="button"
                                            data-toggle="collapse" aria-expanded="false" aria-label="Open panel"
                                            data-target="#searchPanel" aria-controls="searchPanel">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button class="btn btn-outline-dark" type="button"
                                            data-toggle="collapse" aria-expanded="false" aria-label="Open panel"
                                            data-target="#callPanel" aria-controls="callPanel">
                                        <i class="fa fa-phone fa-rotate-90"></i>
                                    </button>
                                    <button class="btn btn-outline-dark" type="button"
                                            data-toggle="collapse" aria-expanded="false" aria-label="Open panel"
                                            data-target="#userPanel" aria-controls="userPanel">
                                        <i class="fa fa-user"></i>
                                    </button>
                                    <button class="btn btn-outline-dark" type="button">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main class="mb-auto">
            <!-- Carusel place -->


            <div class="container">
                <div class="midBtn my-1">
                    <button class="btn btn-dark bg-color-black" onclick="jQuery(alert('Клик на Новые Поступления'))">НОВЫЕ ПОСТУПЛЕНИЯ</button>
                </div>

                <!-- FIrst items cards -->
                <div class="row">

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">
                            <div class="card-img-overlay d-flex flex-column align-items-start justify-content-center">
                                <p class="lead w-100 mb-auto">Very very ultra very LONG collection&nbsp;name SYKABLA</p>
                                <button class="btn btn-dark bg-color-black align-self-center" onclick="jQuery(alert('Клик на Very very ultra ПОДРОБНЕЕ'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">
                            <div class="card-img-overlay d-flex flex-column align-items-start justify-content-center">
                                <p class="lead w-100 mb-auto">Very very ultra very LONG collection&nbsp;name SYKABLA</p>
                                <button class="btn btn-dark bg-color-black align-self-center" onclick="jQuery(alert('Клик на Very very ultra ПОДРОБНЕЕ'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">
                            <div class="card-img-overlay d-flex flex-column align-items-start justify-content-center">
                                <p class="lead w-100 mb-auto">Very very ultra very LONG collection&nbsp;name SYKABLA</p>
                                <button class="btn btn-dark bg-color-black align-self-center" onclick="jQuery(alert('Клик на Very very ultra ПОДРОБНЕЕ'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">
                            <div class="card-img-overlay d-flex flex-column align-items-start justify-content-center">
                                <p class="lead w-100 mb-auto">Very very ultra very LONG collection&nbsp;name SYKABLA</p>
                                <button class="btn btn-dark bg-color-black align-self-center" onclick="jQuery(alert('Клик на Very very ultra ПОДРОБНЕЕ'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="card item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center">
                                <button class="btn btn-dark bg-color-black" onclick="jQuery(alert('Клик на ПОДРОБНЕЕ vs border'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="card item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center">
                                <button class="btn btn-dark bg-color-black" onclick="jQuery(alert('Клик на ПОДРОБНЕЕ vs border'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="card item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center">
                                <button class="btn btn-dark bg-color-black" onclick="jQuery(alert('Клик на ПОДРОБНЕЕ vs border'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="card item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">
                            <div class="card-img-overlay d-flex align-items-end justify-content-center">
                                <button class="btn btn-dark bg-color-black" onclick="jQuery(alert('Клик на ПОДРОБНЕЕ vs border'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="no-decor" onclick="jQuery(alert('Клик на Card no-border'))">
                            <div class="item_card std_height_400 card-hover-shadow">
                                <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="no-decor" onclick="jQuery(alert('Клик на Card no-border'))">
                            <div class="item_card std_height_400 card-hover-shadow">
                                <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="no-decor" onclick="jQuery(alert('Клик на Card no-border'))">
                            <div class="item_card std_height_400 card-hover-shadow">
                                <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="no-decor" onclick="jQuery(alert('Клик на Card no-border'))">
                            <div class="item_card std_height_400 card-hover-shadow">
                                <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="card item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">

                            <div class="card-img-overlay d-flex flex-column align-items-start justify-content-center">
                                <p class="lead w-100 mb-auto">Model name # 323423</p>
                                <button class="btn btn-dark bg-color-black align-self-center" onclick="jQuery(alert('Клик на ПОДРОБНЕЕ in stdCard'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="card item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">

                            <div class="card-img-overlay d-flex flex-column align-items-start justify-content-center">
                                <p class="lead w-100 mb-auto">Model name # 323423</p>
                                <button class="btn btn-dark bg-color-black align-self-center" onclick="jQuery(alert('Клик на ПОДРОБНЕЕ in stdCard'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="card item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">

                            <div class="card-img-overlay d-flex flex-column align-items-start justify-content-center">
                                <p class="lead w-100 mb-auto">Model name # 323423</p>
                                <button class="btn btn-dark bg-color-black align-self-center" onclick="jQuery(alert('Клик на ПОДРОБНЕЕ in stdCard'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <div class="card item_card std_height_400">
                            <img src="https://www.slamdunk.su/thumbs/5b7578ecd5b805b4b432f16c7car0458_600-0-1.jpg" width="100%" class="card-img" alt="">

                            <div class="card-img-overlay d-flex flex-column align-items-start justify-content-center">
                                <p class="lead w-100 mb-auto">Model name # 323423</p>
                                <button class="btn btn-dark bg-color-black align-self-center" onclick="jQuery(alert('Клик на ПОДРОБНЕЕ in stdCard'))">ПОДРОБНЕЕ</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="midBtn my-1">
                    <button class="btn btn-dark bg-color-black" onclick="jQuery(alert('Клик на КОЛЛЕКЦИИ'))">КОЛЛЕКЦИИ</button>
                </div>
                <!-- BLOG short card -->

                <div class="offset-artem-designer-2019">
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 1 (серая верх низ)'))">
                                <div class="card item_card std_height_300 d-flex align-content-between flex-wrap bg-color-light font-color-black font-shadow-smoke">
                                    <div class="card-header w-100">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
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
                                    <div class="card-footer">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 1 (серая верх низ)'))">
                                <div class="card item_card std_height_300 d-flex align-content-between flex-wrap bg-color-light font-color-black font-shadow-smoke">
                                    <div class="card-header w-100">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
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
                                    <div class="card-footer">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 1 (серая верх низ)'))">
                                <div class="card item_card std_height_300 d-flex align-content-between flex-wrap bg-color-light font-color-black font-shadow-smoke">
                                    <div class="card-header w-100">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
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
                                    <div class="card-footer">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 1 (серая верх низ)'))">
                                <div class="card item_card std_height_300 d-flex align-content-between flex-wrap bg-color-light font-color-black font-shadow-smoke">
                                    <div class="card-header w-100">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
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
                                    <div class="card-footer">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 2 (без рамки, с подсветкой по наведению)'))">
                                <div class="item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke  card-hover-shadow">
                                    <div class="mb-auto w-100 p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#777;}</style></defs>
                                        <g id="ball_1"><g id="ball_2">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="p-2 w-100 lead text-center">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                    </div>
                                    <div class="p-2 w-100 text-center">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА&nbsp;ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 2 (без рамки, с подсветкой по наведению)'))">
                                <div class="item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke  card-hover-shadow">
                                    <div class="mb-auto w-100 p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#777;}</style></defs>
                                        <g id="ball_1"><g id="ball_2">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="p-2 w-100 lead text-center">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                    </div>
                                    <div class="p-2 w-100 text-center">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА&nbsp;ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 2 (без рамки, с подсветкой по наведению)'))">
                                <div class="item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke  card-hover-shadow">
                                    <div class="mb-auto w-100 p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#777;}</style></defs>
                                        <g id="ball_1"><g id="ball_2">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="p-2 w-100 lead text-center">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                    </div>
                                    <div class="p-2 w-100 text-center">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА&nbsp;ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 2 (без рамки, с подсветкой по наведению)'))">
                                <div class="item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke  card-hover-shadow">
                                    <div class="mb-auto w-100 p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#777;}</style></defs>
                                        <g id="ball_1"><g id="ball_2">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="p-2 w-100 lead text-center">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                    </div>
                                    <div class="p-2 w-100 text-center">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА&nbsp;ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 3 (серая текст снизу)'))">
                                <div class="card item_card std_height_300 d-flex align-content-between bg-color-light font-color-black font-shadow-smoke">
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
                                    <div class="card-footer">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                        <br><em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 3 (серая текст снизу)'))">
                                <div class="card item_card std_height_300 d-flex align-content-between bg-color-light font-color-black font-shadow-smoke">
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
                                    <div class="card-footer">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                        <br><em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 3 (серая текст снизу)'))">
                                <div class="card item_card std_height_300 d-flex align-content-between bg-color-light font-color-black font-shadow-smoke">
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
                                    <div class="card-footer">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                        <br><em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 3 (серая текст снизу)'))">
                                <div class="card item_card std_height_300 d-flex align-content-between bg-color-light font-color-black font-shadow-smoke">
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
                                    <div class="card-footer">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                        <br><em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 4 (без заливки стдКарточка)'))">
                                <div class="card item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke">
                                    <div class="mb-auto w-100 p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#777;}</style></defs>
                                        <g id="ball_1"><g id="ball_2">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="p-2 w-100 lead text-center">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                    </div>
                                    <div class="p-2 w-100 text-center">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА&nbsp;ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>
                        

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 4 (без заливки стдКарточка)'))">
                                <div class="card item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke">
                                    <div class="mb-auto w-100 p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#777;}</style></defs>
                                        <g id="ball_1"><g id="ball_2">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="p-2 w-100 lead text-center">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                    </div>
                                    <div class="p-2 w-100 text-center">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА&nbsp;ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>
                        

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 4 (без заливки стдКарточка)'))">
                                <div class="card item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke">
                                    <div class="mb-auto w-100 p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#777;}</style></defs>
                                        <g id="ball_1"><g id="ball_2">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="p-2 w-100 lead text-center">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                    </div>
                                    <div class="p-2 w-100 text-center">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА&nbsp;ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>
                        

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 4 (без заливки стдКарточка)'))">
                                <div class="card item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke">
                                    <div class="mb-auto w-100 p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#777;}</style></defs>
                                        <g id="ball_1"><g id="ball_2">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="p-2 w-100 lead text-center">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                    </div>
                                    <div class="p-2 w-100 text-center">
                                        <em>ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА&nbsp;ПЛОЩАДКЕ</em>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>

                <div class="midBtn my-1">
                    <button class="btn btn-dark bg-color-black" onclick="jQuery(alert('Клик на ЕЩЕ ТЕБЕ ПОНРАВИТСЯ'))">ЕЩЕ ТЕБЕ ПОНРАВИТСЯ</button>
                </div>
                <!--  -->
            </div>
        </main>
        <footer class="bg-color-black">

        </footer>
        <!-- // js block -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/current-device.min.js"></script>
        <script src="assets/js/app_main.js?v=<?php echo $ver; ?>"></script>
    </body>
</html>