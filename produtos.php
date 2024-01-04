<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Simple Hardware</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">

    <style>
        
            .card-text {
                color: black; 
            }
            .card-title {
                color: black;
            }
            
        </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-gray">
            <a class="navbar-brand" href="#">Simple Hardware</a>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
						<a class="nav-link" href="index.php">Início</a>
					</li>		
					<li class="nav-item">
                        <a class="nav-link" href="produtos.php">Produtos</a>
						
					</li>
					<li class="nav-item">
                        <a class="nav-link" href="Login.html">Administrador</a>
                    </li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <h1>Lista de Produtos</h1>
        <div class="row">
                    <?php
            
            include('conexao.php');
           
            $query = "SELECT * FROM produtos";
            $result = mysqli_query($conexao, $query);

            // Loop para exibir os produtos
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="images/' . $row['imagem'] . '" class="card-img-top" alt="Imagem do Produto">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['nome'] . '</h5>';
                echo '<p class="card-text">' . $row['descricao'] . '</p>';
                echo '<p class="card-text"><strong>R$ ' . $row['preco'] . '</strong></p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            mysqli_close($conexao);
            ?>
        </div>
    </main>

    <footer class="bg-dark text-light py-3">
        <div class="container text-center">
            <p>&copy; 2023 Todos os direitos reservados a João Gabriel & João Pedro.</p>
        </div>

    </footer>

    <div class="retangulo">

    </div> 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
