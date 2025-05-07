<?php
session_start();

// Lista de productos
$productos = [
    1 => ["nombre" => "Camiseta", "precio" => 15.99],
    2 => ["nombre" => "Pantalón", "precio" => 25.50],
    3 => ["nombre" => "Zapatos", "precio" => 45.00],
    4 => ["nombre" => "Gorra", "precio" => 9.99],
];

// Agregar producto al carrito
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["producto_id"])) {
    $id = $_POST["producto_id"];

    if (!isset($_SESSION["carrito"])) {
        $_SESSION["carrito"] = [];
    }

    if (isset($productos[$id])) {
        if (isset($_SESSION["carrito"][$id])) {
            $_SESSION["carrito"][$id]["cantidad"] += 1;
        } else {
            $_SESSION["carrito"][$id] = $productos[$id];
            $_SESSION["carrito"][$id]["cantidad"] = 1;
        }
    }

    header("Location: index.php");
    exit;
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">Productos Disponibles</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($productos as $id => $producto): ?>
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($producto["nombre"]) ?></h5>
                        <p class="card-text">Precio: $<?= number_format($producto["precio"], 2) ?></p>
                        <form method="post" class="d-grid">
                            <input type="hidden" name="producto_id" value="<?= $id ?>">
                            <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="mt-5 text-center">
        <a href="carrito.php" class="btn btn-success">Ver Carrito</a>
    </div>
</div>

</body>
</html>
