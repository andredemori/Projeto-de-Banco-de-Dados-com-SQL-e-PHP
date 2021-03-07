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

<title>Cadastro dos Médicos</title>

</head>
<body>
<hr color="white">
<h2>Cadastro dos Médicos</h2>
<img src="cruz.jpg" alt="" />
<br><br>

<?php ValidateFormRegisterMedicos(); ?>

<br>

<form action="" method="post">


   <label>Nome do Médico</label><br>
  <input type="text" name="nomemedico" value=""><br>

  <label>Sobrenome do Médico</label><br>
  <input type="text" name="sobrenomemedico" /><br>
  
  <label>E-mail</label><br>
  <input type="text" name="mail" /><br>  

  <label>Especialidade</label><br>
  <input type="text" name="especialidade" /><br>

  <label>Inicio do Plantão</label><br>  
  <input type="text" name="iplantao" /><br>  

  <label>Final do Plantão</label><br>
  <input type="text" name="fplantao" /><br>   

<hr>
<input type="submit" name="send" value="Cadastrar"><br>
<a href="http://localhost/painel/paginas/"/>Página Inicial</a><br>

</form>
</body>
</html>
