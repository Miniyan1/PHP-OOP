<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "uploads";
$connection = mysqli_connect($host,$user,$password,$database);
$id = $_GET['id'];
$query = "delete from tbl_uploads where id =$id";
$data = mysqli_query($connection,$query);
if($data = true){
    header("location:Sprofile.php");
}else{
    echo"not deeted";

}

