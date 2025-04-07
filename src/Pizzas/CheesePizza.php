<?php
namespace PizzaApp\Pizzas;

use PizzaLibrary\Products\Pizza;

class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Сырная пицца';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['Моцарелла', 'Пармезан'];
    }

    public function bake(): void
    {
        echo "Выпекаем 15 минут при 200°C\n";
    }
} 