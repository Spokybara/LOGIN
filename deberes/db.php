<?php
$mysqli =new mysqli("localhost","root", "","usuarios_pagina");

if ($mysqli->connect_error) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
?>