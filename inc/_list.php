<div class="container my-2">
    <div class="table-responsive ">
        <table class="table table-hover">
            <thead>
                <tr class="bg-dark text-white">
                    <th>#</th>
                    <th>Ссылка на страницу</th>
                    <th>ExecFile</th>
                    <th>IncFile</th>
                    <th>usable id/classes</th>
                    <th>%</th>
                    <th >Примечания, замечания и т.д.</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>0</td>
                    <td><a href="https://docs.google.com/spreadsheets/d/1CD-hB4MTTJxqtqavShf9hBaJ1x4QeYANET-xUKXxRFM/edit#gid=950562734" target="_blank">Внешние гугл-доки</a></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>100%</td>
                    <td class="small">Используемые примечания и замечания</td>
                </tr>
                <tr class="">
                    <td>1</td>
                    <td><a href="<?php echo $data['pref'];?>list.php">Список страниц</a></td>
                    <td>list.php</td>
                    <td class="small">
                        _start <br>
                        _head <br>
                        _footer <br>
                        _end
                    </td>
                    <td class="small">
                        <strong>cart indicator</strong>
                        <ul>
                            <li>span#j-cart-label-desktop (_head)</li>
                            <li>span#j-cart-label-mobile (_footer)</li>
                        </ul>
                        <strong>search</strong>
                        <ul>
                            <li>input#search_input (_head)</li>
                            <li>button[type=submit]#s_input (_head)</li>
                        </ul>
                    </td>
                    <td>?</td>
                    <td class="small">Эта страница как и все остальные подключает:<br>
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
                    <td>-</td>
                    <td>?</td>
                    <td class="small">В карусели на мобиле 1й слайд фиксируется</td>
                </tr>
                <tr class="">
                    <td>3</td>
                    <td><a href="<?php echo $data['pref'];?>catalog.php?cats=boots">Каталог</a></td>
                    <td>catalog.php</td>
                    <td class="small">
                        _catalog <br>
                    </td>
                    <td>-</td>
                    <td>?</td>
                    <td class="small">Корня каталога (без категории, т.е. _GET) не существует...</td>
                </tr>
                <tr class="">
                    <td>4</td>
                    <td><a href="<?php echo $data['pref'];?>product.php">Карточка товара</a></td>
                    <td>product.php</td>
                    <td class="small">
                        _product <br>
                        _land_mid <br>
                        _land_sec
                    </td>
                    <td>-</td>
                    <td>?</td>
                    <td class="small">Отдельная страница с товаром. Подключает кроме файла продукта еще и доп-товарамы, субскрайб и нижние ссылки
                    </td>
                </tr>
                <tr class="">
                    <td>5</td>
                    <td><a href="<?php echo $data['pref'];?>backet.php">Корзина</a></td>
                    <td>backet.php</td>
                    <td class="small">
                        _backet
                    </td>
                    <td class="small">
                        <strong>promocode</strong>
                        <ul>
                            <li>input#j-promo</li>
                            <li>button[type=submit]#j-promo-submit</li>
                        </ul>
                    </td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>6</td>
                    <td><a href="<?php echo $data['pref'];?>signin.php">Вход</a></td>
                    <td>signin.php</td>
                    <td class="small">
                        _signin
                    </td>
                    <td class="small">
                    </td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>7</td>
                    <td><a href="<?php echo $data['pref'];?>register.php">Регистрация</a></td>
                    <td>register.php</td>
                    <td class="small">
                        _register
                    </td>
                    <td class="small">
                    </td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>8</td>
                    <td><a href="<?php echo $data['pref'];?>profile.php">Личн.Кабинет</a></td>
                    <td>profile.php</td>
                    <td class="small">
                        _profile
                    </td>
                    <td class="small">
                    </td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>9</td>
                    <td><a href="<?php echo $data['pref'];?>confirm.php">Подтверждение заказа</a></td>
                    <td>confirm.php</td>
                    <td class="small">
                        _confirm
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>10</td>
                    <td><a href="<?php echo $data['pref'];?>404.php">404</a></td>
                    <td>404.php</td>
                    <td class="small">
                        _404
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>11</td>
                    <td><a href="<?php echo $data['pref'];?>blog_main.php">Блог</a></td>
                    <td>blog_main.php</td>
                    <td class="small">
                        _blog_main
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>12</td>
                    <td><a href="<?php echo $data['pref'];?>blog_page.php">Блог статья</a></td>
                    <td>blog_page.php</td>
                    <td class="small">
                        _blog_page
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>13</td>
                    <td><a href="<?php echo $data['pref'];?>contacts.php">Адреса</a></td>
                    <td>contacts.php</td>
                    <td class="small">
                        _contacts
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>14</td>
                    <td><a href="<?php echo $data['pref'];?>orderafter.php">Оформленный заказ</a></td>
                    <td>orderafter.php</td>
                    <td class="small">
                        _orderafter
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>15</td>
                    <td><a href="<?php echo $data['pref'];?>orderbefore.php">Как заказать</a></td>
                    <td>orderbefore.php</td>
                    <td class="small">
                        _orderbefore
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>16</td>
                    <td><a href="<?php echo $data['pref'];?>offer.php">Договор оферты</a></td>
                    <td>offer.php</td>
                    <td class="small">
                        _offer
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>17</td>
                    <td><a href="<?php echo $data['pref'];?>faq.php">Вопросы и ответы</a></td>
                    <td>faq.php</td>
                    <td class="small">
                        _faq
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>18</td>
                    <td><a href="<?php echo $data['pref'];?>policy.php">Политика кофиденц</a></td>
                    <td>policy.php</td>
                    <td class="small">
                        _policy
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>19</td>
                    <td><a href="<?php echo $data['pref'];?>delivery.php">Доставка и оплата</a></td>
                    <td>delivery.php</td>
                    <td class="small">
                        _delivery
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>20</td>
                    <td><a href="<?php echo $data['pref'];?>garants.php">Отмазка оригинальности</a></td>
                    <td>garants.php</td>
                    <td class="small">
                        _garants
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>21</td>
                    <td><a href="<?php echo $data['pref'];?>loyal.php">Программа лояльности</a></td>
                    <td>loyal.php</td>
                    <td class="small">
                        _loyal
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                <tr class="">
                    <td>22</td>
                    <td><a href="<?php echo $data['pref'];?>about.php">О нас</a></td>
                    <td>about.php</td>
                    <td class="small">
                        _about<br>
                        _land_sec
                    </td>
                    <td class="small"></td>
                    <td>?</td>
                    <td>-</td>
                </tr>
                
            </tbody>
        </table>
    </div>

</div>

