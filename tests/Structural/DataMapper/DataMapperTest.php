<?php

namespace Codenip\Tests\Structural\DataMapper;

use Codenip\Creational\Builder\Model\Topping;
use Codenip\Creational\Builder\PizzaBuilder;
use Codenip\Creational\Builder\Values\Cheese;
use Codenip\Creational\Builder\Values\Dough;
use Codenip\Creational\Builder\Values\Size;
use Codenip\Structural\DataMapper\Entity\User;
use Codenip\Structural\DataMapper\Service\UserDTO;
use Codenip\Structural\DataMapper\UserMapper;

class DataMapperTest extends \PHPUnit\Framework\TestCase
{
    private readonly UserMapper $userMapper;

    protected function setUp(): void
    {
       $this->userMapper = new UserMapper();
    }

    public function testConvertToEntity(): void
    {
        $dto = new UserDTO('user_1', 'John Doe', 'john_23@email.com', true);
        $entity = $this->userMapper->convertToEntity($dto);

        self::assertInstanceOf(User::class, $entity);
        self::assertSame($dto->id, $entity->getId());
        self::assertSame($dto->name, $entity->getName());
        self::assertSame($dto->email, $entity->getEmail());
        self::assertSame($dto->active, $entity->isActive());
    }

    public function testConvertToDTO(): void
    {
        $user = User::create('user_1', 'John Doe', 'john_23@email.com', true);
        $dto = $this->userMapper->convertToDTO($user);

        self::assertInstanceOf(UserDTO::class, $dto);
        self::assertSame($dto->id, $user->getId());
        self::assertSame($dto->name, $user->getName());
        self::assertSame($dto->email, $user->getEmail());
        self::assertSame($dto->active, $user->isActive());
    }
}