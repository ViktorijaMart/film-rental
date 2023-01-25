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
        $pageNotFoundController = $this->container->get('Vikto\FilmRentalProject\Controller\PageNotFoundController');

        switch ($request)
        {
            case '/':
                $actorController->getAll();
                break;
            case '/actorInfo':
                echo "This is actor's info";
                break;
            case '/filmInfo':
                echo "This is film's info";
                break;
            default:
                $pageNotFoundController->display();
                break;
        }
    }
}