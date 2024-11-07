<?php

include_once("config.inc.php");

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$mensagem = $_REQUEST['mensagem'];

$sql = "INSERT INTO faleconosco 
    (nome,email,telefone,mensagem) 
    VALUES('$nome','$email','$telefone','$mensagem')";

$query = mysqli_query($conexao, $sql);

if ($query) {
    echo "<h3> Mensagem enviada com sucesso</h3>";
} else {
    echo "<h3>Erro ao enviar mensagem</h3>";
}

mysqli_close($conexao);
