<?php

$tipo_reciclavel = $_POST['TipoReciclavel'];
$tamanho_reciclavel = $_POST['Tamanho'];
$data_deposito = $_POST['DataDeposito'];
$strcon = mysqli_connect('127.0.0.1', 'root','', 'login') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$tipo_reciclavel', '$tamanho_reciclavel', '$data_deposito')";




mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";

?>