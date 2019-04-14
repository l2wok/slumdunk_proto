<!-- header -->
<header id="j-header" class="top-menu container-fluid bg-light">
    <nav class="navbar navbar-expand-lg">
        <div class="container position-relative">
            <div id="j-toaster" aria-live="polite" aria-atomic="true" style="position: absolute; top:4rem; left: 0; overflow: visible;"></div>
            <div class="nav-main d-flex align-items-center justify-content-between">
                <button id="j-toogler" class="navbar-toggler collapsed" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation"
                        data-target="#j-nav" aria-controls="j-nav">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a href="<?php echo $data['pref']; ?>" class="logo" title="На главную">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96">
                        <defs><style>.cls-logo-1{fill-rule:evenodd;}.cls-logo-white{fill:#fefefe;}.cls-logo-orange{fill:#f60;}</style></defs>
                        <g id="Layer_logo" data-name="Layer logo"><g id="Layer_logo_1" data-name="Layer logo 1">
                                <path class="cls-logo-1" d="M9.6,0H86.4A9.63,9.63,0,0,1,96,9.6V86.4A9.63,9.63,0,0,1,86.4,96H9.6A9.63,9.63,0,0,1,0,86.4V9.6A9.63,9.63,0,0,1,9.6,0"/><path class="cls-logo-white" d="M24.26,30.3q0,4.45-1.83,6.24a7.66,7.66,0,0,1-5.52,1.87,7.43,7.43,0,0,1-5.48-1.87Q9.6,34.71,9.6,30.46H14a4.89,4.89,0,0,0,.79,3.18,2.63,2.63,0,0,0,2.07.75,2.66,2.66,0,0,0,2.14-.79,4.9,4.9,0,0,0,.75-3.14,6.79,6.79,0,0,0-.5-3.12,4.27,4.27,0,0,0-2.16-1.53l-3.38-1.39A6.11,6.11,0,0,1,10.71,22a9.66,9.66,0,0,1-.87-4.71,7.64,7.64,0,0,1,2.3-6A7.08,7.08,0,0,1,17,9.6a7.07,7.07,0,0,1,5.08,1.71q2,1.95,2,6.16H19.61a5.08,5.08,0,0,0-.68-3,2.34,2.34,0,0,0-2-.83,2.44,2.44,0,0,0-1.91.79,4.2,4.2,0,0,0-.75,2.78,5.15,5.15,0,0,0,.44,2.48A3.82,3.82,0,0,0,16.63,21L20,22.35a6.41,6.41,0,0,1,3.4,2.7,11.62,11.62,0,0,1,.89,5.24"/><polygon class="cls-logo-white" points="40.99 38.12 29.11 38.12 29.11 9.84 33.56 9.84 33.56 34.11 40.99 34.11 40.99 38.12"/><path class="cls-logo-white" d="M56.4,28.51,54,16.67,51.56,28.51ZM63,38.12H58.39l-1.15-5.6H50.68l-1.11,5.6H44.88l7-28.28h4.33Z"/><polygon class="cls-logo-white" points="86.4 38.12 81.95 38.12 81.95 20.48 78.1 32.08 75.64 32.08 71.86 20.68 71.86 38.12 67.41 38.12 67.41 9.84 71.42 9.84 76.91 24.7 82.35 9.84 86.4 9.84 86.4 38.12"/><path class="cls-logo-white" d="M20,71.8q0-4.16-.18-6.12A6.51,6.51,0,0,0,19,62.8a2.54,2.54,0,0,0-2.28-1.16H14.08V82h2.64A2.54,2.54,0,0,0,19,80.88a6.56,6.56,0,0,0,.78-2.9Q20,76,20,71.8m4.12-7.9a61,61,0,0,1,.36,7.9,62,62,0,0,1-.36,7.94,7.24,7.24,0,0,1-1.72,4,7,7,0,0,1-5.52,2.36H9.6V57.6h7.24A7,7,0,0,1,22.36,60,7.2,7.2,0,0,1,24.08,63.9Z"/><path class="cls-logo-white" d="M44.36,79.08a7.25,7.25,0,0,1-2,5.24,7.07,7.07,0,0,1-5.28,2.08,7.12,7.12,0,0,1-5.32-2.08,7.25,7.25,0,0,1-2-5.24V57.6h4.48V79.32a3,3,0,0,0,.8,2.26,2.75,2.75,0,0,0,2,.78,2.68,2.68,0,0,0,2-.78,3.06,3.06,0,0,0,.78-2.26V57.6h4.48Z"/><polygon class="cls-logo-white" points="64.92 86.08 60.96 86.08 54.24 69.16 54.24 86.08 49.76 86.08 49.76 57.6 53.76 57.6 60.44 74.52 60.44 57.6 64.92 57.6 64.92 86.08"/><polygon class="cls-logo-white" points="86.4 86.08 81.56 86.08 76.96 74.36 74.8 78.76 74.8 86.08 70.32 86.08 70.32 57.6 74.8 57.6 74.8 71 81 57.6 85.52 57.6 79.8 69.4 86.4 86.08"/><rect class="cls-logo-orange" x="9.6" y="45.6" width="76.8" height="4.8"/></g></g></svg>
                </a>
                <div id="j-nav" class="navbar-collapse offcanvas-collapse bg-light">
                    <ul class="navbar-nav nav-left">
                        <li class="nav-item dropdown">
                            <a id="cat-clothes" href="#" class="btn btn-nav dropdown-toggle text-uppercase"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Одежда
                            </a>
                            <div class="dropdown-menu" aria-labelledby="cat-clothes">
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=clothes#clothes=compress">Компрессионная одежда</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=clothes#clothes=kurtki">Куртки и олимпийки</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=clothes#clothes=tolstovki">Толстовки</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=clothes#clothes=mayki">Футболки и майки</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=clothes#clothes=bruki,shorti">Брюки и Шорты</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=clothes#clothes=noski">Носки</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="cat-boots" href="#" class="btn btn-nav dropdown-toggle text-uppercase"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Обувь
                            </a>
                            <div class="dropdown-menu" aria-labelledby="cat-boots">
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=boots#boots=cross">Кросовки</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=boots#boots=wcross">Зимние кросовки</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=boots#boots=kedy">Кеды</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=boots#boots=slancy">Сланцы</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $data['pref']; ?>catalog.php?cats=balls" class="btn btn-nav">МЯЧИ </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="cat-accs" href="#" class="btn btn-nav dropdown-toggle text-uppercase"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> аксесуары
                            </a>
                            <div class="dropdown-menu" aria-labelledby="cat-accs">
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=accessories#accessories=caps">Шапки и кепки</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=accessories#accessories=onbottom">Наколенники</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=accessories#accessories=handed">Рукава</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=accessories#accessories=linen">Повязки и напульсники</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=accessories#accessories=bags">Рюкзаки и сумки</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=accessories#accessories=glasses">Очки для дриблинга</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=accessories#accessories=descs">Тактические доски</a>
                                <a class="dropdown-item" href="<?php echo $data['pref']; ?>catalog.php?cats=accessories#accessories=saves">Шапки</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $data['pref']; ?>catalog.php?cats=discount#offers=discounts" class="btn btn-nav">СКИДКИ</a>
                        </li>
                        <li class="nav-item dropdown d-block d-lg-none only-mobile">
                            <a id="cat-reg" href="#" class="btn btn-nav dropdown-toggle text-uppercase"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ВЫБРАТЬ РЕГИОН
                            </a>
                            <div class="dropdown-menu" aria-labelledby="cat-reg">
                                <a class="dropdown-item" href="#"><i class="fas fa-location-arrow"></i> Авто-определение</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-location-arrow"></i> Москва</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-location-arrow"></i> Самара</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-location-arrow"></i> Выбрать вручную</a>
                            </div>
                        </li>
                        <li class="nav-item d-block d-lg-none only-mobile">
                            <a href="tel:88005006263" class="btn btn-nav">8-800-500-62-63 <i class="fa fa-phone"></i></a>
                        </li>
                    </ul>
                </div>
                <button id="alone-search" class="btn d-block d-lg-none only-mobile" type="button"
                        data-toggle="collapse" aria-expanded="false" aria-label="Open panel"
                        data-target="#searchPanel">
                    <i class="fa fa-search"></i>
                </button>
                <div class="ml-auto d-none d-lg-block only-desktop">
                    <div class="navbar-nav nav-right">
                        <div class="btn-group">
                            <div class="btn-group">
                                <button id="region" type="button" class="btn btn-outline-dark dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                    Регион
                                </button>
                                <div class="dropdown-menu short-drop" aria-labelledby="region">
                                    <a class="dropdown-item" href="#"><i class="fas fa-location-arrow"></i> Авто-определение</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-location-arrow"></i> Выбрать регион</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button id="lang" type="button" class="btn btn-outline-dark  d-flex align-items-center"
                                        data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90" width="16" height="16"><defs><style>.wh-1{fill:#fff;}.bl-2{fill:#d52b1e;}.rd-3{fill:#0039a6;}</style></defs><rect class="wh-1" y="15" width="90" height="30"/><rect class="bl-2" y="45" width="90" height="30"/><rect class="rd-3" y="35" width="90" height="20"/></svg>
                                </button>
                                <div class="dropdown-menu short-drop" aria-labelledby="lang">
                                    <a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90" width="16" height="16"><defs><style>.wh-1{fill:#fff;}.bl-2{fill:#d52b1e;}.rd-3{fill:#0039a6;}</style></defs><rect class="wh-1" y="15" width="90" height="30"/><rect class="bl-2" y="45" width="90" height="30"/><rect class="rd-3" y="35" width="90" height="20"/></svg> Russia
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 900" width="16" height="16"><defs><style>.wh-1{fill:#fff;}.en-2{fill:#b22234;}.en-3{fill:#3c3b6e;}</style></defs><g id="_1" data-name="1"><rect id="_10" data-name="10" class="wh-1" x="0.02" y="217.34" width="899.98" height="471.34"/><rect id="_9" data-name="9" class="en-2" x="0.02" y="215.57" width="899.23" height="37.29"/><rect id="_8" data-name="8" class="en-2" x="0.02" y="288.5" width="899.23" height="37.28"/><rect id="_7" data-name="7" class="en-2" x="0.02" y="361.43" width="899.23" height="37.29"/><rect id="_6" data-name="6" class="en-2" x="0.02" y="434.36" width="899.23" height="37.29"/><rect id="_5" data-name="5" class="en-2" x="0.02" y="507.29" width="899.23" height="37.29"/><rect id="_4" data-name="4" class="en-2" x="0.02" y="580.22" width="899.23" height="37.29"/><rect id="_3" data-name="3" class="en-2" x="0.02" y="653.15" width="899.23" height="37.29"/><rect id="_2" data-name="2" class="en-3" y="215.56" width="359.15" height="256.09"/><g id="_1-2" data-name="1"><polygon id="_1-3" data-name="1" class="wh-1" points="30.55 225.37 33.91 235.82 44.78 235.82 35.98 242.28 39.35 252.74 30.55 246.28 21.75 252.74 25.11 242.28 16.31 235.82 27.18 235.82 30.55 225.37"/><polygon id="_1-4" data-name="1" class="wh-1" points="60.15 251.65 63.51 262.1 74.38 262.1 65.59 268.56 68.95 279.01 60.15 272.55 51.35 279.01 54.71 268.56 45.91 262.1 56.79 262.1 60.15 251.65"/><polygon id="_1-5" data-name="1" class="wh-1" points="60.15 302.99 63.51 313.44 74.38 313.44 65.59 319.9 68.95 330.36 60.15 323.9 51.35 330.36 54.71 319.9 45.91 313.44 56.79 313.44 60.15 302.99"/><polygon id="_1-6" data-name="1" class="wh-1" points="60.15 354.33 63.51 364.78 74.38 364.78 65.59 371.24 68.95 381.7 60.15 375.24 51.35 381.7 54.71 371.24 45.91 364.78 56.79 364.78 60.15 354.33"/><polygon id="_1-7" data-name="1" class="wh-1" points="60.15 405.67 63.51 416.12 74.38 416.12 65.59 422.58 68.95 433.04 60.15 426.58 51.35 433.04 54.71 422.58 45.91 416.12 56.79 416.12 60.15 405.67"/><polygon id="_1-8" data-name="1" class="wh-1" points="120.15 251.65 123.51 262.1 134.39 262.1 125.59 268.56 128.95 279.01 120.15 272.55 111.35 279.01 114.71 268.56 105.91 262.1 116.79 262.1 120.15 251.65"/><polygon id="_1-9" data-name="1" class="wh-1" points="120.15 302.99 123.51 313.44 134.39 313.44 125.59 319.9 128.95 330.36 120.15 323.9 111.35 330.36 114.71 319.9 105.91 313.44 116.79 313.44 120.15 302.99"/><polygon id="_1-10" data-name="1" class="wh-1" points="120.15 354.33 123.51 364.78 134.39 364.78 125.59 371.24 128.95 381.7 120.15 375.24 111.35 381.7 114.71 371.24 105.91 364.78 116.79 364.78 120.15 354.33"/><polygon id="_1-11" data-name="1" class="wh-1" points="120.15 405.67 123.51 416.12 134.39 416.12 125.59 422.58 128.95 433.04 120.15 426.58 111.35 433.04 114.71 422.58 105.91 416.12 116.79 416.12 120.15 405.67"/><polygon id="_1-12" data-name="1" class="wh-1" points="180.15 251.65 183.51 262.1 194.39 262.1 185.59 268.56 188.95 279.01 180.15 272.55 171.35 279.01 174.71 268.56 165.91 262.1 176.79 262.1 180.15 251.65"/><polygon id="_1-13" data-name="1" class="wh-1" points="180.15 302.99 183.51 313.44 194.39 313.44 185.59 319.9 188.95 330.36 180.15 323.9 171.35 330.36 174.71 319.9 165.91 313.44 176.79 313.44 180.15 302.99"/><polygon id="_1-14" data-name="1" class="wh-1" points="180.15 354.33 183.51 364.78 194.39 364.78 185.59 371.24 188.95 381.7 180.15 375.24 171.35 381.7 174.71 371.24 165.91 364.78 176.79 364.78 180.15 354.33"/><polygon id="_1-15" data-name="1" class="wh-1" points="180.15 405.67 183.51 416.12 194.39 416.12 185.59 422.58 188.95 433.04 180.15 426.58 171.35 433.04 174.71 422.58 165.91 416.12 176.79 416.12 180.15 405.67"/><polygon id="_1-16" data-name="1" class="wh-1" points="240.15 251.65 243.51 262.1 254.39 262.1 245.59 268.56 248.95 279.01 240.15 272.55 231.35 279.01 234.72 268.56 225.92 262.1 236.79 262.1 240.15 251.65"/><polygon id="_1-17" data-name="1" class="wh-1" points="240.15 302.99 243.51 313.44 254.39 313.44 245.59 319.9 248.95 330.36 240.15 323.9 231.35 330.36 234.72 319.9 225.92 313.44 236.79 313.44 240.15 302.99"/><polygon id="_1-18" data-name="1" class="wh-1" points="240.15 354.33 243.51 364.78 254.39 364.78 245.59 371.24 248.95 381.7 240.15 375.24 231.35 381.7 234.72 371.24 225.92 364.78 236.79 364.78 240.15 354.33"/><polygon id="_1-19" data-name="1" class="wh-1" points="240.15 405.67 243.51 416.12 254.39 416.12 245.59 422.58 248.95 433.04 240.15 426.58 231.35 433.04 234.72 422.58 225.92 416.12 236.79 416.12 240.15 405.67"/><polygon id="_1-20" data-name="1" class="wh-1" points="300.15 251.65 303.52 262.1 314.39 262.1 305.59 268.56 308.95 279.01 300.15 272.55 291.36 279.01 294.72 268.56 285.92 262.1 296.79 262.1 300.15 251.65"/><polygon id="_1-21" data-name="1" class="wh-1" points="300.15 302.99 303.52 313.44 314.39 313.44 305.59 319.9 308.95 330.36 300.15 323.9 291.36 330.36 294.72 319.9 285.92 313.44 296.79 313.44 300.15 302.99"/><polygon id="_1-22" data-name="1" class="wh-1" points="300.15 354.33 303.52 364.78 314.39 364.78 305.59 371.24 308.95 381.7 300.15 375.24 291.36 381.7 294.72 371.24 285.92 364.78 296.79 364.78 300.15 354.33"/><polygon id="_1-23" data-name="1" class="wh-1" points="300.15 405.67 303.52 416.12 314.39 416.12 305.59 422.58 308.95 433.04 300.15 426.58 291.36 433.04 294.72 422.58 285.92 416.12 296.79 416.12 300.15 405.67"/><polygon id="_1-24" data-name="1" class="wh-1" points="30.55 276.71 33.91 287.17 44.78 287.17 35.98 293.63 39.35 304.08 30.55 297.62 21.75 304.08 25.11 293.63 16.31 287.17 27.18 287.17 30.55 276.71"/><polygon id="_1-25" data-name="1" class="wh-1" points="30.55 328.05 33.91 338.51 44.78 338.51 35.98 344.97 39.35 355.42 30.55 348.96 21.75 355.42 25.11 344.97 16.31 338.51 27.18 338.51 30.55 328.05"/><polygon id="_1-26" data-name="1" class="wh-1" points="30.55 379.39 33.91 389.85 44.78 389.85 35.98 396.31 39.35 406.76 30.55 400.3 21.75 406.76 25.11 396.31 16.31 389.85 27.18 389.85 30.55 379.39"/><polygon id="_1-27" data-name="1" class="wh-1" points="30.55 430.73 33.91 441.19 44.78 441.19 35.98 447.65 39.35 458.1 30.55 451.64 21.75 458.1 25.11 447.65 16.31 441.19 27.18 441.19 30.55 430.73"/><polygon id="_1-28" data-name="1" class="wh-1" points="89.75 225.37 93.11 235.82 103.99 235.82 95.19 242.28 98.55 252.74 89.75 246.28 80.95 252.74 84.31 242.28 75.51 235.82 86.39 235.82 89.75 225.37"/><polygon id="_1-29" data-name="1" class="wh-1" points="89.75 276.71 93.11 287.17 103.99 287.17 95.19 293.63 98.55 304.08 89.75 297.62 80.95 304.08 84.31 293.63 75.51 287.17 86.39 287.17 89.75 276.71"/><polygon id="_1-30" data-name="1" class="wh-1" points="89.75 328.05 93.11 338.51 103.99 338.51 95.19 344.97 98.55 355.42 89.75 348.96 80.95 355.42 84.31 344.97 75.51 338.51 86.39 338.51 89.75 328.05"/><polygon id="_1-31" data-name="1" class="wh-1" points="89.75 379.39 93.11 389.85 103.99 389.85 95.19 396.31 98.55 406.76 89.75 400.3 80.95 406.76 84.31 396.31 75.51 389.85 86.39 389.85 89.75 379.39"/><polygon id="_1-32" data-name="1" class="wh-1" points="89.75 430.73 93.11 441.19 103.99 441.19 95.19 447.65 98.55 458.1 89.75 451.64 80.95 458.1 84.31 447.65 75.51 441.19 86.39 441.19 89.75 430.73"/><polygon id="_1-33" data-name="1" class="wh-1" points="150.55 225.37 153.91 235.82 164.79 235.82 155.99 242.28 159.35 252.74 150.55 246.28 141.75 252.74 145.11 242.28 136.31 235.82 147.19 235.82 150.55 225.37"/><polygon id="_1-34" data-name="1" class="wh-1" points="150.55 276.71 153.91 287.17 164.79 287.17 155.99 293.63 159.35 304.08 150.55 297.62 141.75 304.08 145.11 293.63 136.31 287.17 147.19 287.17 150.55 276.71"/><polygon id="_1-35" data-name="1" class="wh-1" points="150.55 328.05 153.91 338.51 164.79 338.51 155.99 344.97 159.35 355.42 150.55 348.96 141.75 355.42 145.11 344.97 136.31 338.51 147.19 338.51 150.55 328.05"/><polygon id="_1-36" data-name="1" class="wh-1" points="150.55 379.39 153.91 389.85 164.79 389.85 155.99 396.31 159.35 406.76 150.55 400.3 141.75 406.76 145.11 396.31 136.31 389.85 147.19 389.85 150.55 379.39"/><polygon id="_1-37" data-name="1" class="wh-1" points="150.55 430.73 153.91 441.19 164.79 441.19 155.99 447.65 159.35 458.1 150.55 451.64 141.75 458.1 145.11 447.65 136.31 441.19 147.19 441.19 150.55 430.73"/><polygon id="_1-38" data-name="1" class="wh-1" points="210.15 225.37 213.51 235.82 224.39 235.82 215.59 242.28 218.95 252.74 210.15 246.28 201.35 252.74 204.71 242.28 195.91 235.82 206.79 235.82 210.15 225.37"/><polygon id="_1-39" data-name="1" class="wh-1" points="210.15 276.71 213.51 287.17 224.39 287.17 215.59 293.63 218.95 304.08 210.15 297.62 201.35 304.08 204.71 293.63 195.91 287.17 206.79 287.17 210.15 276.71"/><polygon id="_1-40" data-name="1" class="wh-1" points="210.15 328.05 213.51 338.51 224.39 338.51 215.59 344.97 218.95 355.42 210.15 348.96 201.35 355.42 204.71 344.97 195.91 338.51 206.79 338.51 210.15 328.05"/><polygon id="_1-41" data-name="1" class="wh-1" points="210.15 379.39 213.51 389.85 224.39 389.85 215.59 396.31 218.95 406.76 210.15 400.3 201.35 406.76 204.71 396.31 195.91 389.85 206.79 389.85 210.15 379.39"/><polygon id="_1-42" data-name="1" class="wh-1" points="210.15 430.73 213.51 441.19 224.39 441.19 215.59 447.65 218.95 458.1 210.15 451.64 201.35 458.1 204.71 447.65 195.91 441.19 206.79 441.19 210.15 430.73"/><polygon id="_1-43" data-name="1" class="wh-1" points="269.75 225.37 273.12 235.82 283.99 235.82 275.19 242.28 278.55 252.74 269.75 246.28 260.95 252.74 264.32 242.28 255.52 235.82 266.39 235.82 269.75 225.37"/><polygon id="_1-44" data-name="1" class="wh-1" points="269.75 276.71 273.12 287.17 283.99 287.17 275.19 293.63 278.55 304.08 269.75 297.62 260.95 304.08 264.32 293.63 255.52 287.17 266.39 287.17 269.75 276.71"/><polygon id="_1-45" data-name="1" class="wh-1" points="269.75 328.05 273.12 338.51 283.99 338.51 275.19 344.97 278.55 355.42 269.75 348.96 260.95 355.42 264.32 344.97 255.52 338.51 266.39 338.51 269.75 328.05"/><polygon id="_1-46" data-name="1" class="wh-1" points="269.75 379.39 273.12 389.85 283.99 389.85 275.19 396.31 278.55 406.76 269.75 400.3 260.95 406.76 264.32 396.31 255.52 389.85 266.39 389.85 269.75 379.39"/><polygon id="_1-47" data-name="1" class="wh-1" points="269.75 430.73 273.12 441.19 283.99 441.19 275.19 447.65 278.55 458.1 269.75 451.64 260.95 458.1 264.32 447.65 255.52 441.19 266.39 441.19 269.75 430.73"/><polygon id="_1-48" data-name="1" class="wh-1" points="330.56 225.37 333.92 235.82 344.79 235.82 335.99 242.28 339.35 252.74 330.56 246.28 321.76 252.74 325.12 242.28 316.32 235.82 327.19 235.82 330.56 225.37"/><polygon id="_4-2" data-name="4" class="wh-1" points="330.56 276.71 333.92 287.17 344.79 287.17 335.99 293.63 339.35 304.08 330.56 297.62 321.76 304.08 325.12 293.63 316.32 287.17 327.19 287.17 330.56 276.71"/><polygon id="_3-2" data-name="3" class="wh-1" points="330.56 328.05 333.92 338.51 344.79 338.51 335.99 344.97 339.35 355.42 330.56 348.96 321.76 355.42 325.12 344.97 316.32 338.51 327.19 338.51 330.56 328.05"/><polygon id="_2-2" data-name="2" class="wh-1" points="330.56 379.39 333.92 389.85 344.79 389.85 335.99 396.31 339.35 406.76 330.56 400.3 321.76 406.76 325.12 396.31 316.32 389.85 327.19 389.85 330.56 379.39"/><polygon id="_1-49" data-name="1" class="wh-1" points="330.56 430.73 333.92 441.19 344.79 441.19 335.99 447.65 339.35 458.1 330.56 451.64 321.76 458.1 325.12 447.65 316.32 441.19 327.19 441.19 330.56 430.73"/></g></g></svg> English
                                    </a>
        <!-- УБРАТЬ В ПРОДАКШИНЕ ВСЮ ссылку (Все страницы) НИЖЕ!!! -->
                                    <a class="dropdown-item" href="<?php echo $data['pref']; ?>all.php">
                                        Все страницы
                                    </a>
                                </div>
                            </div>
                            <button class="btn btn-outline-dark" type="button"
                                    data-toggle="collapse" aria-expanded="false" aria-label="Open panel"
                                    data-target="#searchPanel">
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="btn btn-outline-dark" type="button"
                                    data-toggle="collapse" aria-expanded="false" aria-label="Open panel"
                                    data-target="#callPanel">
                                <i class="fa fa-phone fa-rotate-90"></i>
                            </button>
                            <a class="btn btn-outline-dark" href="<?php echo $data['pref']; ?>profile.php">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="btn btn-outline-dark" href="<?php echo $data['pref']; ?>backet.php">
                                <i class="fa fa-shopping-cart"></i>&nbsp;<span id="j-cart-label-desktop" class="badge badge-orange d-none">0</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="j-nav-collapse">
        <div class="collapse" id="callPanel" data-parent="#j-nav-collapse">
            <div class="pt-1 text-center">
                <h4 class="d-none d-lg-block only-desktop">Номер нашего телефона 8-800-500-62-63.</h4>
            </div>
        </div>
        <div class="collapse" id="searchPanel" data-parent="#j-nav-collapse">
            <div class="row pt-2 text-center">
                <form class="input-group col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-dark" type="reset" >X</button>
                    </div>
                    <input id="search_input" type="text" class="form-control border-dark" placeholder="Поиск" aria-describedby="s_input">
                    <input name="csrfToken" type="hidden" value="Fl0suJlBCn9F5fgrxwSANd3g73oWQi6IfP7Vt8Z9">
                    <div class="input-group-append">
                        <button class="btn btn-outline-dark" type="button" id="s_input">Поиск</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<!-- END header -->