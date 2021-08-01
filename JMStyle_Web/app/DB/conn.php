<?php
//CODIGO DE CONEXIÓN
$servername = "localhost";
$username = "root"; //DEBEMOS CAMBIAR LOS PARÁMETROS
$password = ""; //ANALIZAR EN CLASE.
$database = "jmstylo_base";

$conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Conexión fallida: ". mysqli_connect_error());
    }
    echo "Conexión correcta";
?>