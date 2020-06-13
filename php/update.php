<?php
include_once ("connect.php");
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
$id_usuario = $_SESSION["id_usuario"];


$redefinirup = "update aut_usuarios set login = '$login', senha = md5('$senha') where id = '$id_usuario';";
$redefinirip = mysqli_query($link,$redefinirup);
   
    if(mysqli_affected_rows($link) == 1){
                echo 
                    "<script>alert('Dados redefinidos com Sucesso!!');window.location = '../inicio.php';</script>";
            }else{
                echo 
                    "<script>alert('Não foi possivel redefinir seus dados!!');window.location = '../inicio.php';</script>";  
            }     

?>