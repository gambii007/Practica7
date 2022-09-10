<?php include 'includes/header.php';
$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true 
    ],
    [
        
    'nombre' => 'Television',
    'precio' => 750,
    'disponible' => true 
    ],
    [
        
    'nombre' => 'Audifonos',
    'precio' => 450,
    'disponible' => false 
    ]
];

foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo "$" . $producto['precio']; ?> </p>
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No Disponible'; ?></p>
    </li>

    <?php
}


include 'includes/footer.php';