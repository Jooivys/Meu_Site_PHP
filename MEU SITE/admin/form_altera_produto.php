<?php

include_once("../config.inc.php");

$codigo = $_REQUEST['id'];

$sql = "SELECT * FROM produto WHERE id = $id";

$query = mysqli_query($conexao, $sql);

while ($produto = mysqli_fetch_array($query)) {
?>

   <h3> Alteração de Produto</h3>
   <form action="?pg=altera_produto&id=<?= $produto['id']; ?>" method="post">
      <label>Nome do produto:</label>
      <input type="text" name="nome" value="<?= $produto['nome_produto']; ?>"><br>
      <label>Categoria:</label>
      <input type="text" name="categoria" value="<?= $produto['categoria']; ?>"><br>
      <label >Preço: </label> 
      <input type="text" name="preco" value="<?= $produto['preco']; ?>"><br>
      <input type="submit" value="Alterar">
   </form>

<?php
}
?>