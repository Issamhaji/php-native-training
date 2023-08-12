<?php

namespace App\Router;

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\AuthenticatorController;
use App\Controllers\OrderController;
use App\Controllers\AddController;
use App\Controllers\RegistrationController;
use App\Repository\OrderRepository;

class Router
{
    /** @var array list of registered routes */
    private const ROUTES = [
        '/\/logout/' => [AuthenticatorController::class, 'logout'],
        '/\/login/' => [AuthenticatorController::class, 'login'],
        '/\/subscribe/' => [AuthenticatorController::class, 'subscribe'],
        '/\/detail-order/' => [OrderController::class, 'detailsOrders'],
        '/\/check/' => [OrderController::class, 'check'],
        '/\/add-orders/' => [AddController::class, 'add'],
        '/\/list-orders/' => [OrderController::class, 'order'],
        '/\//' => [HomeController::class, 'home'],



];

    /** call the appropriate controller method of the requested uri */
    public static function handleRequest()
    {
        foreach (self::ROUTES as $url => $action) {
            $matches = preg_match($url, $_SERVER['REQUEST_URI'], $params);
            if ($matches > 0) {
                $controller = new $action[0]();// new OrderController()
                $controller->{$action[1]}($params);
                break;
            }
        }
    }
}
