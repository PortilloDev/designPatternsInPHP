<?php

namespace Codenip\Structural\DataMapper;

use Codenip\Structural\DataMapper\Entity\User;
use Codenip\Structural\DataMapper\Service\UserDTO;

class UserMapper
{
    public function convertToEntity(UserDTO $userDTO): User
    {
        return User::create(
            $userDTO->id,
            $userDTO->name,
            $userDTO->email,
            $userDTO->active
        );
    }

    public function convertToDTO(User $user): UserDTO
    {
        return new UserDTO( $user->getId(), $user->getName(), $user->getEmail(), $user->isActive());
    }

}