<?php
declare(strict_types=1);  //SE peuedn ver lso erroes conforme se escirbe el codigo
include 'includes/header.php';

function usuarioAuntenticado(bool $auntenticado) : string|int {
    if ($auntenticado) {
        return "El usuario esta autenticado";
    } else {
        return [];
    }
}

$usuario = usuarioAuntenticado(true);

echo $usuario;

include 'includes/footer.php';