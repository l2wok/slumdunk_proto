<!-- START страница входа -->
<div class="container pb-4">
    <div class="row">
        <div class="col-12 col-lg-4 offset-lg-1">
            <h2 class="text-uppercase mt-3">войти</h2>
            <form class="row mb-4" role="form">
                <div class="form-group col-12 mt-3">
                    <label for="loginName">Введите email или номер телефона</label>
                    <input type="text" class="form-control form-control-lg is-invalid" id="loginName" placeholder="E-mail или номер телефона">
                    <div class="invalid-feedback">
                      Описание возможной ошибки. Если есть ошибка
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="loginPass">Пароль:</label>
                    <input type="password" class="form-control form-control-lg is-valid" id="loginPass" placeholder="Пароль" >
                </div>
                <div class="form-group custom-control col-12 custom-checkbox form-check d-flex flex-row justify-content-between align-items-center">
                    <div class="">
                        <input type="checkbox" class="custom-control-input" id="saveMe">
                        <label class="custom-control-label ml-3 my-3" for="saveMe">
                            Запомнить
                        </label>
                    </div>
                    <div class="">
                        <a href="#" class="text-md text-muted lead">Забыли пароль?</a>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-orange btn-block py-2">Войти</button>
                </div>
            </form>
            <p class="text-md mb-3">Для входа вы также можете использовать один из своих существующих аккаунтов</p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-orange flex-fill py-2 mr-2">
                    <i class="fab fa-vk"></i> ВКОНТАКТЕ
                </button>
                <button class="btn btn-outline-orange flex-fill py-2 mr-2">
                    <i class="fab fa-facebook"></i> FACEBOOK
                </button>
                <button class="btn btn-outline-orange flex-fill py-2">
                    <i class="fab fa-google"></i> GOOGLE
                </button>
            </div>
        </div>
        <div class="col-12 col-lg-4 offset-lg-1">
            <h2 class="text-uppercase mt-3 mb-3">создать аккаунт</h2>
            <p>Cоздавая личный кабинет Вы открываете для себя все преимущества программы лояльности SLAMDUNK:</p>
            <br />
            <ul class="text-muted sign-ul mb-3">
                <li class="lead">Единый личный кабинет для доступа ко всем сервисам </li>
                <li class="lead">Получите доступ к специальным ценам и выгодным предложениям</li>
                <li class="lead">Управляйте своим профилем и настройте подходящую вам форму оповещений о предложениях и скидках</li>
                <li class="lead">Следите за историей и состоянием своих заказов онлайн</li>
                <li class="lead">Заказывайте специальные размеры и получайте уведомления об их поступлении</li>
                <li class="lead">И многое другое!</li>
            </ul>
            <button class="btn btn-orange btn-block py-2">Получить преимущества сейчас</button>
        </div>
    </div>
</div>
<!-- END страница входа -->