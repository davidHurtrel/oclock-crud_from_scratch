<?php

namespace App\Entity;

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
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, 'App\Entity\Game');

        return $results;
    }

    public static function find(int $id)
    {
        
    }

    public function create()
    {

    }

    public function update()
    {
        
    }

    public function delete()
    {

    }
}
