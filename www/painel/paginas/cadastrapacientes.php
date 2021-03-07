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

<title>Cadastro de Pacientes</title>

</head>
<body>
<hr color="white">
<h2>Cadastro de Pacientes</h2>
<img src="cruz.jpg" alt="" />
<br><br>

<?php ValidateFormRegisterPacientes(); ?>

<br>

<form action="" method="post">


   <label>Nome do Paciente</label><br>
  <input type="text" name="nome_paciente" value=""><br>

  <label>Sobrenome do Paciente</label><br>
  <input type="text" name="sobrenome_paciente" /><br>
  
  <label>CPF do Paciente</label><br>
  <input type="text" name="cpf_paciente" /><br>

  <label>Data de Nascimento do Paciente</label><br>
  <input type="text" name="data_paciente" /><br>

  <label>Endereco Completo</label><br>  
  <input type="text" name="endereco_completo" /><br>  

  <label>Médico Responsável pelo Paciente</label><br>
  <input type="text" name="medico_responsavel" /><br>
  
  <label>Enfermeira Responsável pelo Paciente</label><br>
  <input type="text" name="enfermeira_responsavel" /><br>

  <label>Código do Medicamento 1</label><br>
  <input type="text" name="medicamento" /><br>   
  
  <label>Código do Medicamento 2</label><br>
  <input type="text" name="medicamento_2" /><br>   
  
  <label>Código do Medicamento 3</label><br>
  <input type="text" name="medicamento_3" /><br>   

  <label>Código do Medicamento 4</label><br>
  <input type="text" name="medicamento_4"  /><br>   
  
  <label>Código do Medicamento 5</label><br>
  <input type="text" name="medicamento_5"  /><br> 
  
<hr>
<input type="submit" name="send" value="Cadastrar"><br>
<a href="http://localhost/painel/paginas/"/>Página Inicial</a><br>


</form>
</body>
</html>
