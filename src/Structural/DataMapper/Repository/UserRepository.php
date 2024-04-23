<?php

namespace Codenip\Structural\DataMapper\Repository;

use Codenip\Structural\DataMapper\Entity\User;

class UserRepository
{
    public function byId(string $id): User
    {
        return User::create($id, 'John Doe', 'john.doe@mail.com', true);
    }

    public function save(User $user): void
    {
       // todo
    }
}