<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>

	<link rel="stylesheet" href="<?=base_url()?>/src/css/index.css">
</head>
<body>
	<div class="login-sect">
		<form action="" method="post">
			<table>
				<tr>
					<td><input type="text" name="username" placeholder="Usuario"></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Contraseña"></td>
				</tr>
				<tr colspan="2">
					<td><button>Iniciar Sesión</button></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>