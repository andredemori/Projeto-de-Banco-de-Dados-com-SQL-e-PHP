<?php


  Init();
  	
	//------------------UPDATE-------------------
	
  
     //Valida alteração de inicio de Plantao
     function ValidatealteraInicioPlantao(){
        if(!!GetPost('send')){
					
			$sobrenomemedico = GetPost('sobrenomemedico');
			$newiplantao = GetPost('newiplantao');
  
			if(empty($sobrenomemedico))
                echo '<img src="../erro.png" alt="" /><strong>Informe o sobrenome do medico!</strong>'; 	
            else if(empty($newiplantao))
                echo '<img src="../erro.png" alt="" /><strong>Informe o novo inicio de plantao!</strong>'; 				 			  			  
              else {
			  
                 $sql = "UPDATE medicos SET iplantao = '$newiplantao' WHERE sobrenomemedico = '$sobrenomemedico'";
                 mysql_query($sql) or die(mysql_error());
				 echo '<strong>Inicio do plantao alterado com sucesso!</strong>';
				 			 
                }                 
        }
    } 

	
	
	 //Valida alteração de nicio de Plantao
     function ValidatealteraFimPlantao(){
        if(!!GetPost('send')){
					
			$sobrenomemedico = GetPost('sobrenomemedico');
			$newfplantao = GetPost('newfplantao');
  
			if(empty($sobrenomemedico))
                echo '<img src="../erro.png" alt="" /><strong>Informe o sobrenome do medico!</strong>'; 	
            else if(empty($newfplantao))
                echo '<img src="../erro.png" alt="" /><strong>Informe o novo fim de plantao!</strong>'; 				 			  			  
              else {
			  
                 $sql = "UPDATE medicos SET fplantao = '$newfplantao' WHERE sobrenomemedico = '$sobrenomemedico'";
                 mysql_query($sql) or die(mysql_error());
				 echo '<strong>Fim do plantao alterado com sucesso!</strong>';
				 			 
                }                 
        }
    } 
	
	
	//----------------DELETE----------------
	
	
	//Valida exclusão de médico
     function ExcluiMedico(){
        if(!!GetPost('send')){
					
			$sobrenomemedico = GetPost('sobrenomemedico');
  
			if(empty($sobrenomemedico))
                echo '<img src="../erro.png" alt="" /><strong>Informe o sobrenome do medico!</strong>'; 		 			  			  
             else{
			  
                 $sql = "DELETE FROM medicos WHERE sobrenomemedico = '$sobrenomemedico'";
                 mysql_query($sql) or die(mysql_error());
				 echo '<strong>Excluido com sucesso!</strong>';
				 			 
                }                 
        }
    } 
	
	
	
	//Valida exclusão de Enfermeira
     function ExcluiEnfermeira(){
        if(!!GetPost('send')){
					
			$codigo_enfermeira = GetPost('codigo_enfermeira');
  
			if(empty($codigo_enfermeira))
                echo '<img src="../erro.png" alt="" /><strong>Informe o codigo da(o) enfermeira(o)!</strong>'; 		 			  			  
             else{
			  
                 $sql = "DELETE FROM enfermeiras WHERE codigo_enfermeira = '$codigo_enfermeira'";
                 mysql_query($sql) or die(mysql_error());
				 echo '<strong>Excluido com sucesso!</strong>';
				 			 
                }                 
        }
    } 
	
	//Valida exclusão de paciente
     function ExcluiPaciente(){
        if(!!GetPost('send')){
					
			$cpf_paciente = GetPost('cpf_paciente');
  
			if(empty($cpf_paciente))
                echo '<img src="../erro.png" alt="" /><strong>Informe o CPF do paciente!</strong>'; 		 			  			  
             else{
			  
                 $sql = "DELETE FROM pacientes WHERE cpf_paciente = '$cpf_paciente'";
                 mysql_query($sql) or die(mysql_error());
				 echo '<strong>Excluido com sucesso!</strong>';
				 			 
                }                 
        }
    } 
	
	
	
	
		
	//Valida exclusão de Medicamento
     function ExcluiMedicamento(){
        if(!!GetPost('send')){
					
			$cod_medicamento = GetPost('cod_medicamento');
  
			if(empty($cod_medicamento))
                echo '<img src="../erro.png" alt="" /><strong>Informe o codigo do medicamento!</strong>'; 		 			  			  
             else{
			  
                 $sql = "DELETE FROM medicamentos WHERE cod_medicamento = '$cod_medicamento'";
                 mysql_query($sql) or die(mysql_error());
				 echo '<strong>Excluido com sucesso!</strong>';
				 			 
                }                 
        }
    } 
	
	
	
	
	 //Valida exclusão de Estagiário
     function ExcluiEstagiario(){
        if(!!GetPost('send')){
					
			$cpf_estagiario = GetPost('cpf_estagiario');
  
			if(empty($cpf_estagiario))
                echo '<img src="../erro.png" alt="" /><strong>Informe o CPF do estagiario!</strong>'; 		 			  			  
             else{
			  
                 $sql = "DELETE FROM estagiarios WHERE cpf_estagiario = '$cpf_estagiario'";
                 mysql_query($sql) or die(mysql_error());
				 echo '<strong>Excluido com sucesso!</strong>';
				 			 
                }                 
        }
    } 
	
	
	//---------------VALIDA FORMULULÁRIOS----------------
	
	
	//Valida Form de cadastro de Médicos
   function ValidateFormRegisterMedicos(){
       if(!!GetPost('send')){
          
          $nomemedico = GetPost('nomemedico');
		  $sobrenomemedico = GetPost('sobrenomemedico');
		  $mail = GetPost('mail');
		  $especialidade = GetPost('especialidade');
          $iplantao = GetPost('iplantao');
		  $fplantao = GetPost('fplantao');
     
          if(empty($nomemedico))
               echo '<img src="../erro.png" alt="" /><strong>Informe o nome do medico</strong>';
		   else if(empty($sobrenomemedico))
               echo '<img src="../erro.png" alt="" /><strong>Informe o sobrenome do medico!</strong>';
		   else if(empty($mail))
               echo '<img src="../erro.png" alt="" /><strong>Informe seu e-mail!</strong>';
		   else if(empty($especialidade))
               echo '<img src="../erro.png" alt="" /><strong>Informe a especialidade do medico!</strong>';
		   else if(empty($iplantao))
               echo '<img src="../erro.png" alt="" /><strong>Informe o inicio do plantao!</strong>';
		   else if(empty($fplantao))
               echo '<img src="../erro.png" alt="" /><strong>Informe o fim do plantao!</strong>';
          
          else {
 
              if(!CadastroExistsMedicos($mail))
                 echo '<img src="../erro.png" alt="" /><strong>Este e-mail ja foi cadastrado!</strong>';
				 
				 else{
             
                  $registerr = RegisterMedicos($nomemedico, $sobrenomemedico, $mail, $especialidade, $iplantao, $fplantao);

              if(!$registerr)
                  echo '<img src="../erro.png" alt="" /><strong>Desculpe, ocorreu um erro.</strong>';	  
				  else
				  
				  echo '<strong>Cadastro efetuado com sucesso!</strong>';
                                   
                }
            }

        }
	   
	}
	
	
	//Valida Form de cadastro de Clientes
   function ValidateFormRegisterEnfermeiras(){
       if(!!GetPost('send')){
          
          $nome_enfermeira = GetPost('nome_enfermeira');
		  $sobrenome_enfermeira = GetPost('sobrenome_enfermeira');
		  $codigo_enfermeira = GetPost('codigo_enfermeira');
		  $iplantao = GetPost('iplantao');
          $fplantao = GetPost('fplantao');
		  $medico_responsavel = GetPost('medico_responsavel');
     
          if(empty($nome_enfermeira))
               echo '<img src="../erro.png" alt="" /><strong>Informe o nome da(o) enfermeira(o)</strong>';
		   else if(empty($sobrenome_enfermeira))
               echo '<img src="../erro.png" alt="" /><strong>Informe o sobrenome da(o) enfermeira(o)!</strong>';
		   else if(empty($codigo_enfermeira))
               echo '<img src="../erro.png" alt="" /><strong>Informe o codigo da(o) enfermeira(o)!</strong>';
		   else if(empty($iplantao))
               echo '<img src="../erro.png" alt="" /><strong>Informe o inicio do plantao!</strong>';
		   else if(empty($fplantao))
               echo '<img src="../erro.png" alt="" /><strong>Informe o fim do plantao!</strong>';
		   else if(empty($medico_responsavel))
               echo '<img src="../erro.png" alt="" /><strong>Informe o médico responsável pela(o) enfermeira(o)!</strong>';
		    
          else {
             
                  $registerrenf = RegisterEnfermeiras($nome_enfermeira,$sobrenome_enfermeira,$codigo_enfermeira,$iplantao,$fplantao,$medico_responsavel);

              if(!$registerrenf)
                  echo '<img src="../erro.png" alt="" /><strong>Desculpe, ocorreu um erro.</strong>';	  
				  else
				  
				  echo '<strong>Cadastro efetuado com sucesso!</strong>';
                                   
                }
            }

        }
	
	
	//Valida Form de cadastro de Enfermeiras
   function ValidateFormRegisterPacientes(){
       if(!!GetPost('send')){
          
          $nome_paciente = GetPost('nome_paciente');
		  $sobrenome_paciente = GetPost('sobrenome_paciente');
		  $cpf_paciente = GetPost('cpf_paciente');
		  $data_paciente = GetPost('data_paciente');
          $endereco_completo = GetPost('endereco_completo');
		  $medico_responsavel = GetPost('medico_responsavel');
		  $enfermeira_responsavel = GetPost('enfermeira_responsavel');
		  $medicamento = GetPost('medicamento');
		  $medicamento_2 = GetPost('medicamento_2');
		  $medicamento_3 = GetPost('medicamento_3');
		  $medicamento_4 = GetPost('medicamento_4');
		  $medicamento_5 = GetPost('medicamento_5');

     
          if(empty($nome_paciente))
               echo '<img src="../erro.png" alt="" /><strong>Informe o nome do paciente</strong>';
		   else if(empty($sobrenome_paciente))
               echo '<img src="../erro.png" alt="" /><strong>Informe o sobrenome do paciente!</strong>';
		   else if(empty($cpf_paciente))
               echo '<img src="../erro.png" alt="" /><strong>Informe o CPF do paciente!</strong>';
		   else if(empty($data_paciente))
               echo '<img src="../erro.png" alt="" /><strong>Informe a data de nascimento do paciente!</strong>';
		   else if(empty($endereco_completo))
               echo '<img src="../erro.png" alt="" /><strong>Informe endereco completo do paciente!</strong>';
		   else if(empty($medico_responsavel))
               echo '<img src="../erro.png" alt="" /><strong>Informe o médico responsável pelo paciente!</strong>';
           else if(empty($enfermeira_responsavel))
               echo '<img src="../erro.png" alt="" /><strong>Informe a enfermeira responsável pelo paciente!</strong>';
		  
		  
          else {
             
                  $registerrpac = RegisterPacientes($nome_paciente,$sobrenome_paciente,$cpf_paciente,$data_paciente,$endereco_completo,$medico_responsavel,$enfermeira_responsavel,$medicamento,$medicamento_2,$medicamento_3,$medicamento_4,$medicamento_5);

              if(!$registerrpac)
                  echo '<img src="../erro.png" alt="" /><strong>Desculpe, ocorreu um erro.</strong>';	  
				  else
				  
				  echo '<strong>Cadastro efetuado com sucesso!</strong>';
                                   
                }
            }

        }
	
	
	
	
	//Valida Form de cadastro de Enfermeiras
   function ValidateFormRegisterEstagiario(){
       if(!!GetPost('send')){
          
          $nome_estagiario = GetPost('nome_estagiario');
		  $sobrenome_estagiario = GetPost('sobrenome_estagiario');
		  $cpf_estagiario = GetPost('cpf_estagiario');
		  $faculdade = GetPost('faculdade');
          $data_de_nascimento = GetPost('data_de_nascimento');
		  $medico_responsavel = GetPost('medico_responsavel');
     
          if(empty($nome_estagiario))
               echo '<img src="../erro.png" alt="" /><strong>Informe o nome do estagiario</strong>';
		   else if(empty($sobrenome_estagiario))
               echo '<img src="../erro.png" alt="" /><strong>Informe o sobrenome do estagiario!</strong>';
		   else if(empty($cpf_estagiario))
               echo '<img src="../erro.png" alt="" /><strong>Informe o CPF do estagiario!</strong>';
		   else if(empty($faculdade))
               echo '<img src="../erro.png" alt="" /><strong>Informe a faculdade que o estagiario estuda!</strong>';
		   else if(empty($data_de_nascimento))
               echo '<img src="../erro.png" alt="" /><strong>Informe a data de nascimento do estagiario!</strong>';
		   else if(empty($medico_responsavel))
               echo '<img src="../erro.png" alt="" /><strong>Informe o médico responsável pelo estagiario!</strong>';
		  
          else {
             
                  $registerrestag = RegisterEstagiario($nome_estagiario,$sobrenome_estagiario,$cpf_estagiario,$faculdade,$data_de_nascimento,$medico_responsavel);

              if(!$registerrestag)
                  echo '<img src="../erro.png" alt="" /><strong>Desculpe, ocorreu um erro.</strong>';	  
				  else
				  
				  echo '<strong>Cadastro efetuado com sucesso!</strong>';
                                   
                }
            }

        }
	
	
	
	
		
	
	//Valida Form de cadastro de Medicamentos
   function ValidateFormRegisterMedicamento(){
       if(!!GetPost('send')){
          
		  $id_medicamento = GetPost('id_medicamento');
          $cod_medicamento = GetPost('cod_medicamento');
		  $nome_medicamento = GetPost('nome_medicamento');
		  $dose = GetPost('dose');
     
			if(empty($id_medicamento))
               echo '<img src="../erro.png" alt="" /><strong>Informe o ID do medicamento</strong>';
          else if(empty($cod_medicamento))
               echo '<img src="../erro.png" alt="" /><strong>Informe o codigo do medicamento</strong>';
		   else if(empty($nome_medicamento))
               echo '<img src="../erro.png" alt="" /><strong>Informe o nome do medicamento!</strong>';
		   else if(empty($dose))
               echo '<img src="../erro.png" alt="" /><strong>Informe a dose do medicamento!</strong>';
		  
          else {
             
                  $registerrmedicamento = RegisterMedicamento($id_medicamento,$cod_medicamento,$nome_medicamento,$dose);

              if(!$registerrmedicamento)
                  echo '<img src="../erro.png" alt="" /><strong>Desculpe, ocorreu um erro.</strong>';	  
				  else
				  
				  echo '<strong>Cadastro efetuado com sucesso!</strong>';
                                   
                }
            }

        }
	

  //Inicia o sistema
  function Init( ){
     session_start();

     //Chama Config
     $configFile = $_SERVER['DOCUMENT_ROOT'].'/painel/system/config.php';
     
     if(!file_exists($configFile))
         die('Erro. Arquivo config.php não existe!');
      else
         require_once $configFile;

     //Chama Helpers
     if(!file_exists(FILE_HELPERS))
         die('Erro. Arquivo helpers.php não existe!');
     else
        require_once FILE_HELPERS;

     //Chama DataBase
     if(!file_exists(FILE_DATABASE))
        die('Erro. O arquivo database.php não existe!');
     else
         require_once FILE_DATABASE;

     connect();

    }