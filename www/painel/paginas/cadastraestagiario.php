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

<title>Cadastro de Estagiário</title>

</head>
<body>
<hr color="white">
<h2>Cadastro de Estagiário</h2>
<img src="cruz.jpg" alt="" />
<br><br>

<?php ValidateFormRegisterEstagiario(); ?>

<br>

<form action="" method="post">


   <label>Nome do Estagiário</label><br>
  <input type="text" name="nome_estagiario" value=""><br>

  <label>Sobrenome do Estagiário</label><br>
  <input type="text" name="sobrenome_estagiario" /><br>
  
  <label>CPF do Estagiário</label><br>
  <input type="text" name="cpf_estagiario" /><br>  

  <label>Faculdade</label><br>
  <input type="text" name="faculdade" /><br>

  <label>Data de Nascimento</label><br>  
  <input type="text" name="data_de_nascimento" /><br>  

  <label>Médico Responsável pelo Paciente</label><br>
  <input type="text" name="medico_responsavel" /><br>

<hr>
<input type="submit" name="send" value="Cadastrar"><br>
<a href="http://localhost/painel/paginas/"/>Página Inicial</a><br>


</form>
</body>
</html>
