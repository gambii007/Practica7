<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Fernando',
    'saldo' => 200
];

//Empty_Para revisar si un arreglo esta vacio
var_dump( empty($clientes));
var_dump( empty($clientes3));
var_dump( empty($clientes2));
echo '<br>';

//Isset - Revisa si un arreglo esta creado o denifido una propiedad
var_dump( isset($clientes4));
var_dump( isset($clientes));
var_dump( isset($clientes2));
var_dump( isset($clientes3));
echo '<br>';

//Isset igual permie revisar si una propiedad de un arreglo asociativo existe
var_dump( isset($cliente['nombre'])); //Existe
var_dump( isset($cliente['codigo'])); //No_Existe

include 'includes/footer.php';  