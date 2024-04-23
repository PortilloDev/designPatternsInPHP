<?php

namespace Codenip\Tests\Creational\Builder;

use Codenip\Creational\Builder\Model\Topping;
use Codenip\Creational\Builder\PizzaBuilder;
use Codenip\Creational\Builder\Values\Cheese;
use Codenip\Creational\Builder\Values\Dough;
use Codenip\Creational\Builder\Values\Size;

class BuilderTest extends \PHPUnit\Framework\TestCase
{
    public function testCreatePizza(): void
    {
        $pizza = (new PizzaBuilder())
            ->setDough(Dough::THIN_CRUST)
            ->setSize(Size::MEDIUM)
            ->setCheese(Cheese::MOZZARELLA)
            ->setToppings([new Topping('Mushrooms'), new Topping('Tomatoes')])
            ->build();

        $this->assertEquals(Dough::THIN_CRUST, $pizza->getDough());
        $this->assertEquals(Size::MEDIUM, $pizza->getSize());
        $this->assertEquals(Cheese::MOZZARELLA, $pizza->getCheese());
        $this->assertEquals('Mushrooms', $pizza->getToppings()[0]->getName());
        $this->assertEquals('Tomatoes', $pizza->getToppings()[1]->getName());
    }
}