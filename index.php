<?php
$fruits = [
    [
        'fruitId' => 1,
        'fruitName' => 'Apel',
        'fruitType' => 'IMPORT',
        'stock' => 10
    ],
    [
        'fruitId' => 2,
        'fruitName' => 'Kurma',
        'fruitType' => 'IMPORT',
        'stock' => 20
    ],
    [
        'fruitId' => 3,
        'fruitName' => 'apel',
        'fruitType' => 'IMPORT',
        'stock' => 50
    ],
    [
        'fruitId' => 4,
        'fruitName' => 'Manggis',
        'fruitType' => 'LOCAL',
        'stock' => 100
    ],
    [
        'fruitId' => 5,
        'fruitName' => 'Jeruk Bali',
        'fruitType' => 'LOCAL',
        'stock' => 10
    ],
    [
        'fruitId' => 6,
        'fruitName' => 'KURMA',
        'fruitType' => 'IMPORT',
        'stock' => 20
    ],
    [
        'fruitId' => 7,
        'fruitName' => 'Salak',
        'fruitType' => 'LOCAL',
        'stock' => 150
    ]
];

$uniqueFruits = [];

foreach ($fruits as $fruit) {
    $fruitName = strtolower($fruit['fruitName']);
    if (!isset($uniqueFruits[$fruitName])) {
        $uniqueFruits[$fruitName] = $fruit;
    }
}

$uniqueFruits = array_values($uniqueFruits);

print_r($uniqueFruits);
?>
