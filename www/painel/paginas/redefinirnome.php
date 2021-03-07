<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/painel/system/system.php';
    AccessPrivate();


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html lang="pt_BR">
<head>
<meta charset="utf-8">
<?php
 ini_set('default_charset','UTF-8');
?>
<title>Redefinir nome</title>
<link href = "painel/css/redefinirnome.css" rel = "stylesheet" type = "text/css"/>

</head>
<body>
<img src="../symbol.jpg" alt="" />
<hr color="white">
<h2>Redefinir nome</h2><br>
<hr>

<?php Validatealteraname(); ?><br>

<form action="" method="post">

  
  <div  id = "redefinirnome">

  <label>Novo nome</label><br>
  <input type="text" name="newname" value="<?php echo GetPost('newname'); ?>"><br><br> 

  <input type="submit" name="send" value="Redefinir" onclick="location. href= ''">
  
</div>
  <div  id = "menu1">

<ul>
<li><a href ='http://www.jogodascaixas.com/privacidade'>Voltar</a></li>
<li><a href ='http://www.jogodascaixas.com/paginainicial'>Página inicial</a></li>
</ul>
  
</div><br><br>

</form>
</body>
</html>
