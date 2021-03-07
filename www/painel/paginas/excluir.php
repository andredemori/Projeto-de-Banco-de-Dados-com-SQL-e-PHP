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

<title>Excluir</title>

</head>
<body>
<hr color="white">
<h2>Excluir</h2>
<img src="cruz.jpg" alt="" />
<br><br>

<br>

<form action="" method="post">

	<a href="http://localhost/painel/paginas/excluirmedico.php"/>Excluir Médico</a><br>
	<a href="http://localhost/painel/paginas/excluienfermeira.php"/>Excluir Enfermeira(o)</a><br>
	<a href="http://localhost/painel/paginas/excluirpaciente.php"/>Excluir Paciente</a><br>
	<a href="http://localhost/painel/paginas/excluirmedicamento.php"/>Excluir Medicamento</a><br>
	<a href="http://localhost/painel/paginas/excluirestagiario.php"/>Excluir Estagiário</a><br>


<hr>
<a href="http://localhost/painel/paginas/"/>Página Inicial</a><br>
<a href="javascript:window.history.go(-1)">Voltar</a>


</form>
</body>
</html>
