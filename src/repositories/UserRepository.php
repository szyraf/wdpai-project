<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\User;
use PDO;
use PDOException;

final class UserRepository
{
    private const UNIQUE_VIOLATION = '23505';

    public function __construct(private PDO $database)
    {
    }

    public function findByEmail(string $email): ?User
    {
        $statement = $this->database->prepare(
            'SELECT id, name, password_hash
             FROM users
             WHERE LOWER(email) = LOWER(:email)
             LIMIT 1'
        );
        $statement->execute(['email' => $email]);

        $row = $statement->fetch();

        return $row === false
            ? null
            : new User((int) $row['id'], (string) $row['name'], (string) $row['password_hash']);
    }

    public function create(string $name, string $email, string $passwordHash): bool
    {
        $statement = $this->database->prepare(
            'INSERT INTO users (name, email, password_hash)
             VALUES (:name, :email, :password_hash)'
        );

        try {
            $statement->execute([
                'name' => $name,
                'email' => $email,
                'password_hash' => $passwordHash,
            ]);
        } catch (PDOException $exception) {
            // Duplikat łapie unikalny indeks w bazie: SELECT przed INSERT przepuściłby dwie jednoczesne rejestracje.
            if ($exception->getCode() === self::UNIQUE_VIOLATION) {
                return false;
            }

            throw $exception;
        }

        return true;
    }
}
