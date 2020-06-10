<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Início</title>

  <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css"/>

</head>

<body>
     
  
  <div class="wrap">
      <h2 align="center">Tela de Login</h2>
        <div class="avatar">
      <img src="img/painel.png">
    
    </div>
        <form action="php/select.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <div class="bar">
                <i></i>
            </div>
            <input type="password" name="senha" placeholder="Senha" required>
            <center>
                        <button type="submit" value="login">Login</button>
                        <button onclick="window.location.href='cadastro.php'" value="cadastrar">Cadastrar</button>
                        <button onclick="window.location.href='imc.php'" value="">Teste IMC</button>
            </center>
                       
            </div>
        </form>
  <script src="js/index.js"></script>

</body>

<script src="scripts.js"></script>
</html>