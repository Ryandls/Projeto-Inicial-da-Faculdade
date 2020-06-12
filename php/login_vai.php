<?php
// Conexao com o banco de dados
require "connect.php";

// Inicia sessoes
session_start();

/**
* Executa a consulta no banco de dados.
* Caso o numero de linhas retornadas seja 1 o login e valido,
* caso 0, invalido.
*/
$login = $_POST['login'];
$senha = $_POST['senha'];

$SQL = "select * from aut_usuarios where login = '$login' AND senha = '$senha'";

$result_id = mysqli_query($link, $SQL) or die("Erro no banco de dados!");

$total= mysqli_num_rows($result_id);

// Caso o usuario tenha digitado um login valido o numero de linhas sera 1..
if($total)
{
    // Obtem os dados do usuario, para poder verificar a senha e passar os demais dados para a sessao
    $dados = mysqli_fetch_array($result_id);

    // Agora verifica a senha
    if(!strcmp($senha, $dados["senha"]))
    {
        // TUDO OK! Agora, passa os dados para a sessao e redireciona o usuario
        $_SESSION["id_usuario"]   = $dados["id"];
        $_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
        header("Location: ../index.php");
        exit;
    }
    // Senha invalida
    else
    {
        echo "<script>alert('Senha invalida!');window.location = '../login.php';</script>";
        exit;
    }
}
// Login invalido
else
{
    echo "<script>alert('O Email fornecido é inexistente!');window.location = '../login.php';</script>";
    exit;
}
?>