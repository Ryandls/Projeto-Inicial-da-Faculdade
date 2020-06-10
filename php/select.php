<?php
include "connect.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = mysqli_query($link,"select * from tb_login where email = '$email' AND senha = '$senha' LIMIT 1");
      
    while(mysqli_fetch_array($sql)){

        echo "<script>alert('Seu login foi efetuado com sucesso.');window.location = '/painel.php';</script>";
}       
    if(mysqli_affected_rows($link) == 0){
        echo "<script>alert('Seu Email ou Senha estão incorretos!');window.location = '/index.php';</script>";  
    }
?>


