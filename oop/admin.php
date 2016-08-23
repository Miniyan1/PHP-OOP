<?php
if(isset($_POST["username"])&&($_POST["password"]) && (!empty($_POST["username"])) && (!empty($_POST["password"]))) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $host = "localhost";
    $user = "root";
    $dpassword = "";
    $dbname = "anif dai";
    $connection = mysqli_connect($host, $user, $dpassword, $dbname);

    $sql = "SELECT * from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
    $result = mysqli_query($connection, $sql);
    if (!$result->num_rows == 1) {
        $data = "<p> * Incorrect username/password</p>";
    } elseif($username == "anif") {
        header('location:Sprofile.php');
    } else {
        header('location:profile.php');
    }
}

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body bgcolor="#95a5a6">
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">anif.com.np / user login</a>
</nav>
<br><br>
<form action="admin.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control"  placeholder="Username" name="username">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Sign In</button>
        <div class="content-inline" id="data"><?php echo $data; ?></div>
    </div>

</form>

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script src="bootstrap.min.js"></script>
<script src=tether.min.js""></script>
</body>
</html>
