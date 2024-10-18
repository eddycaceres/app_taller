<?php
session_start();
error_reporting();
$varsesion= $_SESSION['usuario'];
if ($varsesion== null || $varsesion='') {
	header("location: login.php");
	die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
<h1>Bienvenido</h1>
<a href="cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>