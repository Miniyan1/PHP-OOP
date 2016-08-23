<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "anif dai";
$connection = mysqli_connect($host,$user,$password,$database);
$query = "Select * from users ";
$result = mysqli_query($connection,$query);
while($data = mysqli_fetch_assoc($result)) {
    $username = $data['username'];
}
?>
<html>
<head>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">anif.com.np / user profile</a>
</nav>
<br><br>
<div class="container"><h3>Welcome you are under your profile page </h3></div>


<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script src="bootstrap.min.js"></script>
<script src="tether.min.js"></script>
</body>
</html>
