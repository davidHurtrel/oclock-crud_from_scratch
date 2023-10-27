<?php

namespace App\Entity;

use PDO;
use App\Utils\Database;

class User extends Entity
{
    private string $email;
    private string $password;
    private string $role;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     * @return User
     */
    public function setRole(string $role): User
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return User[]
     */
    public static function findAll(): array
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `user`';
        $stmt = $pdo->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_CLASS, 'App\Entity\User');
        return $users;
    }

    /**
     * @param int $id
     * @return User
     */
    public static function find(int $id): User
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `user` WHERE `id`=:id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetchObject(User::class);
        return $user;
    }

    /**
     * @param string $email
     * @return User
     */
    public static function findByEmail(string $email): User
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `user` WHERE `email`=:email';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email', $email, \PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetchObject(User::class);
        return $user;
    }

    public function create()
    {
        $pdo = Database::getPDO();
        $sql = "INSERT INTO `user` (`email`, `password`, `role`, `created_at`) VALUES (:email, :password, :role, NOW())";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(':role', $this->getRole(), PDO::PARAM_STR);
        
        $stmt->execute();
        if ($stmt->rowCount() === 1) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
        return false;
    }

    public function update()
    {

    }

    /**
     * @return bool
     */
    public function delete(): bool
    {
        
    }
}
