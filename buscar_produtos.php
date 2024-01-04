<?php
include('conexao.php');

$query = "SELECT id, nome FROM produtos";
$result = mysqli_query($conexao, $query);

$options = '';

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $options .= '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
    }
}

mysqli_close($conexao);

echo $options;
?>
