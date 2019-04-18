<!-- START Страница Продукта-->
<div class="container pt-1">
    <ul class="breadcrumb only-desktop">
        <li class="breadcrumb-item"><a href="<?php echo $data['pref']; ?>">Главная</a></li>
        <li class="breadcrumb-item active"><?php echo $data['cats']; ?></li>
        <span class="summ ml-2"></span>
    </ul>
    <h1>Категория такая-то каталога магазина &laquo;SlamDunk.su&raquo;  </h1>
    <div class="row">
        <div id="j-filter" class="col-lg-2 offcanvas-filter flip controls">

            <!--    Пример html блока фильтра. Обязательно data-group-name cо значением категории фильтра в родителе 
                    и в каждом инпуте data-mix-control (без значения), value=".class" с ссылкой на фильтрующий css класс (с точкой!)
                    так же не забываем об уникальности id и ссылке на input.id в каждом соотв. label -->

            <!--        <div class="filter-box top-border" data-group-name="gender">
                            <div class="filter-header d-flex justify-content-between align-items-center">
                                <h4>ПОЛ</h4>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="filter-body collapse show">
                                <ul class="list-group list-group-flush">
                                    <li class="custom-control custom-checkbox d-flex justify-content-between align-items-center">
                                        <input type="checkbox" class="custom-control-input" id="filter-1" data-mix-control
                                               data-filter-name="Мужчины" value=".man">
                                        <label class="custom-control-label" for="filter-1">
                                            Мужчины
                                        </label>
                                    </li>
                                    <li class="custom-control custom-checkbox d-flex justify-content-between align-items-center">
                                        <input type="checkbox" class="custom-control-input" id="filter-2" data-mix-control
                                               data-filter-name="Женщины" value=".women">
                                        <label class="custom-control-label" for="filter-2">
                                            Женщины
                                        </label>
                                    </li>
                                    <li class="custom-control custom-checkbox d-flex justify-content-between align-items-center">
                                        <input type="checkbox" class="custom-control-input" id="filter-3" data-mix-control
                                               data-filter-name="Дети" value=".child">
                                        <label class="custom-control-label" for="filter-3">
                                            Дети
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
            <?php
            // заводим переменную id для уникальности label.for -> input.id 
            $id = 0;
            foreach ($data['filters'] as $key => $value) {
                // перебираем весь массив фильтров, по умолчанию блок свернут ($show пустой)
                //  и значит шеврон повернут вверх (up || down) для <i class="fas fa-chevron-' . $shevron . '"></i>
                $show = "";
                $shevron = "up";

                //  каждая группа фильтров обязательно имеет свойство data-filter-group со значением своей группы
                echo '<div class="filter-box top-border control-group" data-filter-group="' . $key . '">';

                // блок гендера оставляем всегда развернутым, в идеале он первый в массиве и сверху.
                // так же разворачиваем текущую категорию согласно _GET (уже есть в конфиге, сравниваем с ним)
                if ($key === "gender" || $key === $data['get']) {
                    $show = "show";
                    $shevron = "down";

                    // кирилического заголовка у группы может и не быть, поэтому проверяем его наличие
                    // и указываем наименование группы по русски, и выставляем шеврон
                    if ($value['header']) {
                        echo '<div class="filter-header d-flex justify-content-between align-items-center">
                                <h4 class="text-uppercase">' . $value["header"] . '</h4>
                                <i class="fas fa-chevron-' . $shevron . '"></i>
                            </div>';
                    }

                    // добавляем $show для данного блока и открываем UL
                    echo '<div class="filter-body collapse ' . $show . '">
                            <ul class="list-group list-group-flush">';

                    // я на всякий случай проверю наличие у фильтра значений простым подсчетом,
                    // можно проверять что sql вернул не пустой массив, со значениями или еще на более раннем этапе это выяснять
                    // в общем как будете делать это на практике мне не важно
                    $body_count = count($value['body']);
                    if ($body_count > 0) {
                        foreach ($value['body'] as $filter) {
                            // тут стоит подчеркнуть, что значением инпута назначаем не просто тарегт латиницей, 
                            // а обязательно с точкой ввиду фильтрации по классу ( value=".' . $filter["en"] . '") 
                            // data-tag="' . $filter["ru"] . '" это значение для правильной работы появления/убирания верхнних тагов над товарами.                            
                            echo '<li class="custom-control custom-checkbox d-flex justify-content-between align-items-center">'
                            . '<input id="fid-' . $id . '" data-mix-control class="custom-control-input control" type="checkbox" value=".' . $filter["en"] . '" data-tag="' . $filter["ru"] . '">'
                            . '<label class="custom-control-label" for="fid-' . $id . '"> ' . $filter["ru"] . '</label>'
                            . '</li>';
                            // инкремент $id для следующих фильтров
                            ++$id;
                        }
                    }
                    // Закрываем (.filter-body.collapse) и UL
                    echo '</ul>'
                    . '</div>';
                } else {
                    // Все блоки не текущей категории.
                    // могут быть как фильтрующими данную категорию, так и ссылками на другие категории
                    // Для обоих случаев мы открываем блок коллапса + UL (их состояние show + shevron по умолчанию)
                    // для кирилического заголовка и для $show/$shevron ничего не изменилось, 
                    // при условии если заголовок есть, или показ блока если без заголовка
                    if ($value['header']) {
                        echo '<div class="filter-header d-flex justify-content-between align-items-center">
                                <h4 class="text-uppercase">' . $value["header"] . '</h4>
                                <i class="fas fa-chevron-' . $shevron . '"></i>
                            </div>';
                    } else {
                        $show = "show";
                    }
                    echo '<div class="filter-body collapse ' . $show . '">
                            <ul class="list-group list-group-flush">';

                    // А вот для фильтров не текущей категории мы теперь должны выяснить,
                    // будем мы подключать фильтрацию в текущем блоке фильтра
                    // или же отображать каждый блок ссылкой, ведущей на свою категорию...
                    // Тут конечно раздолье для фантазии, но у меня она скудная.
                    $body_count = count($value['body']);
                    if ($body_count > 0) {
                        // У нас есть в $data['category'] массив всех категорий товаров
                        // Если мы не нашли в нем текущую категорию - то будем фильтровать как в блоке выше, иначе - линковать.
                        if (!array_key_exists($key, $data['category'])) {
                            foreach ($value['body'] as $filter) {
                                echo '<li class="custom-control custom-checkbox d-flex justify-content-between align-items-center">'
                                . '<input id="fid-' . $id . '" data-mix-control class="custom-control-input control" type="checkbox" value=".' . $filter["en"] . '" data-tag="' . $filter["ru"] . '">'
                                . '<label class="custom-control-label" for="fid-' . $id . '"> ' . $filter["ru"] . '</label>'
                                . '</li>';
                                ++$id;
                            }
                        } else {
                            // тяжко воспринимаемой для чтения тут может быть строка адреса
                            // href="'.$data["pref"].'catalog.php?cats='.$key.'#'.$key.'='.$filter["en"].'"
                            // Поэтому разберу ее более понятно:
                            // $data["pref"] префикс корня + catalog.php
                            // далее _GET (?cats='.$key.')
                            // и шэш (#'.$key.'='.$filter["en"].')
                            foreach ($value['body'] as $filter) {
                                echo '<li class="custom-control custom-checkbox d-flex justify-content-between align-items-center">'
                                . '<a href="' . $data["pref"] . 'catalog.php?cats=' . $key . '#' . $key . '=' . $filter["en"] . '" class="custom-control-label">' . $filter["ru"] . '</a>'
                                . '</li>';
                                ++$id;
                            }
                        }
                    }

                    // Закрываем (.filter-body.collapse) и UL
                    echo '</ul>'
                    . '</div>';
                }

                // Закрываем .filter-box всей группы
                echo '</div>';
            }
            ?>
            <!-- Следующие блоки фильтров статичны и просто должны отображать наличие размеров
                продумывать функционал их небыло задачи, да и особенных фишек тут нет,
                работают как любые другие - таргет на класс и фильтруем. 
                Надеюсь нужды фильтровать полтора размера не прийдется... -->
            <div class="filter-box top-border control-group" data-filter-group="sizes">
                <div class="filter-header d-flex justify-content-between align-items-center">
                    <h4 class="text-uppercase">Размеры</h4>
                    <i class="fas fa-chevron-up"></i>
                </div>
                <div class="filter-body collapse pt-1">
                    <div class="nav btn-group btn-group-sm" role="tablist">
                        <?php foreach ($data['sizename'] as $key => $value) : ?>
                            <a class="btn btn-outline-dark <?php if (!$key) echo "active"; ?>"
                               data-toggle="tab" role="tab" aria-selected="true"
                               id="size-btn-<?php echo $value; ?>"
                               href="#size-<?php echo $value; ?>"
                               aria-controls="size-<?php echo $value; ?>"
                               >
                                   <?php echo $value; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="tab-content pt-2">
                        <?php foreach ($data['sizename'] as $key => $value) : ?>
                            <div class="w-100 tab-pane show <?php if (!$key) echo "active"; ?>" role="tabpanel"
                                 id="size-<?php echo $value; ?>"
                                 aria-labelledby="size-btn-<?php echo $value; ?>"
                                 >
                                <div class="row">
                                    <?php foreach ($data['sizetable'] as $sid => $sval) : ?>
                                        <div class="col-6">
                                            <button class="btn btn-block btn-outline-dark mb-1 control size-control" 
                                                    data-mix-control 
                                                    value=".size-<?php echo $sid; ?>" 
                                                    data-tag="<?php echo $value; ?>-<?php echo $sval[$key]; ?>" 
                                                    data-toggle=".size-<?php echo $sid; ?>" 
                                                    >
                                                        <?php echo $sval[$key]; ?>
                                            </button>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <!--                        <div class="w-100 tab-pane show active" role="tabpanel" id="size-us" aria-labelledby="size-btn-us">
                                                    <div class="row">
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">US-1</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">US-1</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">US-1</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">US-1</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">US-1</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">US-1</button></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="size-eu" aria-labelledby="size-btn-eu">
                                                    <div class="row">
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">EU-2</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">EU-2</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">EU-2</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">EU-2</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">EU-2</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">EU-2</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">EU-2</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">EU-2</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">EU-2</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">EU-2</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">EU-2</button></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="size-ru" aria-labelledby="size-btn-ru">
                                                    <div class="row">
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">RU-3</button></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="size-uk" aria-labelledby="size-btn-uk">
                                                    <div class="row">
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">UK1</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">UK1</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">UK1</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">UK1</button></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="size-cm" aria-labelledby="size-btn-cm">
                                                    <div class="row">
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">19cm</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">19cm</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">19cm</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">19cm</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">19cm</button></div>
                                                        <div class="col-6"><button class="btn btn-block btn-outline-dark mb-1">19cm</button></div>
                                                    </div>
                                                </div>-->
                    </div>
                </div>
            </div>
            <!-- Фильтр по цене немного специфичен и не похож по строению на остальные, вывовдим отдельно просто HTML благо это последний пункт-->
            <div class="filter-box top-border mb-2" data-filter-group="maxprice">
                <div class="filter-header d-flex justify-content-between align-items-center">
                    <h4>ЦЕНА</h4>
                    <span class="ml-auto text-md">До <output id="indicator">300</output><span>00</span></span>
                </div>
                <div class="filter-body">
                    <input id="j-filter-price" type="range" class="custom-range control" data-mix-control 
                           value="300" min="10" max="300" step="10" onchange="indicator.value = value">
                </div>
            </div>
            <!-- мобильная закрывашка фильтров-->
            <div class="filter-after d-flex d-lg-none align-items-start justify-content-center">
                <button type="button" class="btn btn-outline-dark filter-toogler filter-flip only-mobile">Х</button>
            </div>
        </div>
        <!-- START Блок каталога товаров -->
        <div id="j-catalog" class="col-12 col-lg-10">
            <div class="row d-flex flex-row">
                <div class="col-9 content-tags d-none d-lg-block only-desktop">
                    <!--<button class="btn btn-outline-dark j-tag-button">Выделенный элемент 1</button>
                    Сюда добавляются таги, не удалять...-->
                </div>
                <div class="ml-auto py-1 col-12 col-lg-3 d-flex justify-content-between align-items-start">
                    <button type="button" class="btn btn-outline-dark d-flex d-lg-none only-mobile filter-toogler flex-fill mr-1">
                        <span>Фильтр</span>
                        <span class="ml-auto summ"></span>
                    </button>
                    <div class="btn-group ml-auto">
                        <button id="sorted-by" type="button" class="btn btn-outline-dark dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            <span id="sorter">Сначала популярные</span>
                        </button>
                        <div id="j-sorter" class="dropdown-menu dropdown-menu-right short-drop" aria-labelledby="sorted-by">
                            <a class="dropdown-item control control-sort" data-mix-control data-sort="default:desc">Сначала популярные</a>
                            <a class="dropdown-item control control-sort" data-mix-control data-sort="published-date:desc">Сначала новые</a>
                            <a class="dropdown-item control control-sort" data-mix-control data-sort="price:asc">Сначала дешевые</a>
                            <a class="dropdown-item control control-sort" data-mix-control data-sort="price:desc">Сначала дорогие</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="j-products" class="merch-cards row pt-1">
                <!--                <div class="f-item mix col-12 col-lg-3 mb-3" data-price="1" data-published-date="2019-12-16">
                                    <div class="card d-flex flex-column align-items-start">
                                        <div class="overlay"><span class="">Новинка</span></div>
                                        <div class="card-image">
                                            <a href="/proto/product.php" class="text-decoration-none text-dark">
                                                <img class="card-img-top" src="//www.slamdunk.su/thumbs/626726-012.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="card-footer mt-auto d-flex flex-column">
                                            <span class="item-name ellipsed">Имя товара / модель</span>
                                            <p class="item-desc ellipsed">Примечание</p>
                                            <p class="item-desc ellipsed">Если решили оставить 2 строки</p>
                                            <div class="d-flex align-items-center mt-auto">
                                                <span class="item-price">7777 р.</span>
                                                <a href="/proto/product.php" class="btn btn-sm btn-dark ml-auto">Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                <?php
                // имитирую каталог товаров, внешний вид идентичен (выше комент), разница только в наличии/отсутствтии оверлея скидки
                // В классы первого блока (f-item mix) дописываем классами свойства товара для фильтрации, для сортировки - data-price + data-published-date
                if ($data['get']) {
                    foreach ($data['filters'][$data['get']]['body'] as $value) {
                        $c = rand(8, 16);
                        for ($i = 0; $i < $c; $i++) {
                            $price = rand(37, 290);
                            $gendr = rand(0, 2);
                            $discounted = rand(0, 5);
                            $brand = rand(0, 6);
                            $model = rand(0, 6);
                            $size = rand(0,25);
                            $col = rand(0, 6);
                            $color = $data['filters']['colors']['body'][$col];
                            switch ($data['get']) {
                                case "boots":
                                    $imgs = ["/thumbs/5b4619aae1e8c5b45558d5fed5.jpg",
                                        "/thumbs/5c87a54bcd489AA2148-006-PHSRH000-2000.jpeg", "/thumbs/5c502c1ed173fAA4083-015-PHSRH000-2000.jpeg",
                                        "/thumbs/5c90f45926df8415445-100-PHSRH000-2000.jpeg", "/thumbs/5abcd80a1fcee898464-101-PHSRH000-2000.jpeg",];
                                    $r = rand(0, 4);
                                    $img = $imgs[$r];
                                    break;
                                case "clothes":
                                    $imgs = ["/thumbs/626726-012.jpg"];
                                    $img = $imgs[0];
                                    break;
                                case "accessories":
                                    $imgs = ["/thumbs/537c92a23f6f9dae402bc704ad1793d2.jpg"];
                                    $img = $imgs[0];
                                    break;
                                case "balls":
                                    $imgs = ["/thumbs/5c7a6bdb93069molten_bgr7_vy_1.jpg"];
                                    $img = $imgs[0];
                                    break;
                            }
                            $classes = implode(" ", [
                                $value["en"],
                                $data["filters"]["brands"]["body"][$brand]["en"],
                                $data["filters"]["models"]["body"][$model]["en"],
                                $data["filters"]["gender"]["body"][$gendr]["en"],
                                $color["en"]
                            ]);
                            $overlay = "";
                            if ($discounted === 0) {
                                $overlay = '<div class="overlay"><span class="">Скидка</span></div>';
                                $classes .= " dsc";
                            }
                            $year = rand(1, 9);
                            if ($year === 9) {
                                $overlay = '<div class="overlay"><span class="">Новинка</span></div>';
                                $classes .= " news";
                            }
                            $date = "201" . $year . "-" . rand(10, 12) . "-" . rand(10, 28);
                            echo '<div class="f-item mix col-12 col-lg-3 mb-3 ' . $classes . ' size-'.$size.'" data-price="' . $price . '" data-published-date="' . $date . '">
                                <div class="card d-flex flex-column align-items-start">
                                    ' . $overlay . '
                                    <div class="card-image">
                                        <a href="' . $data["pref"] . 'product.php" class="text-decoration-none text-dark">
                                            <img class="card-img-top" src="//www.slamdunk.su' . $img . '" alt="">
                                        </a>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <span class="item-name ellipsed">' . $data["filters"]["brands"]["body"][$brand]["ru"] . ' ' . $data["filters"]["models"]["body"][$model]["ru"] . ' ' . rand(11, 29) . '0</span>
                                        <p class="item-desc ellipsed">' . $value["ru"] . ' ' . $color["ru"] . ' </p>
                                        <p class="item-desc ellipsed">' . $date . ' ' . $data["filters"]["gender"]["body"][$gendr]["ru"] . ' </p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <span class="item-price">' . $price . '00р.</span>
                                            <a href="' . $data["pref"] . 'product.php" class="btn btn-sm btn-dark ml-auto">Купить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                }
                ?>
            </div>
            <div id="j-filter-empty" class="col-12 py-2 mb-3 text-center d-none">
                <h5>Cкрыто товаров фильтрами: <span id="j-hide"></span></h5>
                <hr/>
                <a href="<?php echo $data['pref']; ?>catalog.php?cats=<?php echo $data['get']; ?>" class="btn btn-dark" >Cнять все фильтры </a>
            </div>
        </div>
        <!-- END Блок каталога товаров -->
    </div>
    
</div>
<!-- END Страница Продукта-->

<!-- START section paragraph -->
<div class="container my-2">
    <article class="small">
        <h3>Баскетбольный магазин «Slamdunk»</h3>
        <div class="" data-toggle="collapse" data-target="#seo-text" aria-expanded="false" aria-controls="seo-text">
            <p>
                Баскетбольные майки, голеностопы, наколенники, кроссовки для баскетбола – обязательные элементы экипировки спортсмена, 
                вне зависимости от уровня его подготовки, возраста, телосложения. 
            </p>
            <p>
                Подвижная, жёсткая игра требует от баскетболиста полной отдачи.
            </p>
        </div>
        <div class="collapse" id="seo-text" data-toggle="collapse" data-target="#seo-text.show">>
            <p>Каждый шаг должен быть обдуманным и взвешенным, только так можно достичь успеха. Ещё одно важное условие, которое поможет победить в соревнованиях, это правильно выбранные баскетбольные кроссовки. Nike, Jordan и другие известные бренды презентуют целые коллекции спортивной обуви. Купить в Новосибирске, Санкт-Петербурге, Уфе, Ижевске, Барнауле и других городах фирменные модели отменного качества можно, не выходя из дома.</p>
            <p class="">
                Если раньше кроссовки Nike покупали преимущественно спортсмены, то сегодня эта удобная, практичная обувь прочно вошла в повседневную жизнь активных людей, которые большую часть своего времени проводят в движении. Баскетбольный интернет-магазин «Slamdunk» предлагает широкий ассортимент обуви для профессиональных спортсменов и любителей. Омск, Челябинск, Тольятти, Иркутск или Казань – заказать доставку можно в любую точку страны.
            </p>
            <h4>Критерии выбора баскетбольных кроссовок</h4>
            <p class="">
                Выбрать качественные баскетбольные кроссовки для детей и взрослых спортсменов в Пскове, Норильске, Салавате, Ульяновске, Ярославле и т.д. довольно сложно. Обувь должна быть максимально комфортной, идеально прилегать к ноге, обеспечивать отменную маневренность баскетболисту. На лодыжки и ступни спортсмена приходится большая нагрузка, поэтому нужно выбирать такие модели, чтобы не только быстро передвигаться, но и предупредить травмы голеностопного сустава. При выборе спортивной обуви в Великом Новгороде, Южно-Сахалинске, Благовещенске нужно учитывать несколько критериев.
            </p>
            <p class="">Подошва. В каталогах нашего баскетбольного магазина представлены модели для игры на открытом воздухе или в спортивном зале. Варианты с мягкой подошвой идеальны для крытых стадионов, в то время как жёсткие больше подходят для уличной игры. Вы можете купить качественные баскетбольные кроссовки Nike с доставкой в Орск, Братск, Сыктывкар, Хабаровск, Владивосток.
            </p>
            <p class="">Материал изготовления. Кроссовки Jordan, Nike, модели других известных брендов изготавливаются с применением прочной, износостойкой натуральной кожи, которая не препятствует нормальному воздухообмену. Сетка из синтетической ткани обеспечивает отменную маневренность и гибкость, позволяет коже ступни дышать. Обувь больших размеров или баскетбольные кроссовки для детей вы можете у нас купить  доставкой в Нижнекамск, Таганрог, Комсомольск-на-Амуре, Тюмень, Саратов.
            </p>
            <p class="">Степень фиксации голеностопного сустава. Высокие кроссовки Jordan надёжно фиксируют лодыжку, игра в них максимально безопасна. Это выбор начинающих баскетболистов и любителей. Профессиональные спортсмены, которые играют на результат, настроены только на победу, выбирают кроссовки Nike низкие или средней высоты. Чтобы купить фирменную обувь в Нижневартовске, Новороссийске, Йошкар-Оле, Краснодаре, достаточно оставить заявку на сайте нашего баскетбольного интернет-магазина.
            </p>
            <p class="">На рынках в Костроме, Тамбове, Петрозаводске, Мурманске, Екатеринбурге, Нижнем Новгороде, даже в Сочи купить качественную обувь больших размеров или обычные кроссовки довольно сложно. Пролистайте каталоги нашего баскетбольного магазина. Здесь представлен широкий ассортимент продукции для профессиональных спортсменов, команд, любителей или тех, кто ведёт активный образ жизни. Баскетбольные шорты, майки, кроссовки, а также баскетбольные мячи можно по доступной цене с доставкой в Якутск, Саранск, Череповец, Пермь, Воронеж и другие города.
            </p>
            <h4>Требования к кроссовкам для баскетбола</h4>
            <p class=""> Оригинальные баскетбольные кроссовки Nike в Петропавловске-Камчатском, Северодвинске, Вологде приобрести очень сложно. Покупка на рынке – не всегда надёжно и безопасно. Недобросовестные продавцы часто выдают низкокачественные фальшивки за фирменную обувь и, конечно же, пытаются продать модели по завышенной цене. Чтобы обезопасить себя от подобных неприятностей, заказывайте обувь больших размеров или баскетбольные кроссовки для детей в нашем баскетбольном магазине. Вы не проживаете в Москве и у вас не возможности забрать покупку? Не проблема! Мы осуществляем доставку в Крым, Читу, Калугу, Орёл, Волгоград, Красноярск, Ростов-на-Дону и не только. Вся продукция сертифицирована. Кроссовки для игры в баскетбол отвечают таким требованиям:</p>
            <ul>
                <li>обеспечивают отменную устойчивость при боковом перемещении;</li>
                <li>имеют хорошее сцепление с покрытием спортивной площадки;</li>
                <li>оснащены амортизационными элементами для снижения нагрузки на стопы при прыжках;</li>
                <li>стопы и голеностопы в них надёжно закреплены для защиты от травм;</li>
                <li>не препятствуют активному движению и свободному перемещению баскетболиста;</li>
                <li>не парят ногу, не натирают, их носка не сопровождается дискомфортными ощущениями;</li>
                <li>характеризуются великолепной износоустойчивостью.</li>
            </ul>
            <p class="">
                Дешёвая обувь c рынка никак не отвечает этим требованиям, поэтому от покупки таких моделей лучше отказаться. Специалисты рекомендуют использовать фирменные кроссовки от известных производителей. В их коллекциях действительно качественные, надёжные, удобные в использовании изделия, которые не только смотрятся стильно, но и носиться будут долго. Чтобы купить брендовую обувь, не обязательно искать специализированную точку продажи в Сургуте, Архангельске, Владимире.
            </p>
            <p class=""> Теперь приобрести высококачественную спортивную обувь можно без особых усилий. Достаточно выбрать модель из каталогов у нас на сайте и оставить заявку на заказ. Где бы вы не находились, в Нижнем Тагиле, Белгороде, Брянске, Иваново, через несколько дней новенькие кроссовки будут уже у вас.
            </p>
            <h4>Одежда и аксессуары для баскетболистов</h4>
            <p class=""> Продажа баскетбольных кроссовок для детей, взрослых, обуви больших размеров – основная, но не единственная специализация баскетбольного магазина «Slamdunk». Ассортимент товаров для баскетбола широк и разнообразен. У нас вы можете купить баскетбольные шорты, баскетбольные майки, баскетбольную форму, наколенники, мячи, компрессионное бельё и бандажные изделия, рюкзаки и сумки. В Севастополе, Магнитогорске, Твери, Ставрополе, Курске непросто найти качественную спортивную обувь баскетболистам с размером ноги от 46. Наш интернет-магазин представляет большой размерный ряд кроссовок.
            </p><p class=""> Не знаете, где купить качественную обувь и одежду для баскетбола в Улан-Удэ, Калининграде, Туле, Чебоксарах? Выбирайте из каталогов у нас на сайте. Здесь представлена только сертифицированная продукция от популярных производителей. Если у вас возникли трудности с выбором, помогут определиться наши консультанты. Мы предлагаем наиболее выгодные цены на фирменную обувь в Кирове, Липецке, Смоленске, Астрахани. Выбирайте модели из каталогов на сайте, оставляете заявку или звоните по номеру телефона. Мы осуществляем доставку в Пензу, Рязань, Кемерово, Оренбург, Томск и другие города РФ. Если вы из Москвы, покупка будет доставлена в день заказа.
            </p>
        </div>
    </article>
</div>
<!-- END section paragraph -->

<!-- START Индикатор загрузки-->
<div class="preloader justify-content-center align-items-center d-flex invisible">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- END Индикатор загрузки-->
<?php
echo '<script>';
echo "/**
 * Constructs a `groupsState` hash object using the
 * `getFilterGroupSelectors()` API method.
 *
 * @return {object}
 */

function getGroupsState() {

    var groupsState = {
        gender: mixer.getFilterGroupSelectors('gender').map(getValueFromSelector),
        boots: mixer.getFilterGroupSelectors('boots').map(getValueFromSelector),
        clothes: mixer.getFilterGroupSelectors('clothes').map(getValueFromSelector),
        accessories: mixer.getFilterGroupSelectors('accessories').map(getValueFromSelector),
        brands: mixer.getFilterGroupSelectors('brands').map(getValueFromSelector),
        balls: mixer.getFilterGroupSelectors('balls').map(getValueFromSelector),
        models: mixer.getFilterGroupSelectors('models').map(getValueFromSelector),
        colors: mixer.getFilterGroupSelectors('colors').map(getValueFromSelector),
        sizes: mixer.getFilterGroupSelectors('sizes').map(getValueFromSelector),
//        bandles: mixer.getFilterGroupSelectors('bandles').map(getValueFromSelector),
//        heights: mixer.getFilterGroupSelectors('heights').map(getValueFromSelector),
        offers: mixer.getFilterGroupSelectors('offers').map(getValueFromSelector),
        maxprice: mixer.getFilterGroupSelectors('maxprice').map(getRange)
    };
    return groupsState;
}";
echo "
/**
 * Filters the mixer and updates the multifilter UI using a provided
 * groupsState object.
 *
 * @param  {object|null}    groupsState
 * @param  {boolean}        [animate]
 * @return {mixer.Promise}
 */
function filterMixerByGroupsState(groupsState, animate) {

    var gender      = (groupsState && groupsState.gender)       ? groupsState.gender        : [];
    var boots       = (groupsState && groupsState.boots)        ? groupsState.boots         : [];
    var clothes     = (groupsState && groupsState.clothes)      ? groupsState.clothes       : [];
    var accessories = (groupsState && groupsState.accessories)  ? groupsState.accessories   : [];
    var balls       = (groupsState && groupsState.balls)        ? groupsState.balls         : [];
    var brands      = (groupsState && groupsState.brands)       ? groupsState.brands        : [];
    var models      = (groupsState && groupsState.models)       ? groupsState.models        : [];
    var colors      = (groupsState && groupsState.colors)       ? groupsState.colors        : [];
    var sizes       = (groupsState && groupsState.sizes)        ? groupsState.sizes         : [];
//    var bandles   = (groupsState && groupsState.bandles)      ? groupsState.bandles       : [];
//    var heights   = (groupsState && groupsState.heights)      ? groupsState.heights       : [];
    var offers      = (groupsState && groupsState.offers)       ? groupsState.offers        : [];
    
    mixer.setFilterGroupSelectors('gender',     gender.map(getSelectorFromValue));
    mixer.setFilterGroupSelectors('boots',      boots.map(getSelectorFromValue));
    mixer.setFilterGroupSelectors('clothes',    clothes.map(getSelectorFromValue));
    mixer.setFilterGroupSelectors('accessories',accessories.map(getSelectorFromValue));
    mixer.setFilterGroupSelectors('balls',      balls.map(getSelectorFromValue));
    mixer.setFilterGroupSelectors('brands',     brands.map(getSelectorFromValue));
    mixer.setFilterGroupSelectors('models',     models.map(getSelectorFromValue));
    mixer.setFilterGroupSelectors('colors',     colors.map(getSelectorFromValue));
    mixer.setFilterGroupSelectors('sizes',      colors.map(getSelectorFromValue));
//    mixer.setFilterGroupSelectors('bandles',  bandles.map(getSelectorFromValue));
//    mixer.setFilterGroupSelectors('heights',  heights.map(getSelectorFromValue));
    mixer.setFilterGroupSelectors('offers',     offers.map(getSelectorFromValue));

//      кажется фильтровать группу maxprice по состоянию не прийдется, 
//      т.к. во всей группе эземпляр рендж-слайдера единственный.
//      Но, т.к. при необходимости строка для range не идентична остальным фильтрациям в функции- пока оставлю...
//    mixer.setFilterGroupSelectors('maxprice', ['data-maxprice']);

    return mixer.parseFilterGroups(animate ? true : false);
}";
echo '</script>';
