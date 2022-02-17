<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <title>Alterar</title>
    <meta charset="utf-8">
    <link href="../css/style.css" type="text/css" rel="stylesheet"/>
  </head>
  <body>
  <main class="main">

  <header>
  
  <nav>

    <a href="#"><img src="../img/logo.png" height="80px" width="auto" style="margin-top: 50px;"></a>

    <ul class="nav-list">

      <li><a href="../index.html">Home</a></li>
      <li><a href="cadastrar.php">Cadastro</a></li>
      <li><a href="excluir.php">Excluir</a></li>
      <li><a href="consultar_pesq.php">Pesquisar</a></li>
      <li><a href="listar.php">Listas</a></li>
      <li><a href="consultar_alt.php">Alteração</a></li>

    </ul>

  </nav>

</header>
<center>
    <form name="cliente" method="POST" action="consultar_alt2.php" class="form-register">
                <h4>Alterar Cadastro</h4>
                    <input class="controls" type="text" name="txtregistro" id="nomes" maxlength="5" placeholder="Numero do Registro do PET">
                        <input name="btnenviar" class="botons" type="submit" value="Consultar">
                        <input name="limpar" class="botons" type="reset" value="Limpar">
        
    </form>



<?php 
    

?>


<br>
<button class="voltar"><a href="../index.html"> Voltar </a><button>
</center>
</main>  
</body>



</html>