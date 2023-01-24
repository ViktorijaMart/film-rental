<?php
declare(strict_types=1);

namespace Vikto\FilmRentalProject\Framework;

class Router
{
    public function process(string $request): void
    {
        switch ($request)
        {
            case '/':
                echo 'This is home page';
                break;
            case '/actorInfo':
                echo "This is actor's info";
                break;
            case '/filmInfo':
                echo "This is film's info";
                break;
            default:
                echo 'Not found';
                break;
        }
    }
}