<?php
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates/index');
    $twig = new \Twig\Environment($loader);

    echo $twig->render('index.html.twig', [
        'stylesheet' => [
            '/Munchy/view/style/css/index.css',
            '/Munchy/view/style/css/style.css'
        ], //could be nested array also
        'javascriptModule' => [
            '/Munchy/view/script/login/ajaxLogin.js',
            '/Munchy/view/script/login/validation.js',
        ],
        'javascript' => []
    ]);
?>