<?php
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "uploads";
// mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
// mysql_select_db($dbname) or die('database selection problem');

$host = "localhost";
$user = "root";
$password = "";
$database = "uploads";
$uconnection = mysqli_connect($host,$user,$password,$database) or die('cannot connect to the server');
?>