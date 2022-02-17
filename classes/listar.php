<!DOCTYPE HTML>

<html lang="pt-br">
<head>
    <title>Lista de PETs</title>
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
<section>
<br>

<br>

<div class="listar">
<h1 style="margin-bottom: 30px; font-weight: 100;">Lista de PETs (Cadastrados)</h1>
<?php
	include_once 'Conexao.php';
	$p = new pet();
	$pro_bd=$p->listar();
?>
<b>	REGISTRO&emsp;&emsp;&emsp;NOME&emsp;&emsp;&emsp;ESPÉCIE&emsp;&emsp;&emsp;RACA&emsp;&emsp;&emsp;COR&emsp;&emsp;&emsp;NASCIMENTO&emsp;&emsp;&emsp;SEXO </b>

<?php
foreach($pro_bd as $pro_mostrar)
{
	?>
	<br><br>
  <div class="space"> 
	<b><?php echo $pro_mostrar[0]; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;
	   <?php echo $pro_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
	   <?php echo $pro_mostrar[2]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
	   <?php echo $pro_mostrar[3]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
	   <?php echo $pro_mostrar[4]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
     <?php echo $pro_mostrar[5]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
       <?php echo $pro_mostrar[6]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
  </div>
	<?php
}
	?>
</dic>

	</section>
<br>
<button class="voltar"><a href="../index.html"> Voltar </a><button>
</center>


</main>



  </body>
</html>