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
$sql = mysql_query ("SELECT * FROM medicamentos WHERE cod_medicamento LIKE '%".$buscar."%'");
$row = mysql_num_rows($sql);
if($row > 0)
{
    while($linha = mysql_fetch_array($sql)){
	   $cod_medicamento= $linha['cod_medicamento'];
	   $nome_medicamento = $linha['nome_medicamento'];
	   $dose = $linha['dose'];

	   echo "<br>";
	   echo "<strong>Código do Medicamento:</strong>".@$cod_medicamento;
	   echo "<br>";
	   echo "<strong>Nome do Medicamento:</strong>".@$nome_medicamento;
	   echo "<br>";
	   echo "<strong>Dose:</strong>".@$dose;
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