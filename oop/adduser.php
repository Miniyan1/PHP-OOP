<?php
if (isset($_POST["username"]) && ($_POST["password"]) && (!empty($_POST["username"])) && (!empty($_POST["password"]))) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $host = "localhost";
    $user = "root";
    $dpassword = "";
    $dbname = "anif dai";
    $connection = mysqli_connect($host, $user, $dpassword, $dbname);
    $sqli = "SELECT * from users";
    $query = mysqli_query($connection, $sqli);
    while ($dbdata = mysqli_fetch_assoc($query)) {
        $dbusername = $dbdata['username'];

    }
    if ($dbusername == $username) {
        $data = "username already exists";
    }else{
        $sql = 'INSERT INTO `users`(`username`,`password`)VALUES("' . $username . '","' . $password . '")';
        $result = mysqli_query($connection, $sql);
        if ($result) {

            $data = "User creation successful";
        } else {
            $data = "Sorry something went wrong";
        }

    }

}
?>
<html>
<head>
    <style>
        .form-group {
            width: 45%;
            margin: auto;
        }

        #data {
            color: green;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">anif.com.np / user creation panel</a>
</nav>
<br><br>
<div class="container">
    <div class="row">
        <form action="adduser.php" method="POST">

            <div class="form-group">
                <label>Username</label>
                <input type="TEXT" class="form-control" name="username" placeholder="" value="">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="" value="">
            </div>


            <div class="form-group">
                <button class="btn btn-primary">Create</button>
                <div class="content-inline" id="data"><?php echo $data; ?></div>
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