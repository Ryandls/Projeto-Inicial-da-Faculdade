<?php
include_once ("connect.php");
session_start();
$id_usuario = $_SESSION["id_usuario"];


$delcadastro = "delete from aut_usuarios where id = '$id_usuario'";
$delcadastro = mysqli_query($link,$delcadastro);
   
    if(mysqli_affected_rows($link) == 1){
                
                echo "<script>alert('O usuário foi deletado com sucesso!!');window.location = 'sair.php';</script>";
            }else{
                
                echo "<script>alert('Não foi possivel deletar o usuário!!');window.location = 'inicio.php';</script>";    
            }           
?>