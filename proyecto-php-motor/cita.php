<?php 
$pageTitle = "Cita - Examen PHP"; 
require __DIR__ . "/includes/header.php"; 
?>

<h1>Formulario de cita</h1>
<form action="create-cita.php" method="POST" style="display: flex; flex-direction: column; gap: 10px; max-width: 400px;">
    <label>Nombre:</label>
    <input type="text" name="nom" required>
    
    <label>Teléfono:</label>
    <input type="text" name="telefon">
    
    <label>Email:</label>
    <input type="email" name="email" required>
    
    <label>Mensaje:</label>
    <textarea name="missatge" rows="4" required></textarea>
    
    <button type="submit">Enviar Mensaje</button>
</form>

<?php require __DIR__ . "/includes/footer.php"; ?>
