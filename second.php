<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Second var</title>
        <!-- // css block -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/menu_styles.css">
    </head>
    <body class="d-flex flex-column h-100">
        <header>
            <div id="collapseParent" class="bg-light">
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
            <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
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
                                    <a class="btn btn-outline-dark" href="#"><i class="fa fa-home"></i><span class="d-inline d-lg-none d-md-block"> НА&nbsp;ГЛАВНУЮ</span></a>
                                </li>
                                <li class="nav-item dropdown position-static">
                                    <a class="btn btn-outline-dark dropdown-toggle" href="#" id="cat_clothes" 
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ОДЕЖДА</a>
                                    <div class="dropdown-menu w-100" aria-labelledby="cat_clothes">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="nav nav-pills nav-fill">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Мужская</a>
                                                            <a class="nav-link" href="#">Женская</a>
                                                            <a class="nav-link" href="#">Для детей</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Jordan</a>
                                                            <a class="nav-link" href="#">Nike</a>
                                                            <a class="nav-link" href="#">Molten</a>
                                                            <a class="nav-link" href="#">Mitchell & Ness</a>
                                                            <a class="nav-link" href="#">Under Armour</a>
                                                            <a class="nav-link" href="#">Spalding</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Шорты</a>
                                                            <a class="nav-link" href="#">Футболки и майки</a>
                                                            <a class="nav-link" href="#">Компрессионная</a>
                                                            <a class="nav-link" href="#">Куртки/ветровки</a>
                                                            <a class="nav-link" href="#">Толстовки</a>
                                                            <a class="nav-link" href="#">Брюки</a>
                                                            <a class="nav-link" href="#">Носки</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Тренировочная</a>
                                                            <a class="nav-link" href="#">Уличная</a>
                                                            <a class="nav-link" href="#">Зима</a>
                                                            <a class="nav-link" href="#">Весна</a>
                                                            <a class="nav-link" href="#">Лето</a>
                                                            <a class="nav-link" href="#">Осень</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown position-static">
                                    <a class="btn btn-outline-dark dropdown-toggle" href="#" id="cat_shoes" 
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ОБУВЬ</a>
                                    <div class="dropdown-menu w-100" aria-labelledby="cat_shoes">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="nav nav-pills nav-fill">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Мужская</a>
                                                            <a class="nav-link" href="#">Женская</a>
                                                            <a class="nav-link" href="#">Для детей</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Jordan</a>
                                                            <a class="nav-link" href="#">Nike</a>
                                                            <a class="nav-link" href="#">Molten</a>
                                                            <a class="nav-link" href="#">Mitchell & Ness</a>
                                                            <a class="nav-link" href="#">Under Armour</a>
                                                            <a class="nav-link" href="#">Spalding</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Кросовки</a>
                                                            <a class="nav-link" href="#">Баскетбольные</a>
                                                            <a class="nav-link" href="#">Зимние кросовки</a>
                                                            <a class="nav-link" href="#">Сникерсы</a>
                                                            <a class="nav-link" href="#">Для бега</a>
                                                            <a class="nav-link" href="#">Кеды</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Ретро</a>
                                                            <a class="nav-link" href="#">Стритвер</a>
                                                            <a class="nav-link" href="#">Сланцы</a>
                                                            <a class="nav-link" href="#">Шлепанцы</a>
                                                            <a class="nav-link" href="#">Въетнамки</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-dark" href="#">МЯЧИ <i class="fab fa-dribbble"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-dark" href="#">АКСЕССУАРЫ</a>
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
                                            <a class="dropdown-item" href="#"><i class="fas fa-location-arrow"></i> Москва</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-location-arrow"></i> Самара</a>
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
                                        <i class="fa fa-phone-volume"></i>
                                    </button>
                                    <button class="btn btn-outline-dark" type="button"
                                            data-toggle="collapse" aria-expanded="false" aria-label="Open panel"
                                            data-target="#userPanel" aria-controls="userPanel">
                                        <i class="fa fa-user"></i>&nbsp;
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <h1 class="text-dark">Menu example</h1>
                <p>100% Адаптация меню под ширину экрана > 1400</p>
                <p>99% Адаптация меню для всех видов мобильных устройств.</p>
                <hr/>
                <p>Правый блок всегда справа, на любом устройстве.</p>
                <p>Левый блок трансформируется в блоки на мобиле и прячется, выезжает слева, с пиздатой кнопкой (гамубергер) трансформирующейся в кнопку закрытия меню.</p>
                <p>Дропдауны сейчас активируются по клику, что логично ввиду сворачивания до такой ширины только на мобильных устройствах, где в любом раскладе по ним прийдется тапнуть.</p>
                <p>Для наглядности забиты категориями кнопки "Одежда" и "Обувь".</p>
                <p>В кнопки возможно встраивание иконок, довольно ровно. Лишь бы иконки были пиздатыми и симметричными...</p>
                <p>Сохранена логика выезжающих подменю для правого блока. Но не сверху, а снизу. Сверху не получается, т.к. свернутые в блоки категории слева требуют себе стабильное место на экране...</p>
                <p>Некоторые моменты выполненны именно так из других соображений, но перечислять их все займет слишком много страниц, а чукча - как известно не писатель!</p>
                
            </div>
        </main>
        <footer class="mt-auto py-2">
            <div class="container">
                <p class="text-light text-center">Footer string</p>
            </div>
        </footer>
        <!-- // js block -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/menu_app.js"></script>
    </body>
</html>