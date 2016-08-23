<?php
class users{
    protected $firstName;
    protected $lastName;
    protected $address;
    protected $phone;
    protected $db;
    const db_name ="learning";

     function __construct()
     {
         $this->db = mysqli_connect("localhost",'root','',self::db_name);
     }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


    function save(){
    $query = "insert into users set 
first_name ='".$this->firstName."', last_name ='".$this->lastName."',address='".$this->address."',phone ='".$this->phone."'";
        $sql = mysqli_query($this->db,$query);


    }

}