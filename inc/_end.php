        <!-- // START js block -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        <script type="text/javascript" src="assets/js/current-device.min.js"></script>
        <script type="text/javascript" src="assets/js/app.js?v=<?php echo $data['version']; ?>"></script>
        <script type="text/javascript" src="assets/js/jquery.cookie.js"></script>
        <?php  //   скрипты фильтров подключаем только при наличии _GET[cats], т.е. только в каталоге товаров
        if($data['cats'] ):
        ?>
        <script type="text/javascript" src="assets/js/mixitup.min.js"></script>
        <script type="text/javascript" src="assets/js/multi.js"></script>
        <script type="text/javascript" src="assets/js/rangeslider.min.js"></script>
        <script type="text/javascript" src="assets/js/progma.js?v=<?php echo $data['version']; ?>"></script>
        <?php endif; ?>
        <script type="text/javascript" src="assets/js/temp.js?v=<?php echo $data['version']; ?>"></script>
        <!-- // END js block -->
    </body>
</html>