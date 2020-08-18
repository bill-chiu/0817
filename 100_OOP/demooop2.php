<?php
class CTest
{
    public $Price = 10;
    private $dataBag;

    public function __set($key, $value)
    {
        echo "__set is running.<br>$key ,$value <br>"; 
        $this->dataBag[$key]=$value;
    }

    public function __get($key)
    {
        echo "__get be callrd<br>";
        return $this->dataBag[$key];
    }
}

$obj=new CTest();
echo $obj->Price,"<br>";
$obj->Location="tw";
echo $obj->Location,"<br>";