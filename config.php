﻿<?php
const INC = __DIR__ . "/inc/";
$data = getConfig();

function getConfig() {
    $data = [];
    $data['pref'] = "/proto/";
    $data['cv'] = "1.0";
    $data['version'] = 100000 + rand(1, 100000);
    $data['langs'] = ["en", "ru"];
    $get = filter_input(INPUT_GET, 'cats', FILTER_SANITIZE_SPECIAL_CHARS);
    $data['get'] = $get;
    $data['category'] = [
        "boots" => "Обувь",
        "clothes" => "Одежда",
        "accessories" => "Аксессуары",
        "balls" => "Мячи",
        "discount" => "Скидки"
    ];
    $data['cats'] = $data['category'][$get] ? $data['category'][$get] : false;
    $data['filters'] = [
        "gender" => [
            "header" => "Пол",
            "body" => [
                ["en" => "man", "ru" => "Мужчины",],
                ["en" => "women", "ru" => "Женщины",],
                ["en" => "child", "ru" => "Дети",],
            ]
        ],
        "boots" => [
            "header" => "Обувь",
            "body" => [
                ["en" => "cross", "ru" => "Кроссовки",],
                ["en" => "wcross", "ru" => "Зимние кроссовки",],
                ["en" => "kedy", "ru" => "Кеды",],
                ["en" => "slancy", "ru" => "Сланцы",],
            ]
        ],
        "clothes" => [
            "header" => "Одежда",
            "body" => [
                ["en" => "tolstovki", "ru" => "Толстовки",],
                ["en" => "mayki", "ru" => "Футболки и майки",],
                ["en" => "compress", "ru" => "Компрессионная одежда",],
                ["en" => "kurtki", "ru" => "Куртки и Олимпийки",],
                ["en" => "bruki", "ru" => "Брюки",],
                ["en" => "shorti", "ru" => "Шорты",],
                ["en" => "noski", "ru" => "Носки",],
            ]
        ],
        "accessories" => [
            "header" => "Аксессуары",
            "body" => [
                ["en" => "caps", "ru" => "Шапки и кепки",],
                ["en" => "onbottom", "ru" => "Наколенники",],
                ["en" => "handed", "ru" => "Рукава",],
                ["en" => "linen", "ru" => "Повязки и напульсники",],
                ["en" => "bags", "ru" => "Рюкзаки и сумки",],
                ["en" => "glasses", "ru" => "Очки для дриблинга",],
                ["en" => "descs", "ru" => "Тактическая доска",],
                ["en" => "saves", "ru" => "Средства по уходу",],
            ]
        ],
        "balls" => [
            "header" => "Мячи",
            "body" => [
                ["en" => "fives", "ru" => "Пятерки",],
                ["en" => "sevens", "ru" => "Семерки",],
            ]
        ],
        "brands" => [
            "header" => "Бренд",
            "body" => [
                ["en" => "jordan", "ru" => "Jordan",],
                ["en" => "nike", "ru" => "Nike",],
                ["en" => "underarmour", "ru" => "Under Armour ",],
                ["en" => "spalding", "ru" => "Spalding",],
                ["en" => "mcdavid", "ru" => "McDavid",],
                ["en" => "molten", "ru" => "Molten",],
                ["en" => "mitchelness", "ru" => "Mitchel & Ness",],
            ]
        ],
        "models" => [
            "header" => "Модель",
            "body" => [
                ["en" => "lebron", "ru" => "Lebron",],
                ["en" => "kyrie", "ru" => "Kyrie",],
                ["en" => "kd", "ru" => "KD",],
                ["en" => "kobe", "ru" => "Kobe",],
                ["en" => "nikesb", "ru" => "Nike SB",],
                ["en" => "curry", "ru" => "Curry",],
                ["en" => "paulgeirge", "ru" => "Paul Geirge (PG)",],
            ]
        ],
        "colors" => [
            "header" => "цвет",
            "body" => [
                ["en" => "white", "ru" => "Белые",],
                ["en" => "black", "ru" => "Черные",],
                ["en" => "gray", "ru" => "Серые",],
                ["en" => "green", "ru" => "Зеленые",],
                ["en" => "red", "ru" => "Красные",],
                ["en" => "orange", "ru" => "Оранжевые",],
                ["en" => "colored", "ru" => "Цветные",],
            ]
        ],
        "bandles" => [
            "header" => "Комплекты",
            "body" => [
                ["en" => "top", "ru" => "Верх",],
                ["en" => "bott", "ru" => "Низ",],
                ["en" => "compl", "ru" => "Комплект",],
            ]
        ],
        "heights" => [
            "header" => "Высота обуви",
            "body" => [
                ["en" => "high", "ru" => "High Top",],
                ["en" => "low", "ru" => "Low Top",],
                ["en" => "mid", "ru" => "Средняя высота ",],
            ]
        ],
        "offers" => [
            "body" => [
                ["en" => "news", "ru" => "Новинки",],
                ["en" => "dsc", "ru" => "Со скидкой",],
            ]
        ]
    ];
    $data['title'] = "title";
    $data['cssPref'] = [
        "assets/css/"
    ];
    $data['jsPref'] = [
        "assets/js/"
    ];
    $data['sizename'] = [
        "ru",
        "eu",
        "us_m",
        "us_w",
        "uk",
        "cm",
    ];
    $data['sizetable'] = [
        ["35.5", "36", "4", "5", "3.5", "22.5"],
        ["36", "36 2/3", "4.5", "5.5", "4", "23"],
        ["36.5", "37 1/3", "5", "6", "4.5", "23.3"],
        ["37", "38", "5.5", "6.5", "5", "23.5"],
        ["37.5", "38 2/3", "6", "7", "5.5", "24"],
        ["38", "39 1/3", "6.5", "7.5", "6", "24.5"],
        ["38.5", "40", "7", "8", "6.5", "24.8"],
        ["39", "40 2/3", "7.5", "8.5", "7", "25"],
        ["40", "41 1/3", "8", "9", "7.5", "25.5"],
        ["40.5", "42", "8.5", "9.5", "8", "26"],
        ["41", "42 /3", "9", "10", "8.5", "26.5"],
        ["42", "43 1/3", "9.5", "10.5", "9", "27"],
        ["42.5", "44", "10", "11", "9.5", "27.3"],
        ["43", "44 2/3", "10.5", "11.5", "10", "27.5"],
        ["44", "45 1/3", "11", "12", "10.5", "28"],
        ["44.5", "46", "11.5", "12.5", "11", "28.5"],
        ["45", "46 2/3", "12", "13", "11.5", "29"],
        ["46", "47 1/3", "12.5", "13.5", "12", "29.5"],
        ["46.5", "48", "13", "14", "12.5", "30"],
        ["47", "48 2/3", "13.5", "14.5", "13", "30.3"],
        ["48", "49 1/3", "14", "15", "13.5", "30.5"],
        ["49", "50", "14.5", "15.5", "14", "31"],
        ["49.5", "50 2/3", "15", "-", "14.5", "31.4"],
        ["50", "51 1/3", "16", "-", "15", "31.8"],
        ["51", "52 2/3", "17", "-", "16", "32.6"],
        ["52", "53 1/3", "18", "-", "17", "33.5"],
        ["53", "54 2/3", "19", "-", "18", "34.3"],
        ["54", "55 2/3", "20", "-", "19", "35.2"],
    ];
    return $data;
}
