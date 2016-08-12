<?php
class User{
    public $firstName;
    public $lastName;
    public $gender;
    public $address;

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
        function setGender($gender){
            $this->gender = $gender;
        }
            function getGender(){
                if($this->gender == "Male"){
                    return "Mr." . $this->firstName;
                }
                return "Ms." . $this->firstName;
            }

//        function gender(){
//            if($this->gender == 'Male'){
//                return "Mr." . $this->firstName;
//            }
//        }
    function welcome(){

        if( $this->firstName =="Miniyan" ){
            return " welcome "."  " . $this->firstName ." You are from " . $this->address;
        }
        return $this->firstName;

    }
    function setaddress($address){
        $this->address = $address;
    }
    function getaddress(){
        return $this->address;
    }
}

$user = new User();
$user->setFirstName( "Miniyan");
$user->setGender("Male");
$user->setaddress($_POST["address"]);
echo $user->getGender();
echo $user->welcome();

$user1 = new User();
$user1->setFirstName( "<BR> rana");
echo $user1->welcome();

$user2 = new User();
$user2->setFirstName( "<BR> ram");
echo $user2->welcome();

$user3 = new User();
$user3->setFirstName( "<BR> shyam");
echo $user3->welcome();

?>
<html>
<head>

</head>
<body>
<div class="container">
    <form action="index.php" class="form" method="POST">
        Address:<input type="text" class="form-group" name="address">
        <button class="btn" btn-normal>Save</button>
    </form>
</div>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

