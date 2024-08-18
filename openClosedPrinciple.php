<?php

/* Definition: Software entities (classes, modules, functions, etc.) 
should be open for extension but closed for modification.  */


// bad example before using open closed principle
class Rectangle {   

    protected $width;
    protected $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(){
        return $this->width * $this->height;
    }
}

class circle{
    protected $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function getArea(){          
        return pi() * $this->radius * $this->radius;
    }

}

class AreaCalculator{
    public function calculate($shape){
        if ($shape instanceof Rectangle) {
            return $shape->getArea(5, 10);
        } elseif ($shape instanceof Circle) {
            return $shape->getArea(7);
        }
    }
}


// good example using open closed principle
interface Shape {
    public function getArea();
} 
 
class Rectangle2 implements Shape {
    protected $width;
    protected $height;  
 
    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
 
    public function getArea(){
        return $this->width * $this->height;
    }
}

class Circle2 implements Shape {
    protected $radius;
 
    public function __construct($radius){
        $this->radius = $radius;
    }
 
    public function getArea(){
        return pi() * $this->radius * $this->radius;
    }
}   

class AreaCalculator2 {
    public function calculate(Shape $shape) {
        return $shape->getArea();
    }
}