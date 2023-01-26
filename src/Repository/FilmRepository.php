<?php
declare(strict_types=1);

namespace Vikto\FilmRentalProject\Repository;

use Vikto\FilmRentalProject\Framework\DbConnection;

class FilmRepository
{
    private function db()
    {
        $instance = DbConnection::getInstance();
        return $instance->getConnection();
    }

    public function getFilmsByActor(string $actorId): array
    {
        $conn = $this->db();
        $statement = $conn->prepare("SELECT f.id, f.title, f.release_year, f.description FROM film f LEFT JOIN film_actor fa on f.id = fa.film_id WHERE fa.actor_id = $actorId");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}
