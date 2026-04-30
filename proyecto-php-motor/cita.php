<?php 
$pageTitle = "Cita - Examen PHP"; 
require __DIR__ . "/includes/header.php"; 
?>

<h1>Formulario de cita</h1>
<form action="create-cita.php" method="POST" style="display: flex; flex-direction: column; gap: 10px; max-width: 400px;">
    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Coche De interés:</label>
    <input type="text" name="coche" required>
    
    <label>Mensaje:</label>
    <textarea name="mensaje" rows="3" required></textarea>
    
    <button type="submit">Solicitar Asesoramiento</button>
</form>

<?php require __DIR__ . "/includes/footer.php"; ?>
