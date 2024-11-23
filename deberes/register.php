<?php
//crear registro en la base de datos, METODO INSERTAR
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $correo = $_POST['correoElec'];
    $contrasena = $_POST['contrasena'];

    $sql = "INSERT INTO usuarios (nombres, apellidos, correo, contrasena) VALUES (?, ?, ?, ?)";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssss", $nombres, $apellidos, $correo, $contrasena);
    $stmt->execute();
    $stmt->close();

    header("Location: inicio.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link  rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="form_Register">
        <h1>Registro de Usuario</h1>
        <form action="register.php" method="POST">
            <input type="text" name="nombre" placeholder="Ingrese sus Nombres" required>
            <input type="text" name="apellido" placeholder="Ingrese su Apellido" required>
            <input type="email" name="correoElec" placeholder="Correo Electrónico" required>
            <input type="password" name="contrasena" placeholder="Ingrese su Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>