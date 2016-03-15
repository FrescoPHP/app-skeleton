<?php

/**
 * Init application
 */

$app = new Mosaic\Cement\Application(
    realpath(__DIR__ . '/../')
);

$app->components(
    Mosaic\Exceptions\Component::whoops()->formatters(
        new Whoops\Handler\PrettyPageHandler
    ),
    Mosaic\Http\Component::diactoros(),
    Mosaic\Cache\Component::psr6()->array(),
    Mosaic\Routing\Component::fastRoute()->binders(
        new App\Http\Routes\HomeRoute
    ),
    Mosaic\View\Component::twig($app->getFolderStructure()),
    Mosaic\Filesystem\Component::flystem($app->getFolderStructure())
);

return $app;
