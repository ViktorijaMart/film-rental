<?php
declare(strict_types=1);

require_once './vendor/autoload.php';

$container = new \Vikto\FilmRentalProject\Framework\DIContainer();

$router = $container->get('Vikto\FilmRentalProject\Framework\Router');
$router->process();