<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <title>Alterar</title>
    <meta charset="utf-8">
    <link href="../css/style.css" type="text/css" rel="stylesheet"/>
  </head>
  <body>

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

<center><font face="Century Gothic" size="6"><b>Alteração de PETs</b><font size="4">
    <font face="Century Gothic" size="3"><br>

<fieldset>
    <legend><b>Gustavo Grorossi Muniz</b></legend>

    <?php
    $txtregistro=$_POST["txtregistro"];
    include_once 'Conexao.php';
    $p = new pet();
    $p->setRegistro($txtregistro);
    $pro_bd=$p->alterar();
    ?>
    <br><form name="cliente2" method="POST" action="" >
    <?php
        foreach($pro_bd as $pro_mostrar)
        {
    ?>

        <input type="hidden" name="txtregistro" size="5" value='<?php echo $pro_mostrar[0] ?>'>
        <b> <?php echo "Registro: " . $pro_mostrar[0];?></b>
        <br><br> <b><?php  echo "Nome: " ?></b>
        <input type="text" name="txtnome" size="30" value='<?php echo $pro_mostrar[1] ?>'>
        <br><br> <b><?php  echo "Especie: " ?></b>
        <input type="text" name="txtespecie" size="30" value='<?php echo $pro_mostrar[2] ?>'>
        <br><br> <b><?php  echo "Raca: " ?></b>
        <input type="text" name="txtraca" size="30" value='<?php echo $pro_mostrar[3] ?>'>
        <br><br> <b><?php  echo "Cor: " ?></b>
        <input type="text" name="txtcor" size="30" value='<?php echo $pro_mostrar[4] ?>'>
        <br><br> <b><?php  echo "Nascimento: " ?></b>
        <input type="text" name="txtnascimento" size="10" value='<?php echo $pro_mostrar[5] ?>'>
        <br><br> <b><?php  echo "Sexo: " ?></b>
        <input type="text" name="txtsexo" size="20" value='<?php echo $pro_mostrar[6] ?>'>
        <br><br><br><center>
        <input name="btnalterar" type="submit" value="Alterar">

        <?php
        }
        ?>
</form>
</fieldset>

<?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnalterar))
    {
      include_once 'Conexao.php';
      $pro = new pet();
      $pro->setNome($txtnome);
      $pro->setEspecie($txtespecie);
      $pro->setRaca($txtraca);
      $pro->setCor($txtcor);
      $pro->setNascimento($txtnascimento);
      $pro->setSexo($txtsexo);
      $pro->setRegistro($txtregistro);
      echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
      header("location:consultar_alt.php");
    }
?>

<center> <br><br><br><br>
<button class="voltar"><a href="../index.html"> Voltar </a><button>

  
  
  </body>
</html>