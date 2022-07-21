<?php

// include do footer
include_once './includes/_banco.php';
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
// $sqlStr = "";

// foreach ($produtos as $key => $value) {
//     $nome = $value['nome'];
//     $descricao = $value['descricao'];
//     $imagem = $value['imagem'];
//     $preco = $value ['preco'];
//     $sqlStr = "$sqlStr<br>INSERT INTO `produtos` (`Nome`, `Descricao`, `Imagem`, `Preco`, `CategoriaID`, `Ativo`) VALUES ('$nome', '$descricao', '$imagem', '$preco', 1, 1); ";
// }

// print($sqlStr);
?>

<div class="container">
<h2 class="clear">Promoção</h2>
<div class= "row mt-5">
      
<?php 
$sql = "SELECT * FROM produtos WHERE Ativo = 1 LIMIT 3";
$exec = mysqli_query($conn,$sql);
$numProdutos = mysqli_num_rows($exec);
while ( $dados = mysqli_fetch_assoc($exec) ) {      
?>

<div class="card" style="width: 18rem;">
  <img src="./img/<?php echo $dados['Imagem']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $dados['Nome'];?></h5>
            <p class="card-text"><?php echo $dados['Descricao'];?></p>
                <a href="produto-detalhe.php?id=<?php echo $dados['ProdutoID'];?>&tipo=promocao" class="btn btn-primary">Comprar</a>
        </div>
    </div>
    <?php
    }
    ?>
    </div> 
</div>


<?php
// include do footer
include_once './includes/_footer.php';
?>