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

<title>Altera Dados</title>

</head>
<body>
<hr color="white">
<h2>Altera Dados</h2>
<img src="cruz.jpg" alt="" />
<br><br>

<?php ValidatealteraFimPlantao(); ?>

<br>

<form action="" method="post">


   <label>Sobrenome do Médico</label><br>
  <input type="text" name="sobrenomemedico" value=""><br>

  <label>Novo Fim de Plantão</label><br>
  <input type="text" name="newfplantao" /><br>

<hr>
<input type="submit" name="send" value="Cadastrar"><br>
<a href="http://localhost/painel/paginas/"/>Página Inicial</a><br>
<a href="javascript:window.history.go(-1)">Voltar</a>


</form>
</body>
</html>
