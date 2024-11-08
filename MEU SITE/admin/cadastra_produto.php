<?php

include_once("../config.inc.php");

$nome = $_REQUEST['nome'];
$categoria = $_REQUEST['categoria'];
$preco = $_REQUEST['preco'];

$sql = "INSERT INTO produto (nome_produto,categoria,preco)
            VALUES ('$nome','$categoria','$preco')";

$query = mysqli_query($conexao, $sql);

if ($query) {
    echo "<h2>Produto cadastrado com sucesso.</h2>";
}

mysqli_close($conexao);
