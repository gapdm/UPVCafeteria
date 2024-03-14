<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1><?php
// Iniciar sesión (si no está iniciada)
session_start();

// Verificar si el usuario ha iniciado sesión
if(isset($_SESSION['username'])) {
    // El usuario ha iniciado sesión, muestra el mensaje de bienvenida
    echo "¡Bienvenido, " . $_SESSION['username'] . "!";
} else {
    // El usuario no ha iniciado sesión, mostrar un mensaje predeterminado
    echo "¡Bienvenido!";
}
?></h1>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>