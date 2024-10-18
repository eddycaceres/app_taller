<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login App Taller</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
	<style>
        body {
            background-image: url('rsc/img/img_1.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
	<div class="overlay"></div>

	<div class="d-flex justify-content-center">
		<div class="d-flex justify-content-center align-items-center" style="height: 100vh; position: relative;">
			<div class="login-container">
					<h2 class="text-center" >Planilla Taller ACHSA</h2>
					<?php if (isset($error)): ?>
			            <div class="alert alert-danger text-center"><?php echo $error; ?></div>
			        <?php endif; ?>
			        <form action="validar.php" method="post">

					<div class="form-group">
						<label for="usuario" class="form-label">Usuario: </label>
						<p><input type="text" class="form-control" placeholder="" name="usuario" required></p>
					</div>
					<div class="form-group">
						<label for="password" class="form-label">Contraseña:</label>
						<p><input type="password" class="form-control" placeholder="" name="password" required></p>
					</div>
					<button type="submit" class="btn btn-custom btn-block" name="ingresar">Iniciar Sesión</button>
				</form>
			</div>		
		</div>
	</div>

	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>