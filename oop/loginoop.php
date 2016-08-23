<?php
include('photouplod.php');

class User
{
    public $firstname;
    public $lastname;
    public $email;
    public $address;
    public $phone;


    function setname($name)
    {
        $this->firstname = $name;
    }

    function getname()
    {
        return $this->firstname;
    }

    function setlastname($lastname)
    {
        $this->lastname = $lastname;
    }

    function getlastname()
    {
        return " " . $this->lastname;
    }

    function setemail($email)
    {
        $this->email = $email;
    }

    function getemail()
    {
        return $this->email;
    }

    function setaddress($address)
    {
        $this->address = $address;
    }

    function getaddress()
    {
        return $this->address;
    }

    function setphone($phone)
    {
        $this->phone = $phone;
    }

    function getphone()
    {
        return $this->phone;
    }

    function details()
    {
        return $this->getname() . " " . $this->getlastname() . $this->getemail() . $this->getaddress() . $this->getphone();
    }

    function database()
    {

        $sql = 'INSERT INTO `users`(`first_name`, `last_name`,`Email`,`Address`, `phone`)VALUES
("' . $this->getname() . '","' . $this->getlastname() . '","' . $this->getemail() . '","' . $this->getaddress() . '","' . $this->getphone() . '")';

        //die( $sql );
        $result = mysqli_query(dbcon(), $sql);
        if ($result) {
            return "data inserted";
        }
        return "Sorry Something went Wrong";
    }

}

$user = new User();
$user->setname($_POST["firstname"]);
$user->setlastname($_POST["lastname"]);
$user->setemail($_POST["email"]);
$user->setaddress($_POST["address"]);
$user->setphone($_POST["phone"]);
$user->getname();
$user->getlastname();
$user->details();

echo $user->database();
?>

<html>
<head>

</head>
<body>
<div class="container">
    <div class="row">
        <form action="loginoop.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">FirstName</label>
                <input type="text" class="form-control" name="firstname" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">LastName</label>
                <input type="TEXT" class="form-control" name="lastname" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="TEXT" class="form-control" name="email" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" name="address" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Gender</label>
                <Select class="form-group" name="gender">
                    <option>Male</option>
                    <option>Female</option>
                </Select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Marital Status</label>
                <Select class="form-group" name="status">
                    <option>Married</option>
                    <option>Unmarried</option>
                </Select>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<div class="card" style="width:50%; margin:auto; text-align: center;"><?php echo $user->details(); ?></div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css"
      integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"
        integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD"
        crossorigin="anonymous"></script>
</body>
</html>


