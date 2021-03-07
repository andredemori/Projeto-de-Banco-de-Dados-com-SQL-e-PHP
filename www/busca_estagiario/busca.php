<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/painel/system/system.php';

?>
<html>

<head>
<meta charset="utf-8">
<?php
 ini_set('default_charset','UTF-8');
?>

<title>Sistema de busca</title>


</head>
<body>
<form name = "searchform" method = "post" action = "results.php">
CPF do Estagiário: <input type = "text" name = "buscar" /> <input type = "submit" value = "Ir" />
<br><a href="javascript:window.history.go(-1)">Voltar</a>

</form>
</body>
</html>