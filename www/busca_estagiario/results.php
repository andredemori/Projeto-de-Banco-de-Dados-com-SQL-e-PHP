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
$sql = mysql_query ("SELECT * FROM estagiarios WHERE cpf_estagiario LIKE '%".$buscar."%'");
$row = mysql_num_rows($sql);
if($row > 0)
{
    while($linha = mysql_fetch_array($sql)){
	   $nome_estagiario = $linha['nome_estagiario'];
	   $sobrenome_estagiario = $linha['sobrenome_estagiario'];
	   $cpf_estagiario = $linha['cpf_estagiario'];
	   $faculdade = $linha['faculdade'];
	   $data_de_nascimento = $linha['data_de_nascimento'];
	   $medico_responsavel = $linha['medico_responsavel'];

	   echo "<br>";
	   echo "<strong>Nome da Estagiário:</strong>".@$nome_estagiario;
	   echo "<br>";
	   echo "<strong>Sobrenome do Estagiário:</strong>".@$sobrenome_estagiario;
	   echo "<br>";
	   echo "<strong>CPF do Estagiário:</strong>".@$cpf_estagiario;
	   echo "<br>";
	   echo "<strong>Faculdade:</strong>".@$faculdade;
	   echo "<br>";
	   echo "<strong>Data de nascimento:</strong>".@$data_de_nascimento;
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