<?php
include_once ("connect.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$id = $_POST['id'];

$redefinirup = "update aut_usuarios set nome = '$nome', email = '$email', senha = '$senha' where id = $id";
$redefinirip = mysqli_query($link,$redefinirup);
   
    if(mysqli_affected_rows($link) == 1){
                echo 
                    "Cadastro redefinido com sucesso!<br/> Por favor, volte a página.";    
            }else{
                echo 
                   "Não foi possível redefinir o cadastrar do usuário.";    
            }
?>


