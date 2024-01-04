<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "tcc_simplehardware");

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Coleta dos dados do formulário
$Usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Prepara a consulta SQL
$query = "INSERT INTO `cadastros` (`Usuario`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')";

// Executa a consulta
if ($conn->query($query) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$conn->close();
?>
