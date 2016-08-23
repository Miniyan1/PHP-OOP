<html>
<head>
    <style>
        .form-group{
            width: 45%;
            margin: auto;
        }
    </style>
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "anif dai";
$connection = mysqli_connect($host,$user,$password,$database);
$id = $_GET['id'];
$query = "Select * from users where id = '$id'";
$result = mysqli_query($connection,$query);
while($data = mysqli_fetch_assoc($result)){

   $fullname = $data["full_name"];
    $username = $data['username'];
    $address = $data['address'];
    $phone = $data['phone'];
    $email = $data['Email'];
    $upassword = $data['password'];
}




?>
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">anif.com.np / user update panel</a>
</nav>
<br><br>
<div class="container">
    <div class="row">
        <form action="update.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" name="fullname" placeholder="" value="<?php echo $fullname; ?>">
            </div>
            <div class="form-group">
                <label >Username</label>
                <input type="TEXT" class="form-control" name="username" placeholder="" value="<?php echo $username; ?>">
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control" name="password" placeholder="" value="<?php echo $upassword; ?>">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" name="email" placeholder="" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" name="address" placeholder="" value="<?php echo $address; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="" value="<?php echo $phone; ?>">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Update</button>
                </div>
        </form>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<script src="tether.min.js"></script>
</body>
</html>

