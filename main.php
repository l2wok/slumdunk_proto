<?php
$ver = 100000 + rand(1, 100000);
/**
 * remove VER in local files and check title
 */
?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Main page v=<?php echo $ver;?></title>
        <!-- // css block -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/colors.css?v=<?php echo $ver;?>">
        <link rel="stylesheet" href="assets/css/styles_main.css?v=<?php echo $ver;?>">
    </head>
    <body class="d-flex flex-column h-100">
        <div class="d-flex">
        <?php
        $gamma['names'] = ['black', 'orange', 'pink', 'light', 'smoke'];
        $gamma['colors'] = ['black', 'orangered', 'lightcoral', 'gainsboro', 'whitesmoke'];
        for($i=0; $i < count($gamma['names']); $i++){
            $n_color = $gamma['names'][$i];
            $w_color = $gamma['colors'][$i];
            
            echo ""
                    . "<div class='card w-25'>"
                        . "<div class='card-header'>"
                            . "<p class='lead'>Web color = $w_color</p>"
                        . "</div>"
                        . "<div class='card-body'>"
                            . "<div class='form-control bg-color-$n_color'></div>";
                for($ic=0; $ic < count($gamma['names']); $ic++){
                    $t_color = $gamma['names'][$ic];
                        echo ""
                            . "<br>"
                            . "<div class='form-control bg-color-$n_color'>"
                                . "<p class='font-color-$t_color small'>Text $t_color</p>"
                            . "</div>";
                        for($s=0; $s < count($gamma['names']); $s++){
                            $s_color = $gamma['names'][$s];
                            
                                echo ""
                            . "<div class='form-control bg-color-$n_color '>"
                            . "<p class='font-color-$t_color font-shadow-$s_color small'>Text $t_color vs $s_color shadow</p>"
                            . "</div>";
                        }
                }
            echo ""
                        . "</div>"
                    . "</div>"
                . "";
        }
        ?>
        </div>
        
        <!-- // js block -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/current-device.min.js"></script>
        <script src="assets/js/app_main.js?v=<?php echo $ver;?>"></script>
    </body>
</html>