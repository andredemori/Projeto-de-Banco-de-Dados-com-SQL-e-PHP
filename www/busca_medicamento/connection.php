<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "hospital";
@$connection = mysql_connect($host, $user, $pass);
mysql_select_db($database) or die (mysql_error());
?>