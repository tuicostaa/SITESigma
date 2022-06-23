<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class="container">
    <div class= "row mt-5">
        <h2 class="clear">Promoção</h2>
            <
    <?php 
    for ($i=0; $i < 3; $i++) { 
?>

<div class="card" style="width: 18rem;">
  <img src="./img/<?php echo $produtos[$i]['imagens']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $produtos[$i]['nome'];?></h5>
            <p class="card-text"><?php echo $produtos[$i]['descricao'];?></p>
            <p class="card-text"><?php echo $produtos[$i]['preco'];?></p>
                <a href="produto-detalhe.php?id=<?php echo $i;?>&tipo=promocao" class="btn btn-primary">Comprar</a>
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