<?php

include_once("../config.inc.php");

$id = $_REQUEST['id'];

$sql = mysqli_query(
    $conexao,
    "DELETE FROM produto WHERE id = $id"
);

if ($sql) {
    echo "<h2> Produto excluído.</h2>";
}

mysqli_close($conexao);
