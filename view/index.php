<?php
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates/index');
    $twig = new \Twig\Environment($loader);

    echo $twig->render('index.html', [
        'receive_payment_image' => '/Munchy/view/assets/image/Illustration.png',
        'video_play_button_image' => '/Munchy/view/assets/image/Vector (Stroke).png',
        'video_thumbnail_image' => '/Munchy/view/assets/image/Rectangle 4369 (1).png',
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