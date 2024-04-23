<?php

namespace Codenip\Structural\DataMapper\Service;

class UserDTO
{
    public function __construct(
        public string $id,
        public string $name,
        public string $email,
        public bool $active
    ) {
    }

}