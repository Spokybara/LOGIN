<?php
include("db.php");

if(!empty($_POST ["btiniciar"])){
    if (empty($_POST["correoElec"]) and empty($_POST["contrasena"])) {
        echo "Por favor, complete todos los campos";
    } else {
        $correo=$_POST["correoElec"];
        $clave=$_POST["contrasena"];
        $sql = $mysqli->query("SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$clave'");
        
        if ($datos=$sql->fetch_object()) {
            header("Location:inicio.html");
        } else {
            echo "ACCESO DENAGADO";
        }
        
    }
    
}




?>
