<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale">
		<title>App Restaurant</title>

		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/estilo_index.css">
	</head>

	<body>
		
		<header>
			<div class="grid">
				<a class="navbar-brand imagem-logo" href="index.php">
					LOGO
				</a>
			</div>	

			<button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#menu-collapse" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</header>

		<div class="container-login fadeIn">
			<h3>APP RESTAURANTE</h3>
			<form action="php/autenticar_usuario.php" method="post" id="form-login">
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control" placeholder="Digite o seu usuário ou e-mail">
				</div>
				<div class="form-group">
					<input type="password" name="senha" id="senha" class="form-control" placeholder="Digite a sua senha">
				</div>

				<button type="submit" class="btn btn-danger form-control">Login</button>

				<br/><br/>

				<a href="" class="esqueceu-senha">Esqueceu a senha?</a>

				<br/><br/>

				<a href="inscrevase.php" class="cadastro">Ainda não possui uma conta?</a>
			</form>
		</div>

	</body>
</html>