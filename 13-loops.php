<?php include 'includes/header.php';

//While
$i = 0;

while ($i <= 10) {
    echo $i." ";
    $i++;
}
echo '<br>';

//DoWhile
$i = 0;
do{
    echo $i . " ";
    $i++;
}while($i <= 10);
echo '<br>';
echo '<br>';

//For
for ($i=1; $i <= 60; $i++) { 
    if ($i%3==0 && $i%5==0) {
        echo " FizzBuzz ";
        echo '<br>';
    } elseif ($i%3==0) {
        echo " Fizz ";
    } elseif ($i%5==0) {
        echo " Buzz ";
    }
    else{
        echo " " . $i;
    }
}

//ForEach

$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente) {
    echo $cliente . "<br>";
}

echo sizeof($clientes);

include 'includes/footer.php';