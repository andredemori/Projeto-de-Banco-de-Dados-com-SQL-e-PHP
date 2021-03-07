<?php
   include "connection.php";
    
?>
<html>

<head>
<meta charset="utf-8">
<?php
 ini_set('default_charset','UTF-8');
?>

<title>Resultado de pesquisa</title>


</head>
<body>
<?php
$buscar = $_POST['buscar'];
$sql = mysql_query ("SELECT * FROM medicos WHERE sobrenomemedico LIKE '%".$buscar."%'");
$row = mysql_num_rows($sql);
if($row > 0)
{
    while($linha = mysql_fetch_array($sql)){
	   $nomemedico = $linha['nomemedico'];
	   $sobrenomemedico = $linha['sobrenomemedico'];
	   $mail = $linha['mail'];
	   $especialidade = $linha['especialidade'];
	   $iplantao = $linha['iplantao'];
	   $fplantao = $linha['fplantao'];

	   echo "<br>";
	   echo "<strong>Nome do Médico:</strong>".@$nomemedico;
	   echo "<br>";
	   echo "<strong>Sobrenome do Médico:</strong>".@$sobrenomemedico;
	   echo "<br>";
	   echo "<strong>E-mail do Médico:</strong>".@$mail;
	   echo "<br>";
	   echo "<strong>Especialidade:</strong>".@$especialidade;
	   echo "<br>";
	   echo "<strong>Inicio do Plantão:</strong>".@$iplantao;
	   echo "<br>";
	   echo "<strong>Fim do Plantão:</strong>".@$fplantao;
	   echo "<br>";	
	}

}
else{
    echo "Nenhum registro encontrado.";
    }

?>
 
<a href="javascript:window.history.go(-1)">Voltar</a>

</body>
</html>