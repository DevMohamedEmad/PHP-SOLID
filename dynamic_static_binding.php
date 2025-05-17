<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Dynamic  binding
class Animal {
    public $name;
    public function getName() {
        return 'Animal: ' . $this->name;
    }

    public function call() {
        echo $this->getName();
    }
}

class Dog extends Animal {
    public function getName() {
        return 'Dog: ' . $this->name;
    }
}

$dog = new Dog();
$dog->name = 'Rex';
// $dog->call(); // Output: Dog: Rex

// static Bindings
class Base {
    public static function who() {
        echo "Base class\n";
    }

    public static function call() {
        self::who(); 
    }
}

class Sub extends Base {
    public static function who() {
        echo "Sub class\n";
    }
}

// Sub::call();  // Output: Base class

// late static binding
class A {

    public static function call() {
        static::who();
    }
    public static function who() {
        echo "A class\n";
    }
}

class B extends A {
    public static function who() {
        echo "B class\n";
    }

}

B::call(); // Output: B class

