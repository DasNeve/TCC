<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "tcc_simplehardware";

// Criar a conexão mysqli
$conexao = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Erro na conexão com o banco de dados: " . mysqli_connect_error();
    exit();
}
?>
