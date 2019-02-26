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

        <title>Main page v=<?php echo $ver;?></title>
        <!-- // css block -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/colors.css?v=<?php echo $ver;?>">
        <link rel="stylesheet" href="assets/css/styles_main.css?v=<?php echo $ver;?>">
    </head>
    <body class="d-flex flex-column h-100">
        <header>
            <div id="collapseParent" class="bg-color-smoke">
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
                                <h4>Номер нашего бесплатного телефона 8-800-500-62-63. <a href="tel:8-800-500-62-63" class="btn btn-outline-dark">Позвонить в один клик!</a></h4>
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
                                    <a class="btn btn-outline-dark" href="/slamdunk/menu.php"><i class="fa fa-home"></i><span class="d-inline d-lg-none d-md-block"> НА&nbsp;ГЛАВНУЮ</span></a>
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
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="btnGroupDrop1">
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
            
        </main>
        <footer class="bg-color-black">
            
        </footer>
        <!-- // js block -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/current-device.min.js"></script>
        <script src="assets/js/app_main.js?v=<?php echo $ver;?>"></script>
    </body>
</html>