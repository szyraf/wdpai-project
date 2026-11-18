<?php

declare(strict_types=1);

namespace App\Model;

final class User
{
    public function __construct(
        private int $id,
        private string $name,
        private string $passwordHash,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }
}
