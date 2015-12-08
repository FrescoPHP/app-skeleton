<?php

/**
 * Fresco - Framework
 *
 * @package Fresco
 * @author  Patrick Brouwers       <patrick@maatwebsite.nl>
 * @author  Guido Contreras Woda   <guiwoda@gmail.com>
 */

define('FRESCO_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

$app = include __DIR__ . '/../bootstrap/app.php';

(new Fresco\Http\Server($app))->listen(
    Fresco\Http\RequestFactory::capture()
);
