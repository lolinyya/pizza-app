<?php
require __DIR__ . '/vendor/autoload.php';

use PizzaApp\Stores\NYPizzaStore;

echo "Добро пожаловать в нашу пиццерию! \n";

$nyPizzaStore = new NYPizzaStore();

// Доступные виды пицц
$pizzaTypes = [
    'cheese' => 'Сырная',
    'pepperoni' => 'Пепперони',
    'karbonara' => 'Карбонара'
];

echo "Меню:\n";
foreach ($pizzaTypes as $key => $name) {
    echo " - {$key}: {$name}\n";
}

// Симуляция заказов
echo "\nПриготовление пицц:\n";
foreach (array_keys($pizzaTypes) as $type) {
    echo "\n=== Заказ: {$pizzaTypes[$type]} ===\n";
    $pizza = $nyPizzaStore->orderPizza($type);
    echo " Готово: {$pizza->getName()}\n";
}

echo "\nПриятного аппетита! 🍽️\n";
