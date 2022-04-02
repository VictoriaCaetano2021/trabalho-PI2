<?php
session_start();

if (!isset($_SESSION['usuario'])) {
header("location:login.php");
session_destroy();
}
if (isset($_GET['usuarioLogOut'])) {
header("location:index.php");
session_destroy();
}
$idPessoa=$_SESSION['Adm'];
 include 'conexao.php';
$posicao=0;
$posicao1=0;
?>