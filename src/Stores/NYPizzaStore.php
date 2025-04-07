<?php

namespace PizzaApp\Stores;

use PizzaLibrary\Stores\PizzaStore;
use PizzaApp\Pizzas\CheesePizza;
use PizzaApp\Pizzas\KarbonaraPizza;
use PizzaApp\Pizzas\PepperoniPizza;
class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type): \PizzaLibrary\Products\Pizza
    {
        return new CheesePizza();
        return new KarbonaraPizza();
        return new PepperoniPizza();
    }
}