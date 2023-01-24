<?php
declare(strict_types=1);

require_once './vendor/autoload.php';

$container = new \Vikto\FilmRentalProject\Framework\DIContainer();

$request = str_replace('/FilmRentalProject', '', $_SERVER['REQUEST_URI']);
$router = $container->get('Vikto\FilmRentalProject\Framework\Router');
$router->process($request);