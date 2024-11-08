<?php

include_once("../config.inc.php");

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$categoria = $_REQUEST['categoria'];
$preco = $_REQUEST['preco'];

$sql = "UPDATE produto SET
            nome_produto = '$nome',categoria = '$categoria',preco = '$preco'
            WHERE id = $id";

$query = mysqli_query($conexao, $sql);

if ($query) {
    echo "<h2>Produto alterado com sucesso.</h2>";
}

mysqli_close($conexao);
