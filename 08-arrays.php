<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

//Aceder a un elemento del array
echo $carrito[1];

//Añaade un elemnto 
$carrito[3] = 'Nuevo Prodcuto...';

//Añardin un elemento nuevo al final
array_push($carrito, 'Audifonos');

//Añadir elemento al _Inicio
array_unshift($carrito, 'SmartWatch');

//Util para er lo contenidos de un Array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente1', 'Cliente2', 'Cliente3');

//Util para er lo contenidos de un Array
echo "<pre>";
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';