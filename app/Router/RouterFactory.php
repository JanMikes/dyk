<?php

declare(strict_types = 1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
    use Nette\StaticClass;

    private const BASE_URL = '//www.ph30.eu/';

    public static function createRouter(): RouteList
    {
        $router = new RouteList;

        $router->addRoute(self::BASE_URL . 'ADMIN/<presenter>/<action>[/<id>]', [
            'module' => 'Admin',
            'presenter' => 'Homepage',
            'action'    => 'default'
        ]);

        $router->addRoute(self::BASE_URL . '<presenter>/<action>[/<id>]', [
            'presenter' => 'Homepage',
            'action'    => 'default'
        ]);

        return $router;
    }
}
