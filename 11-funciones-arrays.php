<?php include 'includes/header.php';

//in_array - Buscar elemento de u arreglo
$carrito = ['Tablet', 'Television', 'Computadora'];
var_dump( in_array('Tablet', $carrito));
var_dump( in_array('Audifonos', $carrito));
echo '<br>';

//Ordenar elementos de un arreglo
$numeros = array(1,2,3,4,1,2);
sort($numeros);
rsort($numeros);

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//ORdenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente);//ORdena por valores (alfabetico) arsort - al reves
ksort($cliente); //Ordena por llaves (alfabetico) krsort - al reves

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';