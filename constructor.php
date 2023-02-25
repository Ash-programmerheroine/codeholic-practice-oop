<?php
//Constructor function---for each object the constructor function is excuted
//It also takes argumenttsn
class Car
{
   private $color = 'red';
   private $weight = 2000;
   public function __construct($color, $weight){
    $this->color = $color;
    $this->weight = $weight;
   }
   public function getColor(){
    return $this -> color;
   }
}
$myCar = new Car('red', 2000);
$myCar2 = new Car('green', 2500);
echo $myCar ->getColor().PHP_EOL;
echo $myCar2 ->getColor();

