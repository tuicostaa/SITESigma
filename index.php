<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

?>

<h1>Home</h1>
<?php
for ($i=0; $i < 4; $i++) { 
echo '<br>';
echo $produtos[$i]['nome'];
echo '<br>';
echo $produtos[$i]['preço'];
echo '<img src="./img/' .$produtos[$i]['imagens']. '">';
echo '<hr>';
}
?>





<?php
// include do footer
include_once './includes/_footer.php';
?>