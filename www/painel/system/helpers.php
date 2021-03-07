<?php


   // Recuperar POST
   function GetPost($key = null){
       if($key === null)
           return $_POST;
       else 
           return (isset($_POST[$key])) ? ClearString($_POST[$key]) : false;
       
    }   

   //Redireciona
   function Redirect($url){
       header("Location: ".$url);
	   die();
	   
	}

   //Limpa String
   function ClearString($str){
      return mysql_real_escape_string(strip_tags(trim($str)));
    }