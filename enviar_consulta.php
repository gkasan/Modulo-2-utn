<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nombre_form = $_POST ['nombre'];
$edad_form = $_POST ['edad'];
$email_form = $_POST ['email'];
$type_form = $_POST ['type'];
$mensaje_form = $_POST ['mensaje'];



//$conexion = mysqli_connect('localhost', 'root', '','form_datos_utn') or exit ("No se pudo conectar a la base de datos");        
$conexion = mysqli_connect('sql206.infinityfree.com', 'if0_37566442','QzYHvjDoCmJek9','if0_37566442_modulo2_GRS') or exit ("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES(DEFAULT,'$nombre_form','$edad_form','$email_form','$type_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: Form.php?ok");
