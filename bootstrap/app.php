<?php

/**
 * Init application
 */
$app = new Fresco\Application(
    realpath(__DIR__ . '/../')
);

/**
 * Define components
 */
$app->definitions([
    Fresco\Definitions\TwigDefinition::class,
    Fresco\Definitions\DotEnvDefinition::class,
    Fresco\Definitions\DiactorosDefinition::class,
    Fresco\Definitions\FastRouteDefinition::class,
    Fresco\Definitions\RouteBinderDefinition::class,
    Fresco\Definitions\LaravelConfigDefinition::class,
]);

return $app;
