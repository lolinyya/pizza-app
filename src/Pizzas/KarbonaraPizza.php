<?php
namespace PizzaApp\Pizzas;

use PizzaLibrary\Products\Pizza;

class KarbonaraPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Карбонара";
        $this->sauce = "Сливочный";
        $this->toppings = ["Бекон", "Яйца", "Пармезан"];
    }
    public function bake(): void
    {
        echo "Выпекаем 15 минут при 200°C\n";
    }
}