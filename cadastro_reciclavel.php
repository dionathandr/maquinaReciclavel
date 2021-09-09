<?php

session_start();
include("conexao.php");

$tipo_reciclavel = mysqli_real_escape_string($conexao, trim($_POST['tipo_reciclavel']));
$tamanho_reciclavel = mysqli_real_escape_string($conexao, trim($_POST['tamanho_reciclavel']));
$data_deposito = mysqli_real_escape_string($conexao, trim(md5($_POST['data_deposito'])));

$sql = "select count(*) as total from cadastro_produto where cadastro_produto = '$cadastro_produto'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

$sql = "INSERT INTO usuario (tipo_reciclavel, tamanho_reciclavel, data_deposito) VALUES"
        . " ('$tipo_reciclavel', '$tamanho_reciclavel', '$data_deposito', NOW())";

if ($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>