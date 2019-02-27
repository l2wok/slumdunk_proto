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
                                        <div class="dropdown-menu short-drop" aria-labelledby="btnGroupDrop1">
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
        <!-- Main place -->
        <main class="mb-auto">
            <!-- Carusel place -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
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
                                </g></g></g></g></g></g></svg>
                            </div>
                            <p class="pb-2">С доставкой в удобное для вас время</p>
                            <button class="btn btn-dark bg-color-black" onclick="jQuery(alert('Клик на СМОТРЕТЬ КАТАЛОГ'))">СМОТРЕТЬ КАТАЛОГ</button>
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
                <a class="carousel-control-prev " href="#carousel" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left fa-3x "></i>
                </a>
                <a class="carousel-control-next " href="#carousel" role="button" data-slide="next">
                    <i class="fas fa-chevron-right fa-3x "></i>
                </a>
            </div>
            <!-- END Carusel place -->
            
            

            
            <div class="container">
                <!-- Middle buttons -->
                <div class="midBtn my-1">
                    <button class="btn btn-dark bg-color-black" onclick="jQuery(alert('Клик на Новые Поступления'))">НОВЫЕ ПОСТУПЛЕНИЯ</button>
                </div>

                <!-- FIrst items cards -->
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="text-decoration-none font-color-black" onclick="jQuery(alert('Клик на карточку товара без рамки (верхний ряд)'))">
                            <div class="item_card card-big card-hover-shadow d-flex">
                                <img src="https://www.slamdunk.su/thumbs/5c7530c89e00dAO6224-004-PHSRH000-2000.jpeg" class="item-card-image" alt="">
                                <div class="card-img-overlay d-flex flex-column align-items-baseline font-shadow-smoke">
                                    <p class="lead ml-2 mt-2">Jordan Ultra Fly 3 Low</p>
                                    <p class="w-100 mt-auto lead text-center"><strong>Цена: </strong>9 190 р.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="text-decoration-none font-color-black" onclick="jQuery(alert('Клик на карточку товара без рамки (верхний ряд)'))">
                            <div class="item_card card-big card-hover-shadow d-flex">
                                <img src="https://www.slamdunk.su/thumbs/5c409dec2c2a0AO7893-002-PHSRH000-2000.jpeg" class="item-card-image" alt="">
                                <div class="card-img-overlay d-flex flex-column align-items-baseline font-shadow-smoke">
                                    <p class="lead ml-2 mt-2">Nike Hyperdunk X</p>
                                    <p class="w-100 mt-auto lead text-center"><strong>Цена: </strong>10 790 р.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="text-decoration-none font-color-black" onclick="jQuery(alert('Клик на карточку товара без рамки (верхний ряд)'))">
                            <div class="item_card card-big card-hover-shadow d-flex">
                                <img src="https://www.slamdunk.su/thumbs/5bbbfc774f1ee.jpg" class="item-card-image" alt="">
                                <div class="card-img-overlay d-flex flex-column align-items-baseline font-shadow-smoke">
                                    <p class="lead ml-2 mt-2">Jordan Jumpman Hustle</p>
                                    <p class="w-100 mt-auto lead text-center"><strong>Цена: </strong>8 290 р.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-1">
                        <a href="#" class="text-decoration-none font-color-black" onclick="jQuery(alert('Клик на карточку товара c уебским фоном'))">
                            <div class="item_card card-big card-hover-shadow d-flex">
                                <img src="https://www.slamdunk.su/thumbs/5b4b6bc7ca5052ce5bb7011d7c634596d5a08d92222e1.jpg" class="item-card-image" alt="">
                                <div class="card-img-overlay d-flex flex-column align-items-baseline font-shadow-smoke">
                                    <p class="lead ml-2 mt-2">Баскетбольные кроссовки Nike&nbsp;KD&nbsp;Trey&nbsp;5&nbsp;VI</p>
                                    <p class="w-100 mt-auto lead text-center"><strong>Цена: </strong>6 490 р.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="midBtn my-1">
                    <button class="btn btn-dark bg-color-black" onclick="jQuery(alert('Клик на КОЛЛЕКЦИИ'))">КОЛЛЕКЦИИ</button>
                </div>
                <!-- BLOG long cards -->
                <div class="row">
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card card-big bg-color-black font-color-smoke font-shadow-black">
                            <img src="assets/img/123456.png" class="card-img" alt="">
                            <div class="card-img-overlay card-blog p-3">
                                <h2 class="">Nike Air Max 95 SE</h2>
                                <p>Признанная классика. Обувь, которая стала итогом многолетней кропотливой работы ведущих дизайнеров Nike. Обувь для твоих побед.</p>
                                
                                <a href="#" class="btn btn-dark bg-color-black">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card card-big bg-color-black font-color-smoke font-shadow-black">
                            <img src="assets/img/card-big.png" class="card-img" alt="">
                            <div class="card-img-overlay d-flex flex-column align-items-start card-blog p-3">
                                <h2 class="mt-auto">Nike Air Max 95 SE</h2>
                                <p>Признанная классика. Обувь, которая стала итогом многолетней кропотливой работы ведущих дизайнеров Nike. Обувь для твоих побед.</p>
                                
                                <a href="#" class="btn btn-dark bg-color-black">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card card-big bg-color-black font-shadow-smoke">
                            <img src="assets/img/card-big.png" class="card-img" alt="">
                            <div class="card-img-overlay card-blog p-3 d-flex flex-column align-items-start">
                                <h2 class="font-color-black">Nike Air Max 95 SE</h2>
                                <p class="font-color-black">Признанная классика. Обувь, которая стала итогом многолетней кропотливой работы ведущих дизайнеров Nike. Обувь для твоих побед.</p>
                                
                                <a href="#" class="btn btn-dark bg-color-black">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card card-big bg-color-black font-shadow-smoke">
                            <img src="assets/img/card-big.png" class="card-img" alt="">
                            <div class="card-img-overlay card-blog p-3 d-flex flex-column align-items-start">
                                <h2 class="mt-auto font-color-black">Nike Air Max 95 SE</h2>
                                <p class="font-color-black">Признанная классика. Обувь, которая стала итогом многолетней кропотливой работы ведущих дизайнеров Nike. Обувь для твоих побед.</p>
                                
                                <a href="#" class="btn btn-dark bg-color-black">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card card-big font-color-black font-shadow-light">
                            <img src="assets/img/card-big.png" class="card-img" alt="">
                            <div class="card-img-overlay card-blog d-flex align-items-end">
                                <div class="shadow-bg w-100">
                                    <h2 class="">Nike Air Max 95 SE</h2>
                                    <p class="lead">Признанная классика. Обувь, которая стала итогом многолетней кропотливой работы ведущих дизайнеров Nike. Обувь для твоих побед.</p>
                                    <a href="#" class="btn btn-dark bg-color-black">ПОДРОБНЕЕ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card card-big font-color-black font-shadow-light">
                            <img src="assets/img/card-big.png" class="card-img" alt="">
                            <div class="card-img-overlay card-blog">
                                <div class="shadow-bg w-100">
                                    <h2 class="">Nike Air Max 95 SE</h2>
                                    <p class="lead">Признанная классика. Обувь, которая стала итогом многолетней кропотливой работы ведущих дизайнеров Nike. Обувь для твоих побед.</p>
                                    <a href="#" class="btn btn-dark bg-color-black">ПОДРОБНЕЕ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END BLOG long cards -->
                <!-- BLOG short cards -->

                <div class="offset-artem-designer-2019">
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья '))">
                                <div class="item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke  card-hover-shadow">
                                    <div class="w-100 p-4 h-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#333;}</style></defs>
                                        <g id="ball_1"><g id="ball_2">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="mt-auto p-4 w-100 lead text-center">
                                        <strong><em>ЖИВИ БАСКЕТБОЛОМ</em></strong>
                                        <br>
                                        <em class="small">
                                            ПЯТЬ СПОСОБОВ НЕ СДОХНУТЬ НА ПЛОЩАДКЕ
                                        </em>
                                    </div>
                                </div>
                            </a>
                        </div>
                        

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 2 (без рамки, с подсветкой по наведению)'))">
                                <div class="item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke  card-hover-shadow">
                                    <div class="w-100 p-4 h-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#333;}</style></defs>
                                        <g id="ball_3"><g id="ball_4">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="mt-auto p-4 w-100 lead text-center">
                                        <strong><em>НЕ ПОПАЛ?</em></strong>
                                        <br>
                                        <em class="small">
                                            Выбираем обувь как у джордана
                                        </em>
                                    </div>
                                </div>
                            </a>
                        </div>
                        

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 2 (без рамки, с подсветкой по наведению)'))">
                                <div class="item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke  card-hover-shadow">
                                    <div class="w-100 p-4 h-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#333;}</style></defs>
                                        <g id="ball_5"><g id="ball_6">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="mt-auto p-4 w-100 lead text-center">
                                        <strong><em>ХОЧЕШЬ БЫТЬ АХУЕННЫМ?</em></strong>
                                        <br>
                                        <em class="small">
                                            Будь им!
                                        </em>
                                    </div>
                                </div>
                            </a>
                        </div>
                        

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-1">
                            <a href="#" class="text-decoration-none" onclick="jQuery(alert('Клик на Статья 2 (без рамки, с подсветкой по наведению)'))">
                                <div class="item_card std_height_300 d-flex flex-column font-color-black font-shadow-smoke  card-hover-shadow">
                                    <div class="w-100 p-4 h-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.45 114.48" width="100%" height="135">
                                        <defs><style>.cls-bl{fill:#333;}</style></defs>
                                        <g id="ball_7"><g id="ball_8">
                                        <path class="cls-bl" d="M13.72,86.13c.63-18.52,14.38-33.85,28.51-44.35C57.6,30.36,76.94,22.18,96.28,22c2.68,0,2.68-4.17,0-4.15-20.56.17-40.77,8.9-57.08,21-15,11.18-29,27.66-29.64,47.24-.09,2.68,4.06,2.67,4.15,0Z"/>
                                        <path class="cls-bl" d="M21.77,12.8c-.37,5.44,1.94,11.46,3.68,16.5A147,147,0,0,0,38.37,56.7C50.5,77,68.51,95.35,92.15,101c2.6.62,3.71-3.38,1.1-4C70.54,91.57,53.7,74,42,54.61A141.65,141.65,0,0,1,29.68,28.82c-1.73-4.85-4.12-10.76-3.75-16,.18-2.67-4-2.66-4.15,0Z"/>
                                        <path class="cls-bl" d="M4.77,43.31c22.73-1.61,20.47,26,24.36,41.11C31.08,92,34.47,99.29,40,104.9c5.91,6,14.1,8.52,22.31,9.1,2.67.19,2.65-4,0-4.15-9.14-.64-17.22-4.23-22.68-11.77-5-6.94-7.07-15.71-8.41-24-1.4-8.69-1.6-17.16-6.27-24.92C20.61,41.93,13,38.58,4.77,39.16c-2.65.19-2.67,4.34,0,4.15Z"/>
                                        <path class="cls-bl" d="M43.07,3.22c-2.56,6.19-5.18,14.26-4.27,22,1.25,10.52,9,20.06,19.26,22.95,8.56,2.42,17.64,2.25,26.22,4.72,12,3.44,18.58,12.36,20.84,24.36.5,2.63,4.5,1.51,4-1.1-2-10.5-7.16-19.56-16.86-24.56-8.23-4.25-17.7-4.8-26.7-6.14-3.63-.54-7.42-1.19-10.7-2.91-5.72-3-9.87-9-11.49-15.17-2.11-8,.67-15.74,3.69-23,1-2.47-3-3.54-4-1.1Z"/>
                                        <path class="cls-bl" d="M22.38,11.33c-12,9.31-20,22.26-22,37.42-1.76,13.69,2.25,27.84,9.65,39.34a58.26,58.26,0,0,0,31.84,24.32c14.6,4.42,30.21,1.37,43.4-5.77C108,94.33,117.81,68.68,111.64,44c-5.85-23.42-25.5-42.22-50-43.9C47.93-.82,34.43,4.08,22.8,11c-2.3,1.37-.21,5,2.1,3.58,12.94-7.7,27.9-12.43,43-9.52,12,2.33,22.6,9.64,29.91,19.37C112.5,44,114,72.9,97.45,91.82,87.52,103.18,72,110,57,110.34c-14.69.3-28.34-6.75-38.07-17.46A57.39,57.39,0,0,1,4.2,53.78c.26-16,8.7-29.92,21.11-39.52,2.12-1.63-.85-4.55-2.94-2.93Z"/>
                                        </g></g>
                                        </svg>
                                    </div>
                                    <div class="mt-auto p-4 w-100 lead text-center">
                                        <strong><em>ЕЩЕ ХОЧУ ВСЕ И МНОГО!</em></strong>
                                        <br>
                                        <em class="small">
                                            Голову не еби, если хочешь - просто бери!
                                        </em>
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
        
        <!-- Main place -->
        
        <!-- Footer place -->
        <footer class="bg-color-black">

        </footer>
        <!-- END Footer place -->
        <!-- // js block -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/current-device.min.js"></script>
        <script src="assets/js/app_main.js?v=<?php echo $ver; ?>"></script>
    </body>
</html>