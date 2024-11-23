<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link  rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="form_Login"> <!--contenedor para el login en CSS-->
        <h1>Inicio de Sesión</h1>
        <form action=" " method="POST" >
            <?php
                include ("db.php");
                include("login.php");
            ?>
            <div class="correoElec">
                <input type="text" name ="correoElec" required>
                <label> Correo Electrónico</label>
            </div>
                <div class="correoElec"> <!--CLASE PARA EL CSS-->
                    <input type="password" name ="contrasena" required>
                    <label> Contraseña</label>
                </div>
                <div class="recordar">¿Olvido su Contraseña? </div>
                    <input name="btiniciar" type="submit" value="Iniciar Sesión">
                <div class="registro"><!--CLASE PARA EL REGISTRARSE EN CSS-->
                    Quiero hacer el <a href="register.php">Registrarse</a>
                </div>
        </form>
    </div>

</body>
</html>