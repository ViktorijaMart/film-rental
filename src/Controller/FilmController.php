<?php
declare(strict_types=1);

namespace Vikto\FilmRentalProject\Controller;

use Vikto\FilmRentalProject\Framework\DIContainer;

class FilmController
{
    public function __construct(private readonly DIContainer $container)
    {}

    public function getFilmById()
    {
        $filmId = $_POST['filmId'];
        $filmRepository = $this->container->get('Vikto\FilmRentalProject\Repository\FilmRepository');
        $actorRepository = $this->container->get('Vikto\FilmRentalProject\Repository\ActorRepository');

        $filmInfo = $filmRepository->getFilmById($filmId)[0];
        $filmCategory = $filmRepository->getFilmCategory($filmId)[0];
        $filmActors = $actorRepository->getByFilmId($filmId);

        $smarty = new \Smarty();
        $smarty->assign([
            'filmInfo' => $filmInfo,
            'filmCategory' => $filmCategory,
            'filmActors' => $filmActors
        ]);
        $smarty->display(__DIR__ . '/../View/filmInfo.tpl');
    }
}
