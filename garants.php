<?php
require_once 'config.php';
$data = getConfig();
$title = "Гарантии (прототип) версия ".$data['cv'];

foreach (["_start", "_head",
    "_garants",
"_footer", "_end"
] as $file) {
    if (file_exists(INC . $file . ".php")) {
        include_once INC . $file . ".php";
    } else {
        echo '<pre>';
        print_r("Not found $file");
        exit();
    }
}
