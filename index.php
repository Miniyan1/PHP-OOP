<?php
class User{
    public $firstName;
    public $lastName;
    public $gender;
    public $address;
    public $status;

    function __construct()
    {

    }
    function setFirstName( $name )
   {
//        if($firstName = "Miniyan"){
//            return "Done";
//        }
    $this->firstName =ucwords($name);
    }

    function getFirstName(){
        return $this->firstName;
    }
        function setLastName($lastname){
            $this->lastName =$lastname;
        }
            function getLastName(){
                return $this->lastName;
            }
        function setGender($gender){
            $this->gender = $gender;
        }

        // function  getGender()
        // {
        //     if($this->gender=="Female" && $this->status=="Married")
        //     {
        //         return "Mrs. " . $this->firstName;
        //     }
        //     if($this->gender=="Female" && $this->status=="Unmarried")
        //     {
        //         // return "Ms. " . $this->firstName;
        //         return "Mr. " . $this->firstName;
        //     }
        //         return "Ms. " . $this->firstName;
        //         // return "Mr. " . $this->firstName;

        // }
       function getGender()
       {
//             if($gender=="Female" && $status=="Married"){
//     echo"You are female Married";
// }elseif($gender=="Female" && $status=="Unmarried"){
//     echo "You are female Unmarried";
// }else{
//     echo "You are male";
// }
           if ($this->gender=="Female" && $this->status=="Married") {
               return "Mrs. " . $this->firstName;
           } elseif ($this->gender=="Female" && $this->status=="Unmarried") {
               return "Ms. " . $this->firstName;
           } else {
               return "Mr. " . $this->firstName;
           }
       }
          
    function welcome(){
        if($this->firstName =="Miniyan") {
            return " Welcome " . "  " . $this->firstName . ' ' . $this->lastName . "." . "You are from " . $this->address;
        }
        return  "  " . $this->firstName . ' ' . $this->lastName . "." . "You are from " . $this->address;

    }
    function setaddress($address){
        if($address ==""){
            echo "enter address";
        }
        $this->address = $address;
    }
    function getaddress(){
        return $this->address;
    }
    function setstatus($status){
        $this->status = $status;
    }
    function getstatus(){
        return $this->status;
    }
}

$user = new User();
$user->setFirstName($_POST["firstname"]);
$user->setLastName($_POST["lastname"]);
$user->setGender($_POST["gender"]);
$user->setaddress($_POST["address"]);
$user->setstatus($_POST["status"]);
echo $user->getGender();
$user->welcome();

$user1 = new User();
$user1->setFirstName( "<BR> rana");
$user1->welcome();

$user2 = new User();
$user2->setFirstName( "<BR> ram");
$user2->welcome();

$user3 = new User();
$user3->setFirstName( "<BR> shyam");
$user3->welcome();

?>
<html>
<head>

</head>
<body>
<form action="index.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">FirstName</label>
        <input type="text" class="form-control" name="firstname" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">LastName</label>
        <input type="TEXT" class="form-control" name="lastname" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" class="form-control" name="address" placeholder="">
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

<div class="card" style="width:50%; margin:auto; text-align: center;" ><?php echo $user->welcome(); ?></div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
</body>
</html>

