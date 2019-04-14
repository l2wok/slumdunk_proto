<?php

require_once 'config.php';
$data = getConfig();

$title = "Все страницы " . $data['cv'];

foreach (["_start", "_head",
 "_list",
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