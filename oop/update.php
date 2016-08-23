<?php
include ('Sprofile.php');
$host = "localhost";
$user = "root";
$password = "";
$database = "anif dai";
$connection = mysqli_connect($host,$user,$password,$database);
$iquery = "Select * from users ";
$iresult = mysqli_query($connection,$iquery);
 while($data = mysqli_fetch_assoc($iresult)) {
 $data['id'];

}

$newusername = $_POST['username'];
 $newfullname = $_POST['fullname'];
 $newaddress = $_POST['address'];
 $newpassword = $_POST['password'];
 $newemail = $_POST['email'];
 $newphone = $_POST['phone'];
$uquery = "UPDATE `users` SET `username`='$newusername',`full_name`='$newfullname',`address`='$newaddress',`password`='$newpassword',
	`Email`='$newemail',`phone`='$newphone' where id ='$id'";
    
$uresult = mysqli_query($connection,$uquery);
if($uresult==true){
	header('location:Sprofile.php');
}else{
	echo"Something went wrong";
}


?>

