<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastrar</title>
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
        <form name="cliente" method="POST" action="" class="form-register">
                <h4>Cadastro de PETs</h4>
                    <input class="controls" type="text" name="txtregistro" id="nomes" maxlength="5" placeholder="Número de Registro do PET">
                    <input class="controls" type="text" name="txtnome" id="apellidos" maxlength="30" placeholder="Nome">
                    <input class="controls" type="text" name="txtespecie" id="correo" maxlength="30" placeholder="Especie">
                    <input class="controls" type="text" name="txtraca" id="correo" maxlength="30" placeholder="Raca">
                    <input class="controls" type="text" name="txtcor" id="correo" maxlength="30" placeholder="Cor do PET">
                    <input class="controls" type="text" name="txtnascimento" id="correo" maxlength="10" placeholder="Data de Nascimento">
                    <input class="controls" type="text" name="txtsexo" id="correo" maxlength="20" placeholder="Sexo">
                        <input name="btnenviar" class="botons" type="submit" value="Registrar">
                        <input name="limpar" class="botons" type="reset" value="Limpar">
        
        
        <br><br>
 

<?php 
extract($_POST, EXTR_OVERWRITE);
if(isset($btnenviar))
{
    include_once 'Conexao.php';
    $pro=new pet();
    $pro->setRegistro($txtregistro);
    $pro->setNome($txtnome);
    $pro->setEspecie($txtespecie);
    $pro->setRaca($txtraca);
    $pro->setCor($txtcor);
    $pro->setNascimento($txtnascimento);
    $pro->setSexo($txtsexo);
    echo "<h3><br><br>" . $pro->salvar() . "</h3>";
}

?>




</form>
<br>


<button class="voltar"><a href="../index.html"> Voltar </a><button>
</center>
</main>

  





  </body>
</html>