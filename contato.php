<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';


if ( isset($_POST['txtNome'] ) ) {
    $name = strtoupper($_POST['txtNome']);
echo $name;
}
if ( isset($_POST['txtEmail'] ) ) {
    $email = strtoupper($_POST['txtEmail']);
echo $email;
}
if ( isset($_POST['txtTelefone'] ) ) {
    $telefone = strtoupper($_POST['txtTelefone']);
echo $telefone;
}
if ( isset($_POST['txtMensagem'] ) ) {
    $msg = strtoupper($_POST['txtMensagem']);
echo $msg;
}
?>

<h1>Contato</h1>


    <form action="./contato.php" method="post">
    <label for="txtNome">Nome Completo</label>
    <input type="text" name="txtNome" id="txtNome" required>

    <form1  action="./contato.php" method="post">
    <label for="txtEmail">Email</label>
    <input type="text" name="txtEmail" id="txtEmail" required>

    <form2 action="./contato.php" method="post">
    <label for="txtTelefone">Telefone</label>
    <input type="text" name="txtTelefone" id="txtTelefone" required>

    <form3 action="./contato.php" method="post">
    <label for="txtMensagem">Mensagem</label>
    <input type="text" name="txtMensagem" id="txtMensagem" required>

    <input type="submit" value="Enviar">

</form>







<?php
// include do footer
include_once './includes/_footer.php';
?>