<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/painel/system/system.php';

?>

<form action="" method="post">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html lang="pt_BR">
<head>
<meta charset="utf-8">
<?php
 ini_set('default_charset','UTF-8');

?>

<title>Cadastro de Medicamento</title>

</head>
<body>
<hr color="white">
<h2>Cadastro de Medicamento</h2>
<img src="cruz.jpg" alt="" />
<br><br>

<?php ValidateFormRegisterMedicamento(); ?>

<br>

<form action="" method="post">

  <label>ID do Medicamento</label><br>
  <input type="text" name="id_medicamento" value="" ><br>
  
  <label>Código do Medicamento</label><br>
  <input type="text" name="cod_medicamento" value="" ><br>

  <label>Nome do Medicamento</label><br>
  <input type="text" name="nome_medicamento" /><br>
  
  <label>Dose(mg ou ml ou gotas)</label><br>
  <input type="text" name="dose" /><br>  

<hr>
<input type="submit" name="send" value="Cadastrar"><br>
<a href="http://localhost/painel/paginas/"/>Página Inicial</a><br>


</form>
</body>
</html>
