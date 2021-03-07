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

<title>Cadastro de Enfermeiro</title>

</head>
<body>
<hr color="white">
<h2>Cadastro de Enfermeiro</h2>
<img src="cruz.jpg" alt="" />
<br><br>

<?php ValidateFormRegisterEnfermeiras(); ?>

<br>

<form action="" method="post">


   <label>Nome da(o) Enfermeira(o)</label><br>
  <input type="text" name="nome_enfermeira" value=""><br>

  <label>Sobrenome da(o) Enfermeira(o)</label><br>
  <input type="text" name="sobrenome_enfermeira" /><br>
  
  <label>Código da(o) Enfermeira(o)</label><br>
  <input type="text" name="codigo_enfermeira" /><br>  

  <label>Inicio do Plantão</label><br>
  <input type="text" name="iplantao" /><br>

  <label>Final do Plantão</label><br>  
  <input type="text" name="fplantao" /><br>  

  <label>Médico Responsável pela Enfermeira</label><br>
  <input type="text" name="medico_responsavel" /><br>

<hr>
<input type="submit" name="send" value="Cadastrar"><br>
<a href="http://localhost/painel/paginas/"/>Página Inicial</a><br>


</form>
</body>
</html>
