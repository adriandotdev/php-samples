<?php

$numbers = [1, 2, 3];
$fruits = ['apple', 'orange', 'pineapple'];

// Associative Array
$employee = [
    "name" => "Adrian",
    "age" => 22,
    "location" => "Cabuyao, Laguna"
];

$employees = [
    [
        "name" => "Adrian",
        "age" => 22,
        "location" => "Cabuyao, Laguna"
    ],
    [
        "name" => "Mikaela",
        "age" => 22,
        "location" => "Cabuyao, Laguna"
    ]
];

var_dump(json_encode($employees));
echo json_decode(json_encode($employees));
