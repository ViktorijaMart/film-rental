<?php
declare(strict_types=1);

namespace Vikto\FilmRentalProject\Controller;

use Vikto\FilmRentalProject\Framework\DIContainer;

class ActorController
{
    public function __construct(private readonly DIContainer $container)
    {
    }

    public function getAll()
    {
        $actorRepository = $this->container->get('Vikto\FilmRentalProject\Repository\ActorRepository');
        $actors = $actorRepository->getAllActors();

        $smarty = new \Smarty();
        $smarty->assign(['actors' => $actors]);
        $smarty->display(__DIR__ . '/../View/homePage.tpl');
    }
}
