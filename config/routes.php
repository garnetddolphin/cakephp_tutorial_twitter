<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'StaticPages', 'action' => 'home']);
    $routes->connect('/home', ['controller' => 'StaticPages', 'action' => 'home']);
    $routes->connect('/help', ['controller' => 'StaticPages', 'action' => 'help']);
    $routes->connect('/about', ['controller' => 'StaticPages', 'action' => 'about']);
    $routes->connect('/contact', ['controller' => 'StaticPages', 'action' => 'contact']);

    $routes->fallbacks(DashedRoute::class);
});

/**
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * Router::scope('/api', function (RouteBuilder $routes) {
 *     // No $routes->applyMiddleware() here.
 *     // Connect API actions here.
 * });
 * ```
 */
