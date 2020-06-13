<?php
include_once ("connect.php");
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$result_cadastro = "insert into aut_usuarios(login,senha,nome,sobrenome)values('$login','$senha','$nome','$sobrenome')";
$result_cadastro = mysqli_query($link,$result_cadastro);

    if(mysqli_affected_rows($link) != 0){
        echo "<script>alert('Usuário cadastrado com sucesso!!');window.location = '../index.php';</script>";         

    }if(empty ($email) OR empty($senha)){
        echo "<script>alert('Não foi possivel cadastra o usuário!');window.location = '../cadastro.php';</script>"; 
    }

?>
