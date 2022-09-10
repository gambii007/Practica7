<?php include 'includes/header.php';

$nombreCliente = " Fernando Gamboa   ";

echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
var_dump($texto);
echo "<br>";

//Convertir a mayusculas
echo strtoupper($nombreCliente);
echo "<br>";

//Convertir en minisculas
$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Fernando', 'F', $nombreCliente);

//Revisasi un string existe o no
echo strpos($nombreCliente, 'Fernando');
echo "<br>";

//Concatenar
$tipoCliente = "Premium";
echo "El cliente" . $nombreCliente . " es " . $tipoCliente;
echo "<br>";

echo "El cliente {$nombreCliente} es {$tipoCliente}"; //Solo se puede con comillas dobles

include 'includes/footer.php';

