<?php
// Conexión a la base de datos
$servername = "45.55.42.142";
$username = "usuariocafe";
$password = "Cafeteria_123_UPV";
$dbname = "Cafeteria";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta para verificar el usuario y la contraseña
$sql = "SELECT * FROM Usuarios WHERE Username = '$username' AND Password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuario autenticado correctamente
    session_start();
    // Asignar el nombre de usuario a la variable de sesión
    $_SESSION['username'] = $username; 
    header("location:index.php");
} else {
    // Usuario no encontrado o contraseña incorrecta
    header("location:Formulario.html");
}

$conn->close();

?>


