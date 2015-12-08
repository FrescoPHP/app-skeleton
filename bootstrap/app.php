<?php

$app = new Fresco\Application(
    realpath(__DIR__ . '/../')
);

//$app->bind(
//    Fresco\Contracts\Http\Request::class,
//    Fresco\Http\Adapters\Psr7\Request::class
//);

return $app;
