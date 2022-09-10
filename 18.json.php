<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true 
    ],
    [
        
    'nombre' => 'Television',
    'precio' => 750,
    'disponible' => true 
    ],
    [
        
    'nombre' => 'Audifonos',
    'precio' => 450,
    'disponible' => false 
    ]
];

echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); //Convertir a JSON

$json_array = json_decode($json);
var_dump($json);
var_dump($json_array);
echo "</pre>";

include 'includes/footer.php';