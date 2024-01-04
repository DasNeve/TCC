<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" href="Icone SimpleHadware.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Hardware</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        h3 {
    font-size: 28px; /* Tamanho da fonte */
    text-align: center; /* Centraliza o texto */
    margin-top: 20px; /* Espaço superior */
    color: white; /* Cor do texto */
}
p {
    font-size: 28px; /* Tamanho da fonte */
    text-align: center; /* Centraliza o texto */
    margin-top: 20px; /* Espaço superior */
    color: white; /* Cor do texto */
}
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-gray">
            <a class="navbar-brand" href="#">Simple Hardware</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
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
            </div>
        </nav>
    </header>

    <main class="container">

        <h3>Bem-vindo ao Simple Hardware</h3>
        <p>Escolha os componentes que deseja calcular:</p>

        <article id="index">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="grupoimagem1 flex-column">
                        <select class="form-control" name="produto1" id="lista1">
                            <?php
                            include('conexao.php');
                            $query = "SELECT id, nome FROM produtos";
                            $result = mysqli_query($conexao, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $produtoId = $row['id'];
                                $produtoNome = $row['nome'];
                                echo "<option value='$produtoId'>$produtoNome</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <select class="form-control" name="produto2" id="lista2">
                        <?php
                        $result = mysqli_query($conexao, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $produtoId = $row['id'];
                            $produtoNome = $row['nome'];
                            echo "<option value='$produtoId'>$produtoNome</option>";
                        }
                        mysqli_close($conexao);
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group" id="botoes">
            <button type="button" class="btn btn-primary btn-lg btn-block" id="botaoCalcular">Calcular</button>
        </div>

        <div id="resultadoComparacao"></div>

    </article>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const botaoCalcular = document.getElementById('botaoCalcular');
        const resultadoComparacao = document.getElementById('resultadoComparacao');

        botaoCalcular.addEventListener('click', function () {
            const produto1 = document.querySelector('[name="produto1"]').value;
            const produto2 = document.querySelector('[name="produto2"]').value;

            const xhr = new XMLHttpRequest();
            xhr.open('GET', `compare.php?produto1=${produto1}&produto2=${produto2}`, true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    resultadoComparacao.innerHTML = xhr.responseText;
                }
            };

            xhr.send();
        });
    });
</script>

</body>
</html>
