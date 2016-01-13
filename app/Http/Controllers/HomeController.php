<?php

namespace App\Http\Controllers;

use Fresco\Contracts\View\Factory;

class HomeController
{
    public function index(Factory $factory)
    {
        return $factory->make('welcome.html');
    }
}
