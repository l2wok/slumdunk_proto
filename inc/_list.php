<div class="container my-2">

<!--    <h2>Все страницы прототипа</h2>
    <p class="lead mb-3">По состоянию на <em><?php echo date("d m Y"); ?></em></p>
    <div class="table-responsive ">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Наименование</th>
                    <th>Cсылка</th>
                    <th>Примечания / Готовность</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>Пи-категории</td>
                    <td><a href="https://docs.google.com/spreadsheets/d/1CD-hB4MTTJxqtqavShf9hBaJ1x4QeYANET-xUKXxRFM/edit#gid=950562734" target="_blank">Внешние гугл-доки</a></td>
                    <td>-</td>
                </tr>
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
            </tbody>
        </table>
    </div>-->

</div>

