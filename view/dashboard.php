<?php
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates/dashboard');
    $twig = new \Twig\Environment($loader);

    echo $twig->render('home.html', []);
?>