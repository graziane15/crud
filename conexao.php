<?php
$host='localhost';
$usuario='rool';
$senha='';
$bd='graziane';
$conexao=new mysqli($host,$usuario,$senha,$bd);
if($conexao){
    echo"erro".mysqli_connect_error();
}
else{
     echo"conexao feita";
}
?>