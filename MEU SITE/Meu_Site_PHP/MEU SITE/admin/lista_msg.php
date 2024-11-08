<h2>Lista de Mensagens </h2>

<?php

include_once("../config.inc.php");
$sql = mysqli_query($conexao, "SELECT * FROM faleconosco");

while ($tabela = mysqli_fetch_array($sql)) {
    echo "Nome: $tabela[nome] <br>";
    echo "Email: $tabela[email] <br>";
    echo "Telefone: $tabela[telefone] <br>";
    echo "Assunto: $tabela[mensagem] <br>";
    echo "<a href=?pg=excluir&id=$tabela[id]><b>X</b></a>";
    echo "<hr>";
}

if (!$sql) {
    echo "Não foi possível ler as mensagens.";
}

mysqli_close($conexao);
