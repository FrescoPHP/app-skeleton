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
    Fresco\Definitions\DiactorosDefinition::class,
    Fresco\Definitions\FastRouteDefinition::class,
    App\Definitions\ExceptionRunnerDefinition::class
]);

return $app;
