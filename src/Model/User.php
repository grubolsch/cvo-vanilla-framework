<?php

declare(strict_types=1);

namespace App\Model;

use PDO;

class User
{

    public function __construct(private string $email, private string $name, private ?int $id=null)
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function save(Pdo $pdo): void
    {
        $params = [
            'name' => $this->name,
            'email' => $this->email
        ];

        if($this->id === null) {
            $q = 'insert into user (name, email) values (:name, :email)';
        }
        else {
            $q = 'update user set name=:name, email=:email where id = :id';
            $params['id'] = $this->id;
        }

        $q = $pdo->prepare($q);
        $q->execute($params);

        if($this->id === null) {
            $this->id = (int)$pdo->lastInsertId();
        }
    }
}
