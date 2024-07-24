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

//solusi

$uniqueFruits = []; //pembuatan array baru

foreach ($fruits as $fruit) {
    $fruitName = strtolower($fruit['fruitName']); //format nama ke lowercase
    if (!isset($uniqueFruits[$fruitName])) { // pengecekan jika terdapat array dengan index nama formatted belum ada
        $uniqueFruits[$fruitName] = $fruit; // simpan data buah ke array baru berdasarkan index nama buah yang sudah dilowercase
    }
}

$uniqueFruits = array_values($uniqueFruits); // mengembalikan array ke index numeric

print_r($uniqueFruits);
