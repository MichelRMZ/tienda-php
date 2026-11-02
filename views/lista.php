<h1>Productos</h1>
<p><a href="index.php?accion=nuevo">+ Agregar producto</a></p>
<table border="1" cellpadding="6">
    <tr><th>Nombre</th><th>Precio</th><th>Existencia</th></tr>
    <?php foreach (($productos ?? []) as $p): ?>
         <tr>
            <td><?= htmlspecialchars($p['nombre']) ?></td>
            <td>$<?= number_format($p['precio'], 2) ?></td>
            <td><?= $p['existencia'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
