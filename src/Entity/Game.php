<?php

namespace App\Entity;

use PDO;
use App\Utils\Database;

class Game extends Entity
{
    private string $name;
    private string $description;
    private string $img;
    private float $price;

    /**
     * @return string $name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Game
     */
    public function setName(string $name): Game
    {
        $this->name = $name;
        return $this;
    }

        /**
     * @return string $description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Game
     */
    public function setDescription(string $description): Game
    {
        $this->description = $description;
        return $this;
    }

        /**
     * @return string $img
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     * @return Game
     */
    public function setImg(string $img): Game
    {
        $this->img = $img;
        return $this;
    }

        /**
     * @return float $price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Game
     */
    public function setPrice(float $price): Game
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return Game[]
     */
    public static function findAll(): array
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `game`';
        $stmt = $pdo->query($sql);
        $games = $stmt->fetchAll(PDO::FETCH_CLASS, 'App\Entity\Game');

        return $games;
    }

    /**
     * @return Game
     */
    public static function find(int $id): Game
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `game` WHERE `id`=:id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $game = $stmt->fetchObject(Game::class);

        return $game;
    }

    /**
     * @return bool
     */
    public function create(): bool
    {
        $pdo = Database::getPDO();
        $sql = "INSERT INTO `game` (`name`, `description`, `img`, `price`, `created_at`) VALUES (:name, :description, :img, :price, NOW())";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $this->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->getDescription(), PDO::PARAM_STR);
        $stmt->bindValue(':img', $this->getImg(), PDO::PARAM_STR);
        $stmt->bindValue(':price', $this->getPrice());
        $stmt->execute();
        if ($stmt->rowCount() === 1) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    public function update(): bool
    {
        $pdo = Database::getPDO();
        $sql = "UPDATE `game` SET `name`=:name, `description`=:description, `img`=:img, `price`=:price, `updated_at`=NOW() WHERE `id`=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $this->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->getDescription(), PDO::PARAM_STR);
        $stmt->bindValue(':img', $this->getImg(), PDO::PARAM_STR);
        $stmt->bindValue(':price', $this->getPrice());
        $stmt->bindValue(':id', $this->getId(), PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() === 1) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    public function delete()
    {
        $pdo = Database::getPDO();
        $sql = "DELETE FROM `game` WHERE `id`=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $this->getId(), PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() === 1) {
            return true;
        }
        return false;
    }
}
