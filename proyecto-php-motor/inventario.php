<?php 
$pageTitle = "Inventario - Examen PHP"; 
require __DIR__ . "/includes/header.php"; 
?>

<h1>Listado de Vehículos</h1>
<table border="1" style="width: 100%; border-collapse: collapse; text-align: left;">
    <thead style="background-color: #2c3e50; color: white;">
        <tr><th>Marca</th><th>Modelo</th><th>Año</th></tr></th>Año</th></tr>
    </thead>
    <tbody>
        <?php
        try {
            $pdo = new PDO("mysql:host=db;dbname=concesionario_php", "mecanico", "taller123");
            $stmt = $pdo->query("SELECT * FROM vehiculos");
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['marca'] . "</td>";
                echo "<td>" . $row['modelo'] . "</td>";
                echo "<td>" . $row['año'] . "</td>";
                echo "<td>" . $row['año'] . "</td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "<tr><td colspan='4'>Error: " . $e->getMessage() . "</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php require __DIR__ . "/includes/footer.php"; ?>
