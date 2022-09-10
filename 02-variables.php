<?php include 'includes/header.php';

$nombre = "Juan";
$nombre = "Juan2"; //Se pueden reaccionar variables


echo $nombre;
var_dump($nombre); //Este da mas information tipo y contenido


//Para variables constantes
define('constante', "Este es el valor de la constante");
echo constante;

//Otra forma de declarar constantes
const constante2 = "Hola 2";
echo constante2;

//Tipos de declaraciones de variables
$nombreCliente = "Pedro";
$nombre_cliente = "Pedro";

include 'includes/footer.php';