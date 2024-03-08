<?php
include('conexao.php');//inclunde:serve para erdar o objeto
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$data_nascimento=$_POST['data_nascimento'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$endereço=$_POST['endereço'];
$senha=$_POST['senha'];

$resultado= mysql_query($conexao,"INSERT INTO login")
?>