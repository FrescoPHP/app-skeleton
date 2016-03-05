<?php

namespace App\Http\Controllers;

use Mosaic\Contracts\View\Factory;

class HomeController
{
    public function index(Factory $factory)
    {
        return $factory->make('welcome.html');
    }
}
