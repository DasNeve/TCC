<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nomeProduto'];
    $caracteristica1 = $_POST['marca'];
    $caracteristica2 = $_POST['preco'];
    $caracteristica3 = $_POST['cache'];
    $caracteristica4 = $_POST['nucleos'];
    $caracteristica5 = $_POST['threads'];
    $caracteristica6 = $_POST['clockBase'];
    $caracteristica7 = $_POST['clockTurbo'];
    $caracteristica8 = $_POST['soquete'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

  
    if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem = $_FILES['imagem']['name']; 
        $caminho_imagem = 'C:\wamp64\www\Tcc\images\\' . $imagem;

      
        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_imagem)) {
       
            $query = "INSERT INTO produtos (nome, caracteristica1, caracteristica2, caracteristica3, caracteristica4, caracteristica5, caracteristica6, caracteristica7, caracteristica8, descricao, preco, imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conexao->prepare($query);

            $stmt->bind_param("ssdddddsssss", $nome, $caracteristica1, $caracteristica2, $caracteristica3, $caracteristica4, $caracteristica5, $caracteristica6, $caracteristica7, $caracteristica8, $descricao, $preco, $imagem);


            try {
                if ($stmt->execute()) {
                    echo '<script>';
                    echo 'alert("Cadastro bem-sucedido!");'; 
                    echo 'window.location.href = "indexlogin.php";';
                    echo '</script>';
                } else {
                    $error_message = "Erro ao cadastrar: " . $stmt->error;
                    error_log($error_message, 3, "error_log.txt"); 
                    echo '<script>';
                    echo 'alert("Erro ao cadastrar. Por favor, contate o suporte.");'; 
                    echo 'window.location.href = "cadastro.html;'; 
                    echo '</script>';
                }
            } catch (Exception $e) {
                $error_message = "Erro ao cadastrar: " . $e->getMessage();
                error_log($error_message, 3, "error_log.txt"); 
                echo '<script>';
                echo 'alert("Erro ao cadastrar. Por favor, contate o suporte.");'; 
                echo 'window.location.href = "cadastro.html;'; 
                echo '</script>';
            }
        } else {
            echo '<script>';
            echo 'alert("Erro ao fazer o upload da imagem.");'; 
            echo 'window.location.href = "cadastro.html;'; 
            echo '</script>';
        }
    } else {
     
        echo '<script>';
        echo 'alert("Por favor, selecione uma imagem para fazer upload.");'; 
        echo 'window.location.href = "cadastro.html;'; 
        echo '</script>';
    }
    
    $conexao->close();
}
?>
