<?php 
    require_once '../vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('../public/templates/index');
    $twig = new \Twig\Environment($loader);
    
    echo $twig->render('index.html', ['name' => 'Fabien']);
?>