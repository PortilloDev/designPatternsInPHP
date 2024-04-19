<?php

namespace Codenip\Creational\Builder\Model;

class Topping
{
    public function __construct(
        private string $name,

    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }


}