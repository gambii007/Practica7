<?php include 'includes/header.php';

$autenticado = false;
$admin = true;

if ($autenticado || $admin) {
    echo "Usuario Auntenticado correctamente";
} else {
    echo "Usuario no autentificado, Inicia sesión";
}
echo '<br>';

//If anidados
$cliente = [
    'nombre' => 'Fernando',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

if (!empty($cliente)) {
    echo "El arreglo no esta vacio";
    if ($cliente['saldo'] > 0){
        echo "El cliente tiene saldo";
    }else{
        echo "No hay saldo";
    }
}
echo '<br>';
echo '<br>';

//Else if
if ($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} elseif ($cliente['informacion']['tipo'] == 'Premium') {
    echo "El cliente es Premium";
}else {
    echo "No hay cliente definido o no tiene saldo o no es premium";
}
echo '<br>';
echo '<br>';

//Switch
$tecnologia = 'PHP';
switch($tecnologia) {
    case 'PHP':
        echo "PHP, Un excelente lenguaje";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo "Emm...";
        break;
    default:
        echo "Algun lenguaje que nose cual es";
        break;
}

include 'includes/footer.php';