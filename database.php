<?php

$server = 'localhost';
$username ='root';
$password ='';
$database = 'tienda_prevencion';

// crear objeto de conexion a bd
//$conn = null;

$conn = new mysqli($server, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 ?>
