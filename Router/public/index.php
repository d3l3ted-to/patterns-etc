<?php
require __DIR__.'/../vendor/autoload.php';

use App\Main\Router;
use App\Main\Request;

$router = new Router(new Request());

$router->get('/decorator', function () {
    var_dump(\App\Decorator\Classes\Main::execute());
});

$router->get('/flyweight', function () {
    \App\FlyWeight\Classes\Main::exec();
});

$router->get('/proxy', function () {
    \App\Proxy\Main::exec();
});

$router->get('/chain-of-responsibility', function () {
    \App\ChainOfResponsibility\Main::exec();
});

$router->get('/command', function () {
    \App\Command\Main::exec();
});