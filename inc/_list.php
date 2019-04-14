<div class="container my-2">
    <div class="table-responsive ">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ссылка на страницу</th>
                    <th>ExecFile</th>
                    <th>IncFile</th>
                    <th>%</th>
                    <th>usable id/classes</th>
                    <th>Примечания, замечания и т.д.</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>0</td>
                    <td><a href="https://docs.google.com/spreadsheets/d/1CD-hB4MTTJxqtqavShf9hBaJ1x4QeYANET-xUKXxRFM/edit#gid=950562734" target="_blank">Внешние гугл-доки</a></td>
                    <td>-</td>
                    <td>-</td>
                    <td>100%</td>
                    <td>-</td>
                    <td class="small">Используемые примечания и замечания</td>
                </tr>
                <tr class="">
                    <td>1</td>
                    <td><a href="<?php echo $data['pref'];?>list.php">Список всех страниц</a></td>
                    <td>каждая страница</td>
                    <td class="small">
                        _start <br>
                        _head <br>
                        _footer <br>
                        _end
                    </td>
                    <td>?</td>
                    <td class="small">
                        <strong>cart indicator</strong>
                        <ul>
                            <li>span#j-cart-label-desktop</li>
                            <li>span#j-cart-label-mobile</li>
                        </ul>
                        <strong>search</strong>
                        <ul>
                            <li>input#search_input</li>
                            <li>button[type=submit]#s_input</li>
                        </ul>
                    </td>
                    <td class="small">Эта страница /list.php как и все остальные подключает:<br>
                        (_start) html body meta-head <br>
                        (_head) header-topnav <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;_подключаемый файл своего контента<br>
                        (_footer) footer <br>
                        (_end) close html body <br>
                    </td>
                </tr>
                <tr class="">
                    <td>2</td>
                    <td><a href="<?php echo $data['pref'];?>index.php">Главная</a></td>
                    <td>index.php</td>
                    <td class="small">
                        _land_main <br>
                        _land_mid <br>
                        _land_sec
                    </td>
                    <td>?</td>
                    <td>-</td>
                    <td class="small">Используемые примечания и замечания</td>
                </tr>
                
                
                <!--
                <tr class="">
                    <td>Главная страница</td>
                    <td><a href="<?php echo $data['pref'];?>index.php">/index.php</a></td>
                    <td>?</td>
                </tr>
                <tr class="">
                    <td>Каталог</td>
                    <td><a href="<?php echo $data['pref'];?>catalog.php?cats=clothes">/catalog.php?cats=clothes</a></td>
                    <td class="small">Kатегория = Oдежда<br>в _GET для ключа cats значением является текущая категория в фильтре</td>
                </tr>
                <tr class="">
                    <td>Карточка товара</td>
                    <td><a href="<?php echo $data['pref'];?>product.php">/product.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td>Корзина</td>
                    <td><a href="<?php echo $data['pref'];?>backet.php">/backet.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td class="">Модальные окна </td>
                    <td><a href="<?php echo $data['pref'];?>modal.php">/modal.php</a></td>
                    <td class="small">Добавление в корзину, табл.размеров, Заказ размера</td>
                </tr>
                <tr class="">
                    <td>Таблица размеров</td>
                    <td><a href="<?php echo $data['pref'];?>modal.php">/modal.php</a></td>
                    <td class="small">Модальное окно</td>
                </tr>
                <tr class="">
                    <td>Страница входа</td>
                    <td><a href="<?php echo $data['pref'];?>signin.php">/signin.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td>Страница регистрации</td>
                    <td><a href="<?php echo $data['pref'];?>register.php">/register.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td>Профиль</td>
                    <td><a href="<?php echo $data['pref'];?>profile.php">/profile.php</a></td>
                    <td class="small">+Личный кабинет чтоли+</td>
                </tr>
                <tr class="">
                    <td>Подтверждение заказа</td>
                    <td><a href="<?php echo $data['pref'];?>confirm.php">/confirm.php</a></td>
                    <td class="small">+Заполнение данных куда доставлять+</td>
                </tr>
                <tr class="">
                    <td>Ошибка 404</td>
                    <td><a href="<?php echo $data['pref'];?>404.php">/404.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td>Главная стр блога</td>
                    <td><a href="<?php echo $data['pref'];?>blog_main.php">/blog_main.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td>Страница блога</td>
                    <td><a href="<?php echo $data['pref'];?>blog_page.php">/blog_page.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td>Адреса и контакты</td>
                    <td><a href="<?php echo $data['pref'];?>contacts.php">/contacts.php</a></td>
                    <td class="small">+С картами как добраться+</td>
                </tr>
                <tr class="">
                    <td>Как заказать</td>
                    <td><a href="<?php echo $data['pref'];?>orderbefore.php">/orderbefore.php</a></td>
                    <td class="small">+информация как сделать заказ+</td>
                </tr>
                <tr class="">
                    <td>Оформленный заказ</td>
                    <td><a href="<?php echo $data['pref'];?>orderafter.php">/orderafter.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td>Договор оферты</td>
                    <td><a href="<?php echo $data['pref'];?>offer.php">/offer.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td>Вопросы и ответы</td>
                    <td><a href="<?php echo $data['pref'];?>faq.php">/faq.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td>Политика кофиденц.</td>
                    <td><a href="<?php echo $data['pref'];?>policy.php">/policy.php</a></td>
                    <td class="small">+Сам дьявол придумал слово КОНФИДЕНЦИАЛЬНОСТИ+</td>
                </tr>
                <tr class="">
                    <td>Доставка и оплата</td>
                    <td><a href="<?php echo $data['pref'];?>delivery.php">/delivery.php</a></td>
                    <td class="small">+информация+</td>
                </tr>
                <tr class="">
                    <td>Отмазка оригинальности</td>
                    <td><a href="<?php echo $data['pref'];?>garants.php">/garants.php</a></td>
                    <td class="small">+ГАРАНТИИ ? по смыслу ждал бы другого...+</td>
                </tr>
                <tr class="">
                    <td>Программа лояльности</td>
                    <td><a href="<?php echo $data['pref'];?>loyal.php">/loyal.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td>О нас</td>
                    <td><a href="<?php echo $data['pref'];?>about.php">/about.php</a></td>
                    <td class="small">++</td>
                </tr>
                <tr class="">
                    <td></td>
                    <td><a href="<?php echo $data['pref'];?>product.php">_</a></td>
                    <td class="small">++</td>
                </tr>
-->            </tbody>
        </table>
    </div>

</div>

