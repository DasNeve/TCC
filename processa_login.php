<?php
include('conexao.php');

// Verificação das credenciais
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prevenir SQL injection usando prepared statements
    $query = "SELECT * FROM login WHERE usuario = ? AND Senha = ?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
      
        echo '<script>';
        echo 'alert("Login bem-sucedido!");'; 
        echo 'window.location.href = "indexlogin.php";';
        echo '</script>';   
        exit();
    } else {
        echo '<script>';
        echo 'alert("Senha incorreta!");'; 
        echo 'window.location.href = "Login.html";';
        echo '</script>';   
        exit();
    }
}

$conexao->close();
?>
