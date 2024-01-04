<?php

include('conexao.php');

$produto1 = $_GET['produto1'];
$produto2 = $_GET['produto2'];

$sqlProduto1 = "SELECT * FROM produtos WHERE id = $produto1";
$resultProduto1 = $conexao->query($sqlProduto1);
$produto1Data = $resultProduto1->fetch_assoc();
$sqlProduto2 = "SELECT * FROM produtos WHERE id = $produto2";
$resultProduto2 = $conexao->query($sqlProduto2);
$produto2Data = $resultProduto2->fetch_assoc();

$novoProdutoID = 6;
$novoProdutoNome = "Novo Produto"; // Substitua pelo nome real do novo produto

// Adicione o novo produto automaticamente à lista suspensa produto1
if (isset($novoProdutoID)) {
    echo "<script>";
    echo "var novoProdutoOption = document.createElement('option');";
    echo "novoProdutoOption.value = '$novoProdutoID';";
    echo "novoProdutoOption.text = '$novoProdutoNome';";
    echo "document.getElementById('lista1').appendChild(novoProdutoOption);"; // Mude 'produto1' para 'lista1'
    echo "</script>";
}

$conexao->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparação de Produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="text-center">Comparação de Produtos</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">Produto 1: <?php echo $produto1Data['nome']; ?></h2>
                <img src="images/<?php echo $produto1Data['imagem']; ?>" class="img-fluid rounded" id="fotos" alt="Imagem Produto 1" />
                <p>Características:</p>
                <ul>
                    <li>Marca: <?php echo $produto1Data['caracteristica1']; ?></li>
                    <li>Preço: R$ <?php echo $produto1Data['caracteristica2']; ?></li>
                    <li>Cache: <?php echo $produto1Data['caracteristica3']; ?></li>
                    <li>Núcleos: <?php echo $produto1Data['caracteristica4']; ?></li>
                    <li>Threads: <?php echo $produto1Data['caracteristica5']; ?></li>
                    <li>Clock Base: <?php echo $produto1Data['caracteristica6']; ?></li>
                    <li>Clock Turbo: <?php echo $produto1Data['caracteristica7']; ?></li>
                    <li>Soquete: <?php echo $produto1Data['caracteristica8']; ?></li>
                </ul>
            </div>

            <div class="col-md-6">
                <h2 class="text-center">Produto 2: <?php echo $produto2Data['nome']; ?></h2>
                <img src="images/<?php echo $produto2Data['imagem']; ?>" class="img-fluid rounded" id="fotos" alt="Imagem Produto 2" />
                <p>Características:</p>
                <ul>
                    <li>Marca: <?php echo $produto2Data['caracteristica1']; ?></li>
                    <li>Preço: R$ <?php echo $produto2Data['caracteristica2']; ?></li>
                    <li>Cache: <?php echo $produto2Data['caracteristica3']; ?></li>
                    <li>Núcleos: <?php echo $produto2Data['caracteristica4']; ?></li>
                    <li>Threads: <?php echo $produto2Data['caracteristica5']; ?></li>
                    <li>Clock Base: <?php echo $produto2Data['caracteristica6']; ?></li>
                    <li>Clock Turbo: <?php echo $produto2Data['caracteristica7']; ?></li>
                    <li>Soquete: <?php echo $produto2Data['caracteristica8']; ?></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
