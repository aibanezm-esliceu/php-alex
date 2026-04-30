<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "No se han recibido datos.";
    exit;
}

// Los nombres coinciden con los 'name' del formulario
$nombre_cliente = $_POST["nombre"] ?? "";
$email = $_POST["email"] ?? "";
$coche_interes = $_POST["coche"] ?? "";

require __DIR__ . "/db.php";

try {
    $sql = "INSERT INTO citas_taller (nombre, email, coche) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute([$nombre_cliente, $email, $coche_interes]);

    if ($result) {
        $pageTitle = "Éxito"; 
        require __DIR__ . "/includes/header.php";
        echo "<h1>¡Mensaje enviado!</h1>";
        echo "<p>Gracias, $nombre_cliente. Tu mensaje está en la base de datos.</p>";
        echo "<a href='contacte.php'>Volver</a>";
        require __DIR__ . "/includes/footer.php";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

