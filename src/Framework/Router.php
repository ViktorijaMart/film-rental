<?php
declare(strict_types=1);

namespace Vikto\FilmRentalProject\Framework;

use Vikto\FilmRentalProject\Controller\ActorController;

class Router
{
    public function __construct(private readonly DIContainer $container)
    {

    }

    public function process(string $request): void
    {
        /* @var ActorController $actorController
         */

        $actorController = $this->container->get('Vikto\FilmRentalProject\Controller\ActorController');
        $filmController = $this->container->get('Vikto\FilmRentalProject\Controller\FilmController');
        $pageNotFoundController = $this->container->get('Vikto\FilmRentalProject\Controller\PageNotFoundController');

        switch ($request)
        {
            case '/':
                $actorController->getAll();
                break;
            case '/actorInfo':
                $actorController->getById();
                break;
            case '/filmInfo':
                $filmController->getFilmById();
                break;
            default:
                $pageNotFoundController->display();
                break;
        }
    }
}