<?php
require_once __DIR__ . '/functions/init.php';
require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/helpers.php';

/** @var mysqli $link */
$categories = getCategories($link);
$lots = getLots($link);

$isAuth = rand(0, 1);

$userName = 'Дмитрий'; // укажите здесь ваше имя

$content = includeTemplate('main.php',
    [
        'categories' => $categories,
        'lots' => $lots,
    ]
);

$layout = includeTemplate('layout.php',
    [
        'title' => 'Главная',
        'userName' => $userName,
        'isAuth' => $isAuth,
        'content' => $content,
        'categories' => $categories,
    ]
);

print($layout);