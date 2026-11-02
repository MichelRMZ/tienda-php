<?php
$nombre = "Nubecita";
$productos = ["Teclado", "Mouse", "Monitor"];
?>

<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Hola PHP</title></head>
<body>
    <h1>Hola, <?= $nombre ?></h1>
    <p>Hoy es <?=  date ("d/m/Y") ?></p>
    <ul>
        <?php foreach ($productos as $p): ?>
            <li><?= $p ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
