<?php

function twig_init() {
    $path = __DIR__  . '/../layouts/';

    $loader = new \Twig\Loader\FilesystemLoader($path);

    $twig = new \Twig\Environment($loader, [
        'cache' => false // __DIR__ . '/../cache',
    ]);

    $globals = [
        'is_logged' => is_logged(),
        'user_login' => get_user_login(),
        'errors' => get_errors(),
        'success' => get_success()
    ];

    foreach ($globals as $global => $value) {
        $twig->addGlobal($global, $value);
    }

    return $twig;
}

$twig = twig_init();

$render = function ($file_name, $data = []) use ($twig) {
    $result = $twig->render($file_name . '.html.twig', $data);

    delete_messages();

    return $result;
};