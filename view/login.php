<?php
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates/index');
    $twig = new \Twig\Environment($loader);
    
    echo $twig->render('login.html', [
        'stylesheet' => '/Munchy/view/style/css/login.css', //could be nested array also
        'script' => '/Munchy/view/script/loginValidation.js' //could be nested array also
    ]);
?>