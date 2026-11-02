<h1>Nuevo producto</h1> <?php if (!empty($error)): ?><p style="color:red"><?= $error ?></p><?php endif; ?> <form method="post" action="index.php?accion=guardar">
    <p><label>Nombre: <input name="nombre" required></label></p>
    <p><label>Precio: <input type="number" step="0.01" name="precio" required></label></p>
    <p><label>Existencia: <input type="number" name="existencia" value="0"></label></p> <button>Guardar</button> <a href="index.php">Cancelar</a>
</form>
