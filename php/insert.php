<?php
include_once ("connect.php");
$email = $_POST['email'];
$senha = $_POST['senha'];

$result_cadastro = "insert into tb_login(email,senha)values('$email','$senha')";
$result_cadastro = mysqli_query($link,$result_cadastro);

    if(mysqli_affected_rows($link) != 0){
        echo "<script>alert('Usuário cadastrado com sucesso');window.location = '/cadastro.php';</script>";         

    }if(empty ($email) OR empty($senha)){
        echo "<script>alert('Não foi possivel cadastra o usuário!');window.location = '/cadastro.php';</script>"; 
    }

?>
