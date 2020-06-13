<?php
// Conecta-se com o MySQL
//$host = "sql10.freesqldatabase.com";
//$user = "sql10347253";
////$pass = "bJ5LAhN1s6";
//$db = "sql10347253";

$host = "localhost";
$user = "root";
$pass = "";
$db = "bancoteste";

$link = mysqli_connect($host,$user,$pass,$db);

    if(!$link){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
       // echo "Conexao realizada com sucesso";
    } 
?>
