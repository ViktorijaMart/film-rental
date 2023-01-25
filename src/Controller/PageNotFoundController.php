<?php
declare(strict_types=1);

namespace Vikto\FilmRentalProject\Controller;

class PageNotFoundController
{
    public function display()
    {
        $smarty = new \Smarty();
        $smarty->display(__DIR__ . '/../View/pageNotFound.tpl');
    }
}