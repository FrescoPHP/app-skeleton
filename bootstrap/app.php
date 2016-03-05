<?php

/**
 * Init application
 */
$app = new Mosaic\Application(
    realpath(__DIR__ . '/../')
);

/**
 * Define components
 */
$app->definitions([
    Mosaic\Definitions\TwigDefinition::class,
    Mosaic\Definitions\DotEnvDefinition::class,
    Mosaic\Definitions\DiactorosDefinition::class,
    Mosaic\Definitions\FastRouteDefinition::class,
    Mosaic\Definitions\RouteBinderDefinition::class,
    Mosaic\Definitions\LaravelConfigDefinition::class,
]);

return $app;
