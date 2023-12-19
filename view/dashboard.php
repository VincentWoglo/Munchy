<?php
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates/dashboard');
    $twig = new \Twig\Environment($loader);

    echo $twig->render('home.html', [
        'stylesheet' => '/Munchy/view/style/css/dashboard.css', //could be array also
        'nav_logo' => '/Munchy/view/assets/image/logo_icon.png',
        'nav_todo_list' => '/Munchy/view/assets/image/check-square.svg',
        'notification_bell_icon' => '/Munchy/view/assets/image/bell.svg',
        'nav_search_icon' => '/Munchy/view/assets/image/search.svg',
        'javascriptModule' => [
            '/Munchy/view/script/login/ajaxLogin.js',
            '/Munchy/view/script/login/validation.js',
        ],
        'javascript' => []
    ]);
?>