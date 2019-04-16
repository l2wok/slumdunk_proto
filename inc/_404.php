<!-- START 404-->
<div class="container h-100 d-flex justify-content-center align-items-center">
    <div class="row w-100">
        <div class="col-12 col-md-6 offset-md-3 text-center">
            <div class="card-body">
                <span style="font-size: 10vw; font-weight: 400;">404</span>
                <p class="text-left mb-1">Запрашиваемая вами страница удалена, или никогда не существовала.</p>
                <p class="text-left mb-3">Вы можете вернуться назад или продолжить покупки.</p>
                <div class="d-block d-md-flex">
                    <button  onclick="window.history.go(-1); return false;" class="btn btn-outline-orange col-12 col-md-6 mr-0 mr-md-1 py-2 mb-2">Назад</button>
                    <a href="<?php echo $data['pref']; ?>catalog.php?cats=boots" class="btn btn-orange col-12 col-md-6 py-2 mb-2">В каталог</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END 404-->