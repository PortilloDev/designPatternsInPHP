<?php

namespace Codenip\Structural\DataMapper\Entity;

class User
{
    private function __construct(
        private string $id,
        private string $name,
        private string $email,
        private bool $active
    ) {
    }

    public static function create(
        string $id,
        string $name,
        string $email,
        bool $active
    ): self {
        return new self($id, $name, $email, $active);
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }


    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }



}