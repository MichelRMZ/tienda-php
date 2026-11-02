<?php
$total = null;
$cliente="";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cliente  = $_POST["cliente"];
    $precio   = (float) $_POST["precio"];    
    $cantidad = (int) $_POST["cantidad"];    
    $subtotal = $precio * $cantidad;    
    $total    = $subtotal * 1.16; // IVA 16 %

    if ($cantidad >= 10){
        $subtotal = $subtotal - ($subtotal * 0.05);
    }

    $total = $subtotal * 1.16;
} ?>
<h1>Calculadora de compra</h1> 
<form method="post">
     <label>Cliente: <input type="text" name="cliente" 
required></label>
     <label>Precio: <input type="number" step="0.01" name="precio" 
required></label>  
    <label>Cantidad: <input type="number" name="cantidad" min="1" 
required></label>
    <button>Calcular</button>
</form>

<?php if ($total !== null): ?>
    <p>Total con IVA: $<?= number_format($total, 2) ?></p>
    <p> Gracias, <?= htmlspecialchars($cliente) ?>, por su compra.</p>
<?php endif; ?>