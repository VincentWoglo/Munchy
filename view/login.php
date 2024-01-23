<?php
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates/index');
    $twig = new \Twig\Environment($loader);

    echo $twig->render('login.html', [
        'stylesheet' => '/Munchy/view/style/css/login.css', //could be nested array also
        'javascriptModule' => [
            '/Munchy/view/script/login/ajaxLogin.js',
            '/Munchy/view/script/login/validation.js',
        ],
        'javascript' => []
    ]);
?>