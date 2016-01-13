<?php

namespace App\Http\Routes;

use Fresco\Contracts\Routing\RouteBinder;
use Fresco\Contracts\Routing\Router;

class HomeRoute implements RouteBinder
{

    /**
     * Bind routes to router
     *
     * @param Router $router
     */
    public function bind(Router $router)
    {
        $router->get('/', 'App\Http\Controllers\HomeController@index');
    }
}
