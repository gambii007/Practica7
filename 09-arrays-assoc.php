<?php include 'includes/header.php';

$cliente = [
    'nombre'=> 'Fernando',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];


//Util para er lo contenidos de un Array
echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

//echo $cliente['nombre'];
//echo $cliente['informacion']['tipo'];

$cliente['codigo'] = 1209192012;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';