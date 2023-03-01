<?php
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates/register');
    $twig = new \Twig\Environment($loader);
    
    echo $twig->render('register.html', [
        'stylesheet' => '/Munchy/view/style/css/register.css', //could be nested array also
        'javascriptModule' => [
            '/Munchy/view/script/register/ajaxRegister.js',
            '/Munchy/view/script/register/validation.js',
            '/Munchy/view/script/register/registerValidation.js',
        ],
        'javascript' => []
    ]);
?>