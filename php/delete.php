<?php
include_once ("connect.php");
$id = $_POST['id'];
$delcadastro = "delete from tb_login where id_login = $id";
$delcadastro = mysqli_query($link,$delcadastro);
   
    if(mysqli_affected_rows($link) == 1){
                echo 
                    "O usuário foi deletado com sucesso!<br/> Por favor, volte a página.";    
            }else{
                echo 
                   "Não foi possivel deletar o usuário, pois o id dele não existe.<br/> Por favor, volte a página. ";    
            }
?>


