<?php

namespace Codenip\Structural\DataMapper\Service;

use Codenip\Structural\DataMapper\UserMapper;

class UserService
{
    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly UserMapper $userMapper,
    ) {
    }

    public function create(UserDTO $userDTO): UserDTO
    {
        $user = $this->userMapper->convertToEntity($userDTO);

        $this->userRepository->save($user);
        return new UserDTO( $user->getId(), $user->getName(), $user->getEmail(), $user->isActive());;
    }

    public function findOneById(string $id): UserDTO
    {
        $user = $this->userRepository->byId($id);
        return $this->userMapper->convertToDTO($user);;
    }

}