<?php


class  Transfer {

    public $name1 = "First";
    public $name2 = "Second";   
    public $message1 = "message A";
    public $message2 = "message B";
    public $transfer;

     function getTransfer () {
        return $this->transfer;
    }

    
    function setTransfer ($transfer){
        $this->transfer = $transfer;
        return $this->transfer;
    }
   
}

class First  extends  Transfer {

    function getClassname (){
        echo "<h1> Ты какой по счету?".$this->name1."</h1>";
    }

    function getLetter (){
        echo "<h1>".$this->message1."</h1>";
    }

    function getCalculation () {
        echo "<h1>".$this->transfer."</h1>";
    }

}

class Second extends Transfer  {

    function getClassname (){
        echo "<h1> Ты какой по счету?".$this->name2."</h1>";
    }

    function getLetter (){
        echo "<h1>".$this->message2."</h1>";
    }
    function getCalculation () {
        echo "<h1>".$this->transfer."</h1>";
    }
}

$obj1 = new First ();
$obj1->getClassname();
$obj1->getLetter ();
$obj1->setTransfer("Six");
$obj1->getCalculation();

$obj2 = new Second ();
$obj2->getClassname();
$obj2->getLetter();
$obj2->setTransfer("ninety-seventy-one");
$obj2->getCalculation();

echo "<pre>";
print_r ($obj1);
echo "</pre>";

echo "<pre>";
print_r ($obj2);
echo "</pre>";
?>