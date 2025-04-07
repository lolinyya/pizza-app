
<?php
namespace PizzaApp\Stores;

use PizzaLibrary\Stores\PizzaStore;
use PizzaApp\Pizzas\CheesePizza;
use PizzaApp\Pizzas\PepperoniPizza;
use PizzaApp\Pizzas\KarbonaraPizza;

class NYPizzaStore extends PizzaStore 
{
    public function createPizza(string $type): \PizzaLibrary\Products\Pizza
    {
        return match($type) {
            'cheese' => new CheesePizza(),
            'pepperoni' => new PepperoniPizza(),
            'karbonara' => new KarbonaraPizza(),
            default => throw new \InvalidArgumentException("Неизвестый тип пиццы: $type")
        };
    }
}