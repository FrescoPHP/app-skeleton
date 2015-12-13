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
    Fresco\Definitions\LaravelContainerDefinition::class,
    Fresco\Definitions\DiactorosRequestDefinition::class
]);

// Temporary solution
$app->bootstrap();

return $app;
