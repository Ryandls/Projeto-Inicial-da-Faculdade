<?php
// Inicia sessoes
session_start();

// Verifica se existe os dados da sessao de login
if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"]))
{
    echo "<script>alert('Usuario nao logado!')</script>";       
    header("Location: ../login.php");
    exit;
}
?>