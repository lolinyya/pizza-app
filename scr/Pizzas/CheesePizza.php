
<?php

namespace PizzaApp\Pizzas;

use PizzaLibrary\Products\Pizza;

class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Сырная пицца';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['Моцарелла', 'Пармезан', 'Чеддер'];
    }

    public function bake(): void
    {
     
    }
}