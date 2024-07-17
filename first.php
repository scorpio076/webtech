<?php
class Car{
    public $color;
    public $male;

    public function showColor(){
        echo$this.color();
    }
    public function showMale(){
        echo$this.male();
    }
}
    $car= new Car();
    $car->color="red";
    $car->male="toyota";
    $car->showColor();
    $car->showMale();


?>