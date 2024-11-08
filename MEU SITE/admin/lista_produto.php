<h2>Lista de Produtos </h2>
<h4><a href="?pg=form_produto">Cadastrar Produto</a></h4>

<?php

include_once("../config.inc.php");

$sql = mysqli_query($conexao, "SELECT * FROM produto");

while ($produto = mysqli_fetch_array($sql)) {
    echo "Nome: $produto[nome_produto] <br>";
    echo "Categoria: $produto[categoria] <br>";
    echo "Preço: $produto[preco] <br>";
    echo "<a href=?pg=excluir_produto&id=$produto[id]><b>Excluir Produto</b></a> |";
    echo "<a href=?pg=form_altera_produto&id=$produto[id]><b>Editar Produto</b></a>";
    echo "<hr>";
}


mysqli_close($conexao);
