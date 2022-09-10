<?php include 'includes/header.php';

require 'funciones.php';

iniciarApp();

echo "Despues del include";

include 'includes/footer.php';

//Usar require cuando tenga funcioens criticas
//Usar include cuando se tenga mas piezas pero son pequeñas

//Include dependiendo de la configuracion, se sigue ejecutando si no encutra el archivo

//require si no encuntra el arvhico deja de ejecutar todo

//require_one si algun archivo ya fue incluido, lo omite, si no se a incluido lo incluye