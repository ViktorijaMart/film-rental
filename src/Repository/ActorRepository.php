<?php
declare(strict_types=1);

namespace Vikto\FilmRentalProject\Repository;

use Vikto\FilmRentalProject\Framework\DbConnection;

class ActorRepository
{
    private function db()
    {
        $instance = DbConnection::getInstance();
        return $instance->getConnection();
    }

    public function getAllActors(): array
    {
        $conn = $this->db();
        $statement = $conn->prepare('SELECT id, first_name, last_name FROM actor');
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById(string $id): array
    {
        $conn = $this->db();
        $statement = $conn->prepare("SELECT first_name, last_name FROM actor WHERE id=$id");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getByFilmId(string $filmId): array
    {
        $conn = $this->db();
        $statement = $conn->prepare("
            SELECT
                a.id,
                a.first_name,
                a.last_name
            FROM
                actor a
            LEFT JOIN 
                film_actor fa on a.id = fa.actor_id
            WHERE 
                fa.film_id = $filmId
        ");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}