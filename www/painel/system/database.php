<?php


//--------------------INSERT------------------------
	 
     function RegisterMedicos($nomemedico,$sobrenomemedico,$mail,$especialidade,$iplantao,$fplantao){
 
         $query = "INSERT INTO medicos (nomemedico, sobrenomemedico, mail, especialidade, iplantao, fplantao)";
         $query .= "VALUES ('$nomemedico', '$sobrenomemedico', '$mail', '$especialidade', '$iplantao', '$fplantao')";

         return mysql_query($query) or die(mysql_error());
        
		}
		
	 function RegisterPacientes($nome_paciente,$sobrenome_paciente,$cpf_paciente,$data_paciente,$endereco_completo,$medico_responsavel,$enfermeira_responsavel,$medicamento,$medicamento_2,$medicamento_3,$medicamento_4,$medicamento_5){
 
         $query = "INSERT INTO pacientes (nome_paciente, sobrenome_paciente, cpf_paciente, data_paciente, endereco_completo, medico_responsavel, enfermeira_responsavel, medicamento, medicamento_2, medicamento_3, medicamento_4, medicamento_5)";
         $query .= "VALUES ('$nome_paciente', '$sobrenome_paciente', '$cpf_paciente', '$data_paciente', '$endereco_completo', '$medico_responsavel', '$enfermeira_responsavel', '$medicamento', '$medicamento_2', '$medicamento_3', '$medicamento_4', '$medicamento_5')";

         return mysql_query($query) or die(mysql_error());
        
		}
		
	function RegisterEnfermeiras($nome_enfermeira,$sobrenome_enfermeira,$codigo_enfermeira,$iplantao,$fplantao,$medico_responsavel){
 
         $query = "INSERT INTO enfermeiras (nome_enfermeira, sobrenome_enfermeira, codigo_enfermeira, iplantao, fplantao, medico_responsavel)";
         $query .= "VALUES ('$nome_enfermeira', '$sobrenome_enfermeira', '$codigo_enfermeira', '$iplantao', '$fplantao', '$medico_responsavel')";

         return mysql_query($query) or die(mysql_error());
        
		}
		
	function RegisterEstagiario($nome_estagiario,$sobrenome_estagiario,$cpf_estagiario,$faculdade,$data_de_nascimento,$medico_responsavel){
 
         $query = "INSERT INTO estagiarios (nome_estagiario, sobrenome_estagiario, cpf_estagiario, faculdade, data_de_nascimento, medico_responsavel)";
         $query .= "VALUES ('$nome_estagiario', '$sobrenome_estagiario', '$cpf_estagiario', '$faculdade', '$data_de_nascimento', '$medico_responsavel')";

         return mysql_query($query) or die(mysql_error());
        
		}
		
		
	function RegisterMedicamento($id_medicamento,$cod_medicamento,$nome_medicamento,$dose){
 
         $query = "INSERT INTO medicamentos (id_medicamento,cod_medicamento, nome_medicamento, dose)";
         $query .= "VALUES ('$id_medicamento', '$cod_medicamento', '$nome_medicamento', '$dose')";

         return mysql_query($query) or die(mysql_error());
        
		}
		
//---------------------------------------------------------------------------------------------------

 //Verifica se existe E-mail
   function CadastroExistsMedicos($mail){
       $query = "SELECT mail FROM medicos WHERE mail = '$mail'";
       $result = mysql_query($query) or die(mysql_error());

       if(mysql_num_rows($result) <= 0)    
           return true;
       else
           return false;
    }

  //Conexão com Banco de Dados
  function Connect(){
   
		$conn = @mysql_connect(HOSTNAME, USERNAME, PASSWORD);

		if(!$conn)
			 die(mysql_error());
		else{
			mysql_select_db(DATABASE, $conn) or die(mysql_error());

			mysql_query("SET NAMES 'utf-8'");
			mysql_query("SET character_set_connection=utf8");
			mysql_query("SET character_set_client=utf8");
			mysql_query("SET character_set_results=utf8");      
		}

    }
