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
        $statement = $conn->prepare("
            SELECT 
                f.id, 
                f.title, 
                f.release_year, 
                f.description 
            FROM 
                film f 
            LEFT JOIN 
                film_actor fa ON f.id = fa.film_id 
            WHERE 
                fa.actor_id = $actorId
        ");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getFilmById(string $filmId): array
    {
        $conn = $this->db();
        $statement = $conn->prepare("
            SELECT
                f.title,
                f.description,
                f.release_year,
                f.rental_rate,
                f.length,
                f.rating,
                f.special_features,
                l.name
            FROM
                film f
            CROSS JOIN 
                language l on l.id = f.language_id
            WHERE
                f.id = $filmId
        ");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getFilmCategory(string $filmId):array
    {
        $conn = $this->db();
        $statement = $conn->prepare("
            SELECT
                c.name
            FROM
                category c
            LEFT JOIN
                film_category fc on c.id = fc.category_id
            WHERE
                fc.film_id = $filmId
        ");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}
