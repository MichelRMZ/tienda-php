<?php require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/controllers/ProductoController.php';
$controlador = new ProductoController(conectar());
$accion = $_GET['accion'] ?? 'listar';
match ($accion) {
    'nuevo'   => $controlador->nuevo(),
    'guardar' => $controlador->guardar(),
    default   => $controlador->listar(),
};

