<?php
function dbcon(){
	static $connection;
	$host="localhost";
	$name="root";
	$password="";
	$database="learning";
	$connection = mysqli_connect($host,$name,$password,$database);
 //if($connection ===TRUE){
 	//echo"done";
 	return $connection;
 }
    

	
//}



