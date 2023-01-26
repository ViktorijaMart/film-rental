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
        $actorRepository = $this->getActorRepository();
        $actors = $actorRepository->getAllActors();

        $smarty = new \Smarty();
        $smarty->assign(['actors' => $actors]);
        $smarty->display(__DIR__ . '/../View/homePage.tpl');
    }

    public function getById()
    {
        $id = $_POST['id'];
        $actorRepository = $this->getActorRepository();
        $actor = $actorRepository->getById($id)[0];

        $filmRepository = $this->container->get('Vikto\FilmRentalProject\Repository\FilmRepository');
        $films = $filmRepository->getFilmsByActor($id);

        $smarty = new \Smarty();
        $smarty->assign(['actor' => $actor, 'films' => $films]);
        $smarty->display(__DIR__ . '/../View/actorInfo.tpl');
    }

    private function getActorRepository()
    {
        return $this->container->get('Vikto\FilmRentalProject\Repository\ActorRepository');
    }
}
