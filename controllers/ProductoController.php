<?php require_once __DIR__ . '/../models/Producto.php';
class ProductoController
{
    private Producto $modelo;
    public function __construct(PDO $db)
    {
        $this->modelo = new Producto($db);
    }
    public function listar(): void
    {
        $productos = $this->modelo->todos();
        require __DIR__ . '/../views/lista.php';
    }
    public function nuevo(): void
    {
        $error = null;
        require __DIR__ . '/../views/formulario.php';
    }
    public function guardar(): void
    {
        $nombre = trim($_POST['nombre'] ?? '');
        $precio = (float) ($_POST['precio'] ?? 0);
        $existencia = (int) ($_POST['existencia'] ?? 0);
        if ($nombre === '' || $precio <= 0) {
            $error = 'Escribe un nombre y un precio mayor a 0.';
            require __DIR__ . '/../views/formulario.php';
            return;
        }
        $this->modelo->crear($nombre, $precio, $existencia);
        header('Location: index.php');
    }
    
}
