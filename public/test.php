<?php
class Fruit{

    public $name = 'Banana';
    private $color = 'Yellow';
    protected $weight = 2;

   

}
class Food extends Fruit{

    
}
class Meal extends Food{
    function display(){
        echo $this->name;
        echo $this->color;
        echo $this->weight;
    }
}
$veg = new Meal();
$veg->display();


