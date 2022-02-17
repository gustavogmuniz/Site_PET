<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Pesquisar</title>
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
            <h4>Pesquisar o PET</h4>
                <input class="controls" type="text" name="txtnome" id="nomes" maxlength="40" placeholder="Nome do PET">
                <input name="btnenviar" class="botons" type="submit" value="Pesquisar">
                <input name="limpar" class="botons" type="reset" value="Limpar">
        

		<?php
		extract($_POST, EXTR_OVERWRITE);
		if(isset($btnenviar))
		{
			include_once 'Conexao.php';
			$p = new pet();
			$p-> setNome($txtnome. '%'); 
			$pro_bd=$p->consultar();
			foreach($pro_bd as $pro_mostrar)
				{
				 ?> <br>
				 <br> <?php echo "Registro: " . $pro_mostrar[0];?></br> &nbsp;&nbsp;&nbsp;&nbsp;
				 <br> <?php echo "Nome: " . $pro_mostrar[1];?></br> &nbsp;&nbsp;&nbsp;&nbsp;
				 <br> <?php echo "Especie: " . $pro_mostrar[2];?></br> 
                 <br> <?php echo "Raca: " . $pro_mostrar[3];?></br> 
                 <br> <?php echo "Cor: " . $pro_mostrar[4];?></br> 
                 <br> <?php echo "Nascimento: " . $pro_mostrar[5];?></br> 
                 <br> <?php echo "Sexo: " . $pro_mostrar[6];?></br> 
				 <?php
 				}
		}
?>


</form>



<br>

	<button class="voltar"><a href="../index.html"> Voltar </a><button>




</center>
    </main>

   </body>
</html>	