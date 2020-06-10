<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Usuário</title>

  <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="wrap">
    <h2 align="center">Tela de Cadastro</h2>
    <div class="avatar">
      <img src="img/logo.png">
	</div>
            <form action="php/insert.php" method="POST"> 
                      <input type="text" name="email" placeholder="Email" required>
                      <input type="password" name="senha" placeholder="Email" required>
                      
                      <div class="bar">
                              <i></i>
                      </div>
                      <center>
                      <button type="submit">Confirmar</button> 
                      <button onclick="window.location.href='index.php'">Voltar</button>
                      </center>
                      </div>
            </form>
  <script src="js/index.js"></script>

</body>

<script src="scripts.js"></script>

</html>
