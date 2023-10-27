<?php

namespace App\Entity;

abstract class CoreModel
{
    protected $id;
    protected string $created_at;
    protected ?string $updated_at;

    /**
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updated_at;
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        if ($this->getId() > 0) {
            return $this->update();
        } else {
            return $this->create();
        }
    }

    abstract static public function find(int $id);
    abstract static public function findAll();
    abstract public function create();
    abstract public function update();
    abstract public function delete();
}
