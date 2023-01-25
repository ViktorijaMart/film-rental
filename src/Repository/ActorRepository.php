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
}