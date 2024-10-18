<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost", "root", "", "planilla_taller");

$consulta="SELECT * FROM users where usuario='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
	header("location: home.php");
}else{
	?>
	<?php
	include("login.php");
	?>
	echo '<div class="alert alert-danger">ERROR EN LA AUTENTIFICACION</div>';
	<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>