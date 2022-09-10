<?php
declare(strict_types=1);
include 'includes/header.php';

function sumar(int $n1 = 0, int $n2 = 0){
    echo $n1 + $n2;
}

sumar(4,6);
echo "<br>";

sumar(35,6);
echo "<br>";

sumar(6,6);
echo "<br>";

// sumar(4, 'hola'); al poner el decalre, detecta si se estan pasando los datos correspondientes
// echo "<br>";

include 'includes/footer.php';