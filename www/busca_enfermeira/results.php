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
$sql = mysql_query ("SELECT * FROM enfermeiras WHERE codigo_enfermeira LIKE '%".$buscar."%'");
$row = mysql_num_rows($sql);
if($row > 0)
{
    while($linha = mysql_fetch_array($sql)){
	   $nome_enfermeira = $linha['nome_enfermeira'];
	   $sobrenome_enfermeira = $linha['sobrenome_enfermeira'];
	   $codigo_enfermeira = $linha['codigo_enfermeira'];
	   $iplantao = $linha['iplantao'];
	   $fplantao = $linha['fplantao'];
	   $medico_responsavel = $linha['medico_responsavel'];

	   echo "<br>";
	   echo "<strong>Nome da Enfermeira(o):</strong>".@$nome_enfermeira;
	   echo "<br>";
	   echo "<strong>Sobrenome da Enfermeira(o):</strong>".@$sobrenome_enfermeira;
	   echo "<br>";
	   echo "<strong>Código da Enfermeira(o):</strong>".@$codigo_enfermeira;
	   echo "<br>";
	   echo "<strong>Início do Plantão:</strong>".@$iplantao;
	   echo "<br>";
	   echo "<strong>Fim do Plantão:</strong>".@$fplantao;
	   echo "<br>";
	   echo "<strong>Médico Responsável:</strong>".@$medico_responsavel;
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