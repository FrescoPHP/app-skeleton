<?php

/**
 * Init application
 */

$app = new Mosaic\Cement\Application;

$folderStructure = new Mosaic\Common\Conventions\DefaultFolderStructure(
    realpath(__DIR__ . '/../')
);

$app->components(
    Mosaic\Http\Component::diactoros(),
    Mosaic\Routing\Component::fastRoute(),
    Mosaic\Exceptions\Component::whoops(),
    Mosaic\View\Component::twig($folderStructure)
);

$app->bootstrap();

return $app;
