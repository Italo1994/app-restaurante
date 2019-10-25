<<!DOCTYPE html>
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

		<div class="container-login">
			<h3>Inscreva-se</h3>
			<form action="php/registra_usuario.php" method="post" id="form-cadastro">
				<div class="form-group">
					<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
				</div>

				<div class="form-group">
					<input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="Sobrenome">
				</div>

				<div class="form-group">
					<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário">
				</div>

				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
				</div>

				<div class="form-group">
					<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
				</div>

				<button type="submit" class="btn btn-danger form-control">Cadastrar</button>

				<br/><br/>

				
			</form>
		</div>

	</body>
</html>