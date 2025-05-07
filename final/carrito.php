<?php
session_start();

// Cargar el carrito
$carrito = $_SESSION["carrito"] ?? [];

// Eliminar un producto
if (isset($_GET["eliminar"])) {
    $id = $_GET["eliminar"];
    unset($_SESSION["carrito"][$id]);
    header("Location: carrito.php");
    exit;
}

// Reducir cantidad
if (isset($_GET["reducir"])) {
    $id = $_GET["reducir"];
    if (isset($_SESSION["carrito"][$id])) {
        $_SESSION["carrito"][$id]["cantidad"] -= 1;
        if ($_SESSION["carrito"][$id]["cantidad"] <= 0) {
            unset($_SESSION["carrito"][$id]);
        }
    }
    header("Location: carrito.php");
    exit;
}

// Vaciar carrito
if (isset($_GET["vaciar"])) {
    unset($_SESSION["carrito"]);
    header("Location: carrito.php");
    exit;
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">Mi Carrito</h1>

    <?php if (empty($carrito)): ?>
        <div class="alert alert-info text-center">Tu carrito está vacío.</div>
    <?php else: ?>
        <table class="table table-bordered table-striped shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($carrito as $id => $producto):
                    $subtotal = $producto["precio"] * $producto["cantidad"];
                    $total += $subtotal;
                ?>
                    <tr>
                        <td><?= htmlspecialchars($producto["nombre"]) ?></td>
                        <td>$<?= number_format($producto["precio"], 2) ?></td>
                        <td><?= $producto["cantidad"] ?></td>
                        <td>$<?= number_format($subtotal, 2) ?></td>
                        <td>
                            <a href="carrito.php?reducir=<?= $id ?>" class="btn btn-warning btn-sm me-2">−</a>
                            <a href="carrito.php?eliminar=<?= $id ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr class="table-secondary fw-bold">
                    <td colspan="3" class="text-end">Total:</td>
                    <td>$<?= number_format($total, 2) ?></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    <?php endif; ?>

    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-secondary me-2">Seguir comprando</a>
        <?php if (!empty($carrito)): ?>
            <a href="carrito.php?vaciar=1" class="btn btn-outline-danger">Vaciar carrito</a>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
