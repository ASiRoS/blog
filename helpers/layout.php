<?php

function twig_init() {
    $path = __DIR__  . '/../layouts/';

    $loader = new \Twig\Loader\FilesystemLoader($path);

    $twig = new \Twig\Environment($loader, [
        'cache' => false // __DIR__ . '/../cache',
    ]);

    $twig->addExtension(new \Twig\Extension\DebugExtension());

    return $twig;
}

$twig = twig_init();

$render = function ($file_name, $data) use ($twig) {
    return $twig->render($file_name . '.html.twig', $data);
};