
<!-- START section confirm -->
<div class="container my-3">
    <form class="row">
        <div class="col-12 col-lg-6">
            <div class="c-section mb-2">
                <h4>Ваши данные</h4>
                <div class="card border-dark">
                    <div class="card-body row">
                        <div class="col-12 col-lg-12 mb-2">
                            <label for="uname" class="custom-label text-md">Как к вам обращаться? *</label>
                            <input id="uname" type="text" class="form-control" />
                        </div>
                        <div class="col-12 col-lg-12 mb-2">
                            <label for="utel" class="custom-label text-md">Номер телефона *</label>
                            <input id="utel" type="tel" class="form-control" />
                        </div>
                        <div class="col-12 col-lg-12 mb-2">
                            <label for="uemail" class="custom-label text-md">Ваш email *</label>
                            <input id="uemail" type="email" class="form-control mb-2" />
                            <p class="small"><strong>*</strong> Данные поля обязательны к заполнению</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-section mb-2">
                <h4>Укажите адрес доставки</h4>
                <div class="card border-dark">
                    <div class="card-body row">
                        <div class="col-12 col-lg-12 mb-2">
                            <select id="datesel" class="form-control form-control-lg mb-1" >
                                <option >Выбрать из добавленных адресов</option>
                                <option >357700 Армавир, ул. Любая 27</option>
                                <option >113326 Москва. Шаболовка 37</option>
                                <option >Заполнить в ручную и добавить в мои адреса</option>
                            </select>
                        </div>
                        <div class="col-8 col-lg-8 mb-2">
                            <input class="form-control form-control-lg" type="text" placeholder="Страна:">
                        </div>
                        <div class="col-4 col-lg-4 mb-2">
                            <input class="form-control form-control-lg" type="text" placeholder="Индекс">
                        </div>
                        <div class="col-12 col-lg-12 mb-2">
                            <input class="form-control form-control-lg" type="text" placeholder="Город:">
                        </div>
                        <div class="col-12 col-lg-12 mb-2">
                            <input class="form-control form-control-lg" type="text" placeholder="Адрес:">
                        </div>
                        <div class="col-12 col-lg-12 mb-2">
                            <select id="j-date-select" class="form-control form-control-lg mb-1" >
                                <option selected="">Выберите дату доставки</option>
                                <?php
                                for ($day = 0; $day < 6; $day++) {
                                    $dataday = strtotime("+$day day");
                                    $dateform = date("d-m-Y ", $dataday);
                                    echo '<option class="" value="' . $dateform . '">' . $dateform . '</option>';
                                }
                                ?>
                            </select>
                            <p class="small">* Доставка производится во временной промежуток с 9.00 до 19.00</p>
                        </div>

                        <div class="col-12 col-lg-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Комментарий (если необходим)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 ">
            <div class="c-section mb-2">
                <h4>Способ получения</h4>
                <div class="card border-dark">
                    <div class="card-body row">
                        <div class="col-12 custom-control custom-checkbox ml-3">
                            <input type="radio" class="custom-control-input" name="radio0" id="cmove1">
                            <label class="custom-control-label my-3" for="cmove1">Курьером (в пределах МКАД, от 300 рублей)</label>
                        </div>
                        <div class="col-12 custom-control custom-checkbox ml-3">
                            <input type="radio" class="custom-control-input" name="radio0" id="cmove2">
                            <label class="custom-control-label  my-3" for="cmove2">Почтой (от 300 рублей)</label>
                        </div>
                        <div class="col-12 custom-control custom-checkbox ml-3">
                            <input type="radio" class="custom-control-input" name="radio0" id="cmove3">
                            <label class="custom-control-label my-3" for="cmove3">Забрать из магазина (бесплатно)</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-section mb-2 ">
                <h4>Способ оплаты</h4>
                <div class="card border-dark">
                    <div class="card-body row">
                        <div class="col-12 custom-control custom-radio ml-3">
                            <input type="radio" class="custom-control-input" id="pay1" name="radio1">
                            <label class="custom-control-label my-3" for="pay1">Наличными при получении</label>
                        </div>
                        <div class="col-12 custom-control custom-radio ml-3">
                            <input type="radio" class="custom-control-input" id="pay2" name="radio1">
                            <label class="custom-control-label my-3" for="pay2">Оплата банковской картой при получении (у курьера)</label>
                        </div>
                        <div class="col-12 custom-control custom-radio ml-3">
                            <input type="radio" class="custom-control-input" id="pay3" checked="" name="radio1">
                            <label class="custom-control-label my-3" for="pay3">Оплата банковской картой онлайн</label>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Оформить заказ</h4>
            <div class="card border-dark">
                <div class="card-body row ">
                    <div class="col-12 d-flex justify-content-between py-1">
                        <span>Общая сумма</span>
                        <span>27 470 р.</span>
                    </div>
                    <div class="col-12 d-flex justify-content-between py-1">
                        <span>Всего товаров</span>
                        <span>2</span>
                    </div>
                    <div class=" col-12 d-flex justify-content-between py-1">
                        <span>Скидка</span>
                        <span>470 р.</span>
                    </div>
                    <div class=" col-12 d-flex justify-content-between py-1 mb-1">
                        <span>Доставка</span>
                        <span>470 р.</span>
                    </div>
                    <div class="col-12 d-flex justify-content-between py-1 my-1">
                        <h4>Игого</h4>
                        <h4>27 470 р.</h4>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-orange btn-block py-3">
                            ОФОРМИТЬ ЗАКАЗ
                        </button>
                    </div>
                </div>
            </div>
            <p class="text-md ">
                <strong>Внимание!</strong><br/>
                Оплата производится после подтверждения заказа оператором.
            </p>
            <i class="fab fa-cc-mastercard fa-2x"></i>
            <i class="fab fa-cc-visa fa-2x"></i>
            <i class="fas fa-credit-card fa-2x"></i>
            <p class="text-md my-1">
                Заказ можно оплатить картами МастерКард, Виза, Мир.
            </p>
            <p class="">Продолжая оформление заказа вы соглашаетесь c
                <a href="#" class="text-muted small">условиями&nbsp;оферты</a> и <a href="#" class="text-muted small">политикой&nbsp;конфиденциальности.</a>
            </p>
        </div>
    </form>
</div>
<!-- END section confirm -->