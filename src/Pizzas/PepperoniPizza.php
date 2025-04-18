<?php
namespace PizzaApp\Pizzas;

use PizzaLibrary\Products\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Пепперони';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['Моцарелла', 'Пепперони', 'Орегано'];
    }
    public function bake(): void
    {
        echo "Выпекаем 15 минут при 200°C\n";
    }
}