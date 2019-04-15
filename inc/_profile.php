<!-- section profile -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="col-12 alert py-3 mb-2 alert-warning alert-dismissible fade show" role="alert">
                <strong>Аллилуйа!</strong> Ваш аккаунт успешно создан! Вам правда надо такого рода оповещение?!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-2">
            <div class="card">
                <ul class="list-group list-group-flush list-group-nopadding" id="myTab" role="tablist">
                    <li class="list-group-item">
                        <a class="nav-link text-muted lead active" id="home-tab" data-toggle="tab" href="#myprofile" role="tab" aria-controls="myprofile" aria-selected="true">
                            Профиль
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link text-muted lead" id="profile-tab" data-toggle="tab" href="#myjoins" role="tab" aria-controls="myjoins" aria-selected="false">
                            Интересы
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link text-muted lead" id="messages-tab" data-toggle="tab" href="#myaddress" role="tab" aria-controls="myorders" aria-selected="false">
                            Адреса доставки
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link text-muted lead" id="messages-tab" data-toggle="tab" href="#myorders" role="tab" aria-controls="myorders" aria-selected="false">
                            Все заказы
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link text-muted lead" id="settings-tab" data-toggle="tab" href="#mysizes" role="tab" aria-controls="mysizes" aria-selected="false">
                            Заказанные размеры
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link text-muted lead" id="settings-tab" data-toggle="tab" href="#mylykas" role="tab" aria-controls="mylykas" aria-selected="false">
                            Избранное
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link text-muted lead" id="settings-tab" data-toggle="tab" href="#mydialogs" role="tab" aria-controls="mydialogs" aria-selected="false">
                            Обратная связь
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-lg-9 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content profile-tab">
                        <div class="tab-pane active" id="myprofile" role="tabpanel" >
                            <h3>Ваш профиль</h3>
                            <form>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <h4 class="text-muted">Контактные данные</h4>
                                        <div class="form-row">
                                            <div class="form-group col-12 col-lg-8">
                                                <input class="form-control" type="text" placeholder="Имя" autocomplete="username">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-12 col-lg-8">
                                                <label for="bday">Дата рождения</label>
                                                <input id="bday" class="form-control" type="date" inputmode="date" placeholder="дд.мм.гггг" >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-12">Пол:</label>
                                            <div class="form-group col-12 col-lg-8">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="radio" class="custom-control-input" name="radio-gender" id="g-man">
                                                    <label class="custom-control-label" for="g-man">Мужской</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="radio" class="custom-control-input" name="radio-gender" id="g-women">
                                                    <label class="custom-control-label" for="g-women">Женский</label>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="text-muted">Контактная информация</h4>
                                        <div class="form-row">
                                            <div class="form-group col-12 col-lg-8">
                                                <input class="form-control mb-2" type="email" placeholder="E-mail" >
                                                <input class="form-control" type="tel" placeholder="Мобильный телефон:" autocomplete="usertel" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <h4 class="text-muted">Дополнительные варианты авторизации</h4>
                                        <div class="form-row">
                                            <div class="input-group col-12 col-lg-8 mb-1">
                                                <p class="form-control is-ok">Vkontakte</p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="input-group col-12 col-lg-8 mb-1">
                                                <p class="form-control">Facebook</p>
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-dark" type="button">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="input-group col-12 col-lg-8">
                                                <p class="form-control">Google</p>
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-dark" type="button">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mt-3">
                                            <div class="form-group col-12 col-lg-8">
                                                <label for="bday">Изменить пароль</label>
                                                <input id="oldpass" autocomplete="current-password" class="form-control" type="password" placeholder="Старый пароль" >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-12 col-lg-8">
                                                <label for="bday">Новый пароль</label>
                                                <input id="newpass" autocomplete="new-password" class="form-control" type="password" placeholder="Новый пароль" >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-12 col-lg-8">
                                                <input id="newpassconfirm" autocomplete="new-password" class="form-control" type="password" placeholder="Подтверждение пароля" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <input class="btn btn-orange px-5" type="submit" value="Подтвердить" >
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="myjoins" role="tabpanel">
                            <h3>Ваши интересы</h3>
                            <p class="text-muted small mb-3">Мы постараемся отправлять Вам сообщения, соответствующие вашим интересам.<br>
                                Вы можете выбрать столько, сколько захотите</p>
                            <form>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="form-row">
                                            <label class="col-12">Направление интересов</label>
                                            <div class="form-group col-12 col-lg-8 ">
                                                <!-- <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="bball">
                                                        <label class="custom-control-label" for="bball">
                                                            Баскетбол
                                                        </label>
                                                    </div>-->
                                                <?php foreach (["Баскетбол", "Стрит-стиль", "Новинки", "Скидки",] as $key => $value) : ?>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="intr-<?php echo $key; ?>" value="<?php echo $value; ?>">
                                                        <label class="custom-control-label" for="intr-<?php echo $key; ?>">
                                                            <?php echo $value; ?>
                                                        </label>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-12">Бренды</label>
                                            <div class="form-group col-12 col-lg-8">
                                                <?php foreach ($data['filters']['brands']['body'] as $value) : ?>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="brands-<?php echo $value['en']; ?>" value="<?php echo $value['en']; ?>">
                                                        <label class="custom-control-label" for="brands-<?php echo $value['en']; ?>">
                                                            <?php echo $value['ru']; ?>
                                                        </label>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-row">
                                            <label class="col-12">Модели</label>
                                            <div class="form-group col-12 col-lg-8">
                                                <?php foreach ($data['filters']['models']['body'] as $value) : ?>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="models-<?php echo $value['en']; ?>" value="<?php echo $value['en']; ?>">
                                                        <label class="custom-control-label" for="models-<?php echo $value['en']; ?>">
                                                            <?php echo $value['ru']; ?>
                                                        </label>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input class="btn btn-orange px-5" type="submit" value="Сохранить" >
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="myaddress" role="tabpanel">
                            <h3 class="mb-3">Ваши адреса доставки</h3>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <button type="button" class="btn btn-outline-dark"
                                            type="button" data-toggle="collapse" data-target="#newaddress"
                                            aria-expanded="false" aria-controls="newaddress">Добавить новый адрес доставки</button>
                                    <div class="collapse" id="newaddress">
                                        <form class="row pt-1 mb-2">
                                            <div class="col-7 mb-1">
                                                <input type="text" class="form-control" placeholder="Страна">
                                            </div>
                                            <div class="col-5 mb-1">
                                                <input type="text" class="form-control" placeholder="Индекс">
                                            </div>
                                            <div class="col-12 mb-1">
                                                <input type="text" class="form-control" placeholder="Город/Населенный пункт">
                                            </div>
                                            <div class="col-12 mb-1">
                                                <input type="text" class="form-control" placeholder="Адрес">
                                            </div>
                                            <div class="col-12 mb-1">
                                                <input type="text" class="form-control" placeholder="Номер телефона">
                                            </div>
                                            <div class="col-12 mb-1">
                                                <div class="custom-control custom-checkbox mt-1">
                                                    <input type="checkbox" class="custom-control-input" id="defaddress">
                                                    <label class="custom-control-label" for="defaddress">
                                                        Сделать основным
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-1">
                                                <button type="button" class="btn btn-dark mb-1" >Сохранить</button>
                                                <input type="reset" class="btn btn-outline-dark mb-1" data-toggle="collapse" data-target="#newaddress"
                                                       aria-expanded="false" aria-controls="newaddress" value="Очистить" onclick="this.blur()">
                                                <!--<button type="reset" class="btn btn-outline-dark mb-1" onclick="this.blur()">Очистить</button>-->
                                            </div>
                                        </form>
                                    </div>
                                    <hr/>
                                    <p>Текущий основной адрес доставки:</p>
                                    <p class="lead">Россия, Краснодарский край
                                        <br/>
                                        370820 г. Армавир ул. Любая 27
                                    </p>
                                    <hr/>
                                    <p class="lead">НЕ ВЫБРАН!</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <h5 class="text-muted">Все сохраненные адреса:</h5>
                                    <div class="input-group mb-1">
                                        <input type="text" disabled="" class="form-control" style="text-overflow: ellipsis" value="370820 Краснодарский край г. Армавир ул. Любая 27" >
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-dark" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="input-group mb-1">
                                        <input type="text" disabled="" class="form-control" style="text-overflow: ellipsis" value="113326 Москва, Шаболовка 37 Передача в гостях у сказки с Кремовым и Хрусталевым!" >
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-dark" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="input-group mb-1">
                                        <input type="text" disabled="" class="form-control" style="text-overflow: ellipsis" value="113326 Москва, Шаболовка 37 Передача в гостях у сказки с Кремовым и Хрусталевым!" >
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-dark" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="input-group mb-1">
                                        <input type="text" disabled="" class="form-control" style="text-overflow: ellipsis" value="113326 Москва, Шаболовка 37 Передача в гостях у сказки с Кремовым и Хрусталевым!" >
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-dark" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="myorders" role="tabpanel">
                            <h3 class="mb-3">Ваши заказы:</h3>
                            <div class="row">
                                <div class="col-12 row mb-3">
                                    <div class="col-12 col-lg-5">
                                        <div class="card">
                                            <div class="card-body small">
                                                <p>Текущая скидка: 5%</p>
                                                <p>Общая сумма заказов: 20000р.</p>
                                                <p>До следующей скидки (10%): 80000р.</p>
                                                <p>Подробнее: <a href="#" class="text-muted">Программа лояльности</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="accordion col-12 mb-2" id="all-orders">
                                    <div class="card">
                                        <div class="card-header" id="order-header-0">
                                            <div class="w-100 small text-md d-flex align-items-center" type="button" data-toggle="collapse" 
                                                 data-target="#order-0" aria-expanded="false" aria-controls="order-0">
                                                <i class="fas fa-chevron-down mr-2 mr-lg-4"></i>
                                                <div class="flex-fill d-block d-lg-flex justify-content-between align-items-center pt-1">
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Заказ # 271232</div>
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Всего товаров: 2</div>
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Общая сумма: 17800р.</div>
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Дата отправки: 18.07.2018</div>
                                                    <div class="ml-lg-auto"><label class="badge badge-orange"> В пути</label></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="order-0" class="collapse" aria-labelledby="order-header-0" data-parent="#all-orders">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">Дата заказа:<span class="small"> 28.02.2019</span></div>
                                                    <div class="col-12 col-lg-6">Номер отслеживания:<span class="small"> 271232</span></div>
                                                    <div class="col-12">
                                                        Стоимость доставки: <span class="small"> 550р</span>. 
                                                        Скидка: <span class="small"> 550р</span>. 
                                                        Общая стоимость: <span class="small"> 17800р</span>
                                                    </div>
                                                    <div class="col-12 py-1"><hr/></div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-3">
                                                        <img src="//www.slamdunk.su/thumbs/5bf68cab4c0284e05a34a40c7319bca8748f1b80f94e6.jpg" class="img-fluid" alt=""/>
                                                    </div>
                                                    <div class="col-9 mb-2 mb-lg-0">
                                                        <p>Спортивные кроссовки Air Jordan X</p>
                                                        <div class="w-100 d-block d-lg-flex justify-content-between">
                                                            <div class="flex-fill">
                                                                <p class="small">Артикул: 1132343</p>
                                                                <p class="small">Размер: 48</p>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <p>Цена: 12800р.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-3">
                                                        <img src="//www.slamdunk.su/thumbs/5bf68cab4c0284e05a34a40c7319bca8748f1b80f94e6.jpg" class="img-fluid" alt=""/>
                                                    </div>
                                                    <div class="col-9 mb-2 mb-lg-0">
                                                        <p>Спортивные кроссовки Air Jordan X</p>
                                                        <div class="w-100 d-block d-lg-flex justify-content-between">
                                                            <div class="flex-fill">
                                                                <p class="small">Артикул: 1132343</p>
                                                                <p class="small">Размер: 48</p>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <p>Цена: 5000р.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="order-header-1">
                                            <div class="w-100 small text-md d-flex align-items-center" type="button" data-toggle="collapse" 
                                                 data-target="#order-1" aria-expanded="false" aria-controls="order-1">
                                                <i class="fas fa-chevron-down mr-2 mr-lg-4"></i>
                                                <div class="flex-fill d-block d-lg-flex justify-content-between align-items-center pt-1">
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Заказ # 271232</div>
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Всего товаров: 3</div>
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Общая сумма: 27800р.</div>
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Дата выполнения: 18.07.2017</div>
                                                    <div class="ml-lg-auto"><label class="badge badge-dark"> Выполнен</label></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="order-1" class="collapse" aria-labelledby="order-header-1" data-parent="#all-orders">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">Дата заказа:<span class="small"> 28.02.2019</span></div>
                                                    <div class="col-12 col-lg-6">Номер отслеживания:<span class="small"> 271232</span></div>
                                                    <div class="col-12">
                                                        Стоимость доставки: <span class="small"> 550р</span>. 
                                                        Скидка: <span class="small"> 550р</span>. 
                                                        Общая стоимость: <span class="small"> 17800р</span>
                                                    </div>
                                                    <div class="col-12 py-1"><hr/></div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-3">
                                                        <img src="//www.slamdunk.su/thumbs/5bf68cab4c0284e05a34a40c7319bca8748f1b80f94e6.jpg" class="img-fluid" alt=""/>
                                                    </div>
                                                    <div class="col-9 mb-2 mb-lg-0">
                                                        <p>Спортивные кроссовки Air Jordan X</p>
                                                        <div class="w-100 d-block d-lg-flex justify-content-between">
                                                            <div class="flex-fill">
                                                                <p class="small">Артикул: 1132343</p>
                                                                <p class="small">Размер: 48</p>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <p>Цена: 12800р.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-3">
                                                        <img src="//www.slamdunk.su/thumbs/5bf68cab4c0284e05a34a40c7319bca8748f1b80f94e6.jpg" class="img-fluid" alt=""/>
                                                    </div>
                                                    <div class="col-9 mb-2 mb-lg-0">
                                                        <p>Спортивные кроссовки Air Jordan X</p>
                                                        <div class="w-100 d-block d-lg-flex justify-content-between">
                                                            <div class="flex-fill">
                                                                <p class="small">Артикул: 1132343</p>
                                                                <p class="small">Размер: 48</p>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <p>Цена: 5000р.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="order-header-2">
                                            <div class="w-100 small text-md d-flex align-items-center" type="button" data-toggle="collapse" 
                                                 data-target="#order-2" aria-expanded="false" aria-controls="order-2">
                                                <i class="fas fa-chevron-down mr-2 mr-lg-4"></i>
                                                <div class="flex-fill d-block d-lg-flex justify-content-between align-items-center pt-1">
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Заказ # 271232</div>
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Всего товаров: 1</div>
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Общая сумма: 7800р.</div>
                                                    <div class="d-block d-lg-inline mr-0 mr-lg-4">Дата создания: 18.07.2015</div>
                                                    <div class="ml-lg-auto"><label class="badge badge-dark"> Отменен</label></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="order-2" class="collapse" aria-labelledby="order-header-2" data-parent="#all-orders">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">Дата заказа:<span class="small"> 28.02.2019</span></div>
                                                    <div class="col-12 col-lg-6">Номер отслеживания:<span class="small"> 271232</span></div>
                                                    <div class="col-12">
                                                        Стоимость доставки: <span class="small"> 550р</span>. 
                                                        Скидка: <span class="small"> 550р</span>. 
                                                        Общая стоимость: <span class="small"> 17800р</span>
                                                    </div>
                                                    <div class="col-12 py-1"><hr/></div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-3">
                                                        <img src="//www.slamdunk.su/thumbs/5bf68cab4c0284e05a34a40c7319bca8748f1b80f94e6.jpg" class="img-fluid" alt=""/>
                                                    </div>
                                                    <div class="col-9 mb-2 mb-lg-0">
                                                        <p>Спортивные кроссовки Air Jordan X</p>
                                                        <div class="w-100 d-block d-lg-flex justify-content-between">
                                                            <div class="flex-fill">
                                                                <p class="small">Артикул: 1132343</p>
                                                                <p class="small">Размер: 48</p>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <p>Цена: 12800р.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-3">
                                                        <img src="//www.slamdunk.su/thumbs/5bf68cab4c0284e05a34a40c7319bca8748f1b80f94e6.jpg" class="img-fluid" alt=""/>
                                                    </div>
                                                    <div class="col-9 mb-2 mb-lg-0">
                                                        <p>Спортивные кроссовки Air Jordan X</p>
                                                        <div class="w-100 d-block d-lg-flex justify-content-between">
                                                            <div class="flex-fill">
                                                                <p class="small">Артикул: 1132343</p>
                                                                <p class="small">Размер: 48</p>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <p>Цена: 5000р.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="mysizes" role="tabpanel">
                            <h3 class="mb-3">В наличии:</h3>
                            <div class="card mb-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 col-lg-3">
                                            <img src="//www.slamdunk.su/thumbs/5bf68cab4c0284e05a34a40c7319bca8748f1b80f94e6.jpg" class="img-fluid" alt=""/>
                                        </div>
                                        <div class="col-8 col-lg-6 mb-2 mb-lg-0">
                                            <p>Спортивные кроссовки Air Jordan X</p>
                                            <p>Артикул: 1132343</p>
                                            <p>Размер: 48</p>
                                        </div>
                                        <div class="col-12 col-lg-3 mb-1 mb-lg-0">
                                            <label class="badge badge-orange btn-block mb-1 text-center">
                                                В наличии
                                            </label>
                                            <a href="#" class="btn btn-dark btn-block">
                                                Перейти к товару
                                            </a>
                                            <a href="#" class="btn btn-outline-dark btn-block">
                                                Удалить
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 col-lg-3">
                                            <img src="//www.slamdunk.su/thumbs/5bf68cab4c0284e05a34a40c7319bca8748f1b80f94e6.jpg" class="img-fluid" alt=""/>
                                        </div>
                                        <div class="col-8 col-lg-6 mb-2 mb-lg-0">
                                            <p>Спортивные кроссовки Air Jordan X</p>
                                            <p>Артикул: 1132343</p>
                                            <p>Размер: 48</p>
                                        </div>
                                        <div class="col-12 col-lg-3 mb-1 mb-lg-0">
                                            <label class="badge badge-orange btn-block mb-1 text-center">
                                                В наличии
                                            </label>
                                            <a href="#" class="btn btn-dark btn-block">
                                                Перейти к товару
                                            </a>
                                            <a href="#" class="btn btn-outline-dark btn-block">
                                                Удалить
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="my-3">Ожидание:</h3>
                            <div class="card mb-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 col-lg-3">
                                            <img src="//www.slamdunk.su/thumbs/5bf68cab4c0284e05a34a40c7319bca8748f1b80f94e6.jpg" class="img-fluid" alt=""/>
                                        </div>
                                        <div class="col-8 col-lg-6 mb-2 mb-lg-0">
                                            <p>Спортивные кроссовки Air Jordan X</p>
                                            <p>Артикул: 1132343</p>
                                            <p>Размер: 48</p>
                                        </div>
                                        <div class="col-12 col-lg-3 mb-1 mb-lg-0">
                                            <label class="badge badge-dark btn-block mb-1 text-center">
                                                Запрос отправлен
                                            </label>
                                            <a href="#" class="btn btn-outline-dark btn-block">
                                                Удалить
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <h3 class="my-3">Вы не заказывали размеры</h3>
                            <a class="btn btn-outline-dark mb-1">Смотреть каталог</a>
                            <a class="btn btn-outline-dark mb-1">Новинки</a>
                            <a class="btn btn-outline-dark mb-1">Товары со скидкой</a>
                        </div>
                        <div class="tab-pane" id="mylykas" role="tabpanel">
                            <h3 class="mb-3">В наличии:</h3>
                            <div class="card mb-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 col-lg-3">
                                            <img src="//www.slamdunk.su/thumbs/5bf68cab4c0284e05a34a40c7319bca8748f1b80f94e6.jpg" class="img-fluid" alt=""/>
                                        </div>
                                        <div class="col-8 col-lg-6 mb-2 mb-lg-0">
                                            <p>Спортивные кроссовки Air Jordan X</p>
                                            <p>Артикул: 1132343</p>
                                            <p>Размер: 48</p>
                                        </div>
                                        <div class="col-12 col-lg-3 mb-1 mb-lg-0">
                                            <label class="badge badge-orange btn-block mb-1 text-center">
                                                В наличии
                                            </label>
                                            <a href="#" class="btn btn-dark btn-block mb-1">
                                                Перейти к товару
                                            </a>
                                            <a href="#" class="btn btn-outline-dark btn-block">
                                                Удалить
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="my-3">Ожидание:</h3>
                            <div class="card mb-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 col-lg-3">
                                            <img src="//www.slamdunk.su/thumbs/5bf68cab4c0284e05a34a40c7319bca8748f1b80f94e6.jpg" class="img-fluid" alt=""/>
                                        </div>
                                        <div class="col-8 col-lg-6 mb-2 mb-lg-0">
                                            <p>Спортивные кроссовки Air Jordan X</p>
                                            <p>Артикул: 1132343</p>
                                            <p>Размер: 48</p>
                                        </div>
                                        <div class="col-12 col-lg-3 mb-1 mb-lg-0">
                                            <!-- <label class="badge badge-dark btn-block mb-1 text-center py-1">
                                                    Ожидание поступления
                                                </label>-->
                                            <a href="#" class="btn btn-outline-dark btn-block mb-1">
                                                Заказать размер
                                            </a>
                                            <a href="#" class="btn btn-outline-dark btn-block">
                                                Удалить
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <h3 class="my-3">В избранном ничего нет</h3>
                            <a class="btn btn-outline-dark mb-1">Смотреть каталог</a>
                            <a class="btn btn-outline-dark mb-1">Новинки</a>
                            <a class="btn btn-outline-dark mb-1">Товары со скидкой</a>
                        </div>
                        <div class="tab-pane" id="mydialogs" role="tabpanel">
                            <div class="row">
                                <div class="col-12 mb-2 d-block d-lg-flex justify-content-between">
                                    <h3 class="mb-2">Обратная связь</h3>
                                    <button class="btn btn-outline-orange"
                                            type="button" data-toggle="collapse" data-target="#new-ticket"
                                            aria-expanded="false" aria-controls="new-ticket">
                                        Открытие нового запроса
                                    </button>
                                </div>
                                <div id="new-ticket" class="col-12 col-lg-7 mb-2 collapse">
                                    <form>
                                        <input class="form-control mb-2" type="text" placeholder="Заголовок обращения">
                                        <textarea class="form-control mb-2" rows="4" placeholder="Введите ваш вопрос и мы обязательно Вам ответим!"></textarea>
                                        <button class="btn btn-outline-orange mb-2">Отправка нового запроса</button>
                                        <input type="reset" class="btn btn-outline-dark mb-2" data-toggle="collapse" data-target="#new-ticket"
                                               aria-expanded="false" aria-controls="new-ticket" value="Очистить">
                                        <!--                                    <button class="btn btn-outline-dark mb-2" type="button" data-toggle="collapse" data-target="#new-ticket"
                                                                                    aria-expanded="false" aria-controls="new-ticket" >Отменить</button>-->
                                    </form>
                                </div>

                                <div class="accordion col-12 mb-2" id="all-ask">

                                    <h4>Ваши запросы:</h4>
                                    <div class="card">
                                        <div class="card-header" id="ask-header-0">
                                            <div class="w-100 small text-md d-flex align-items-center" type="button" data-toggle="collapse" 
                                                 data-target="#ask-0" aria-expanded="false" aria-controls="ask-0">
                                                <i class="fas fa-chevron-down mr-2 mr-lg-4"></i>
                                                <div class="flex-fill d-block d-lg-flex justify-content-between align-items-center pt-1">
                                                    <div class="col-12 col-lg-4">#12141 <span class="badge badge-orange ml-4">Новый</span></div>
                                                    <div class="col-12 col-md-6 col-lg-4">Открыт 14/02/2017</div>
                                                    <div class="col-12 col-md-6 col-lg-4">В обработке</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="ask-0" class="collapse w-100" aria-labelledby="order-header-0" data-parent="#all-ask">
                                            <div class="card-body p-3 row">
                                                <div class="col-12 col-lg-4 mb-1">
                                                    <strong>Начальный запрос:</strong>
                                                    <p class="small">Автор: Вы - 17/05/2015</p>
                                                </div>
                                                <div class="col-12 col-lg-8 mb-1">
                                                    <strong>Заголовок обращения:</strong>
                                                    <p class="mb-1">За что я плОчу мамкины ловэ!?</p>
                                                    <strong>Текст обращения:</strong>
                                                    <p class="small mb-1">
                                                        Почему я отправил траляля а мне позвонил я вынужден писать сюда!
                                                    </p>
                                                </div>
                                                <div class="w-100"><hr class="mt-0 mb-1"/></div>
                                                <div class="col-12 col-lg-4 mb-1">
                                                    <strong>Ответ:</strong>
                                                    <p class="small">Автор: Муак - 18/05/2015</p>
                                                </div>
                                                <div class="col-12 col-lg-8 mb-1">
                                                    <p class="small mb-1">
                                                        Есть подозрения, что вам срочно требуется обратится к доктору.
                                                    </p>
                                                </div>
                                                <div class="w-100"><hr class="mt-0 mb-1"/></div>
                                                <div class="col-12 col-lg-4 mb-1">
                                                    <strong>Ответ:</strong>
                                                    <p class="small">Автор: Вы - 19/05/2015</p>
                                                </div>
                                                <div class="col-12 col-lg-8 mb-1">
                                                    <p class="small mb-1">
                                                        перестань!
                                                    </p>
                                                </div>
                                                <div class="w-100"><hr class="mt-0 mb-1"/></div>
                                                <div class="col-12 col-lg-4 mb-1">
                                                    <strong>Добавление ответа:</strong>
                                                    <p class="small">Автор: Вы</p>
                                                    <p class="small">Сегодня 10/04/2019</p>
                                                </div>
                                                <div class="col-12 col-lg-8 mb-1">
                                                    <form>
                                                        <textarea class="form-control mb-1" rows="4" placeholder=""></textarea>
                                                        <button class="btn btn-outline-orange mb-1">Ответить</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="ask-header-1">
                                            <div class="w-100 small text-md d-flex align-items-center" type="button" data-toggle="collapse" 
                                                 data-target="#ask-1" aria-expanded="false" aria-controls="ask-1">
                                                <i class="fas fa-chevron-down mr-2 mr-lg-4"></i>
                                                <div class="flex-fill d-block d-lg-flex justify-content-between align-items-center pt-1">
                                                    <div class="col-12 col-lg-4">#12141 <span class="badge badge-dark ml-4">Закрыт</span></div>
                                                    <div class="col-12 col-md-6 col-lg-4">Открыт 14/02/2017</div>
                                                    <div class="col-12 col-md-6 col-lg-4">Закрыт 24/03/2016</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="ask-1" class="collapse w-100" aria-labelledby="order-header-1" data-parent="#all-ask">
                                            <div class="card-body p-3 row">
                                                <div class="col-12 col-lg-4 mb-1">
                                                    <strong>Начальный запрос:</strong>
                                                    <p class="small">Автор: Вы - 17/05/2015</p>
                                                </div>
                                                <div class="col-12 col-lg-8 mb-1">
                                                    <strong>Заголовок обращения:</strong>
                                                    <p class="mb-1">За что я плОчу мамкины ловэ!?</p>
                                                    <strong>Текст обращения:</strong>
                                                    <p class="small mb-1">
                                                        Почему я отправил траляля!
                                                    </p>
                                                </div>
                                                <div class="w-100"><hr class="mt-0 mb-1"/></div>
                                                <div class="col-12 col-lg-4 mb-1">
                                                    <strong>Ответ:</strong>
                                                    <p class="small">Автор: Муак - 18/05/2015</p>
                                                </div>
                                                <div class="col-12 col-lg-8 mb-1">
                                                    <p class="small mb-1">
                                                        Есть подозренияобратится к доктору.
                                                    </p>
                                                </div>
                                                <div class="w-100"><hr class="mt-0 mb-1"/></div>
                                                <div class="col-12 col-lg-4 mb-1">
                                                    <strong>Ответ:</strong>
                                                    <p class="small">Автор: Вы - 19/05/2015</p>
                                                </div>
                                                <div class="col-12 col-lg-8 mb-1">
                                                    <p class="small mb-1">
                                                        Cка дичь!
                                                    </p>
                                                </div>
                                                <div class="w-100"><hr class="mt-0 mb-1"/></div>
                                                <div class="col-12 mb-1">
                                                    <p class="lead">Нельзя ответить на закрытый запрос. Если проблема повторяется, пожалуйста откройте новый запрос</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END section profile -->