<?php
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates/dashboard');
    $twig = new \Twig\Environment($loader);

    echo $twig->render('home.html', [
        'stylesheet' => '/Munchy/view/style/css/dashboard.css', //could be nested array also
        'nav_logo' => '/Munchy/view/assets/image/logo_icon.png',
        'javascriptModule' => [
            '/Munchy/view/script/login/ajaxLogin.js',
            '/Munchy/view/script/login/validation.js',
        ],
        'javascript' => []
    ]);
?>