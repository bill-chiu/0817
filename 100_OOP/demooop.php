<?php


class Animal1{

public function __construct($weightValule=10)
{
    $this->Weight=$weightValule;
    echo "Object create.<br>";
}
public function __destruct()
{  
    echo "Object destroy.<br>";
}

    public $Weight = 100 ;
    function makeNoise(){
        echo "Animal:...<br>";
    }    
}
// echo "111<br>";
// $obj =new Animal1();
// echo "222<br>";
// $obj->makeNoise();

// $obj->Weight=150;
// echo $obj->Weight."<br>";

echo ".....<br>";
$obj =new Animal1();
echo ".....<br>";
$obj2=$obj;
echo ".....<br>";
$obj=null;
echo ".....<br>";
$obj2=null;
echo ".....<br>";