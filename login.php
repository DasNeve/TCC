<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	
	<link rel="icon" href="C:\Users\joaog\Desktop\TCC\Icone SimpleHadware.jpg" type="image/x-icon">

    <!-- Adicionando o CSS do Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- Adicionando o arquivo de estilos -->
	<link rel="stylesheet" href="style.css">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
    <header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Simple Hardware</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Início</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cadastro.html">Cadastro</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Login.html">Login</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

    <main class="container">
        <article id="login">
		    <h1 style="text-align: center;">Login</h1>
		    <p style="text-align: center;"> Preencha os seguintes campos para concluir o seu Login:</p>
		</br>
  				<form action="/Logar" method="post" class="login">
					<div>
				</br>
						<label for="username" style="text-align: right; margin-left: 20px ;">Usuário:</label>
						<input type="text" id="username" name="username" required>
					</div>
				</br>
					<div>
						<label for="password" style="text-align: right; margin-left: 31px;">Senha:</label>
						<input type="password" id="password" name="password" required>
					</div>
				</br>
					<div style="overflow: hidden;">
						<input type="button" value="Voltar" style="float: left; margin-left: 50px ;">
						<input type="submit" value="Login" style=" float: left; margin-left: 120px;">
					</div>
				</br>
				</form>
        </article>

	</main>

	<footer class="bg-dark text-light py-3">
		<div class="container text-center">
			<p>&copy; 2023 Todos os direitos reservados.</p>
		</div>
	</footer>
	

</body>
</html>