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
$sql = mysql_query ("SELECT * FROM pacientes WHERE cpf_paciente LIKE '%".$buscar."%'");
$row = mysql_num_rows($sql);
if($row > 0)
{
    while($linha = mysql_fetch_array($sql)){
	   $cpf_paciente = $linha['cpf_paciente'];
	   $nome_paciente = $linha['nome_paciente'];
	   $data_paciente = $linha['data_paciente'];
	   $endereco_completo = $linha['endereco_completo'];
	   $medico_responsavel = $linha['medico_responsavel'];
	   $enfermeira_responsavel = $linha['enfermeira_responsavel'];
	   $medicamento = $linha['medicamento'];
	   $medicamento_2 = $linha['medicamento_2'];
	   $medicamento_3 = $linha['medicamento_3'];
	   $medicamento_4 = $linha['medicamento_4'];
	   $medicamento_5 = $linha['medicamento_5'];

	   echo "<br>";
	   echo "<strong>CPF do Paciente:</strong>".@$cpf_paciente;
	   echo "<br>";
	   echo "<strong>Nome do Paciente:</strong>".@$nome_paciente;
	   echo "<br>";
	   echo "<strong>Sobrenome do Paciente:</strong>".@$sobrenome_paciente;
	   echo "<br>";
	   echo "<strong>Data de Nascimento:</strong>".@$data_paciente;
	   echo "<br>";
	   echo "<strong>Endereço Completo:</strong>".@$endereco_completo;
	   echo "<br>";
	   echo "<strong>Médico Responsável:</strong>".@$medico_responsavel;
	   echo "<br>";
	   echo "<strong>Enfermeira Responsável:</strong>".@$enfermeira_responsavel;
	   echo "<br>";	
	   echo "<strong>Medicamento 1:</strong>".@$medicamento;
	   echo "<br>";		  
	   echo "<strong>Medicamento 2:</strong>".@$medicamento_2;
	   echo "<br>";	
	   echo "<strong>Medicamento 3:</strong>".@$medicamento_3;
	   echo "<br>";	
	   echo "<strong>Medicamento 4:</strong>".@$medicamento_4;
	   echo "<br>";		   
	   echo "<strong>Medicamento 5:</strong>".@$medicamento_5;
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