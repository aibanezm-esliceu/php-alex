DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Mi Proyecto PHP' ?></title>
    <link rel="stylesheet" href="css/style.css?v=<?= time(); ?>">
</head>
<body>
    <header>
        <div class="logo">🏢 MiLogo</div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="galeria.php">Galería</a></li>
                <li><a href="inventario.php">Inventario</a></li>
                <li><a href="cita.php">Cita</a></li>
            </ul>
        </nav>
    </header>
    <main class="contenedor-principal">

