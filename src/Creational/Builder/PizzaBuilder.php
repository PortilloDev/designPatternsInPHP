<?php

namespace Codenip\Creational\Builder;

use Codenip\Creational\Builder\Model\Pizza;
use Codenip\Creational\Builder\Model\Topping;

class PizzaBuilder
{
        private string $size;
        private string $dough;
        private string $cheese;
        /** @var array<Topping>*/
        private array $toppings;

    /**
     * @param string $size
     *
     * @return PizzaBuilder
     */
    public function setSize(string $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @param string $dough
     *
     * @return PizzaBuilder
     */
    public function setDough(string $dough): self
    {
        $this->dough = $dough;
        return $this;
    }

    /**
     * @param string $cheese
     *
     * @return PizzaBuilder
     */
    public function setCheese(string $cheese): self
    {
        $this->cheese = $cheese;
        return $this;
    }

    /**
     * @param array $toppings
     *
     * @return PizzaBuilder
     */
    public function setToppings(array $toppings): self
    {
        $this->toppings = $toppings;
        return $this;
    }

    public function build(): Pizza
    {
        return new Pizza($this->size, $this->dough, $this->cheese, $this->toppings);
    }
}