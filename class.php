<?php
#Creating Classes, properties,methods--oop
class Car{
    private $color = 'red' ;
    private $availableColor =['red', 'white', 'pink'];
    public $weight;
    private $year;

    function setColor($color){
       if(in_array($color, $this -> availableColor) ) {
        $this ->color = $color;
       }
    }
   function getColor(){
       return $this -> color;
    }
}
$ashrafisCar = new Car();//instances

// $ashrafisCar -> color = "pink";//set or assign
$ashrafisCar -> setColor('white');// set
echo $ashrafisCar -> getColor();
echo PHP_EOL;
// echo $ashrafisCar -> color;
