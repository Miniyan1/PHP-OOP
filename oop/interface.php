<?php
class student{

  function  fee(){

      return 10;
  }
}
class pay{
    private $amount;
    private  $haspaid = false;
    private $student;
    function __construct( $student )
    {
        $this->student = $student;
    }

    function pay(){
        $this->amount = $this->student->pay();
        $this->haspaid = true;
    }

    function haspaid(){
        return $this->haspaid;
    }
    function howmuchpaid(){
        return $this->amount;
    }
}

$student = new student();

$pay = new pay();
 var_dump($pay->haspaid());
 var_dump($pay->howmuchpaid());
