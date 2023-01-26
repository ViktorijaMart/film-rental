<?php
declare(strict_types=1);

namespace Vikto\FilmRentalProject\Service;

class ActorService
{
    public function findActors(array $actors, string $input): array
    {
        if (preg_match('/[a-zA-Z]+ [A-Za-z0-9]+/i', $input)) {
            $result = $this->findByTwoWords($actors, $input);
        } else {
            $result = $this->findByOneWord($actors, $input);
        }

        return $result;
    }

    private function findByTwoWords(array $actors, string $input): array
    {
        $inputArray = explode(' ', $input);
        $result = [];

        foreach ($actors as $actor) {
            if($actor['first_name'] === $inputArray[0] && $actor['last_name'] === $inputArray[1] || $actor['first_name'] === $inputArray[1] && $actor['last_name'] === $inputArray[0]) {
                $result[] = $actor;
            }
        }

        return $result;
    }

    private function findByOneWord(array $actors, string $input): array
    {
        $result = [];

        foreach ($actors as $actor) {
            if (str_starts_with($actor['first_name'], $input) || str_starts_with($actor['last_name'], $input)) {
                $result[] = $actor;
            }
        }

        return $result;
    }
}
