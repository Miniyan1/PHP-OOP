<?php
if(isset($_POST["email"]) && ($_POST["password"]) && (!empty($_POST["email"])) && (!empty($_POST["email"]))) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $host = "localhost";
    $user = "root";
    $dpassword = "";
    $dbname = "learning";
    $connection = mysqli_connect($host,$user,$dpassword, $dbname);
    $sql = "SELECT * from users WHERE Email=".$email." AND password=".$password." LIMIT 1";
    $result = mysqli_query($connection,$sql);


    if( empty( $result ) ) {
//        if( mysqli_num_rows($result)!=1){
            $result ="<p>Invalid username/password combination</p>";
//        }
    } else {
        $result="login sucessful";
    }


//    if (!$result->num_rows == 1) {
//        $result ="<p>Invalid username/password combination</p>";
//    } else {
//    $result="login sucessful";
//}
}


?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body bgcolor="#95a5a6">
<nav class="navbar navbar-light bg-faded">
    <a class="navbar-brand" href="#" id="nav">LOGO</a>
</nav>
<br><br>
<div class="container" id="form">
<form class="form-horizontal" action="home.php" method="POST">
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
</div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
            <label>
                <input type="checkbox"> Remember me
            </label>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
</div>
</form>
</div>
<div class="card"><?php echo $result; ?></div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/cssbootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>

</body>
</html>
