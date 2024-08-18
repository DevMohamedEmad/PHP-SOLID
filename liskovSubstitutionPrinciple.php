<?php

// Bad example: A subclass that violates the LSP

class Bird {
    public function fly() {
        return "Flying";
    }
}

class Penguin extends Bird {
    public function fly() {
        throw new Exception("Penguins can't fly!");
    }
}

// Good example: Properly using the LSP
interface Bird2 {
    public function move();
}

class FlyingBird implements Bird {
    public function move() {
        return "Flying";
    }
}

class Penguin2 implements Bird {
    public function move() {
        return "Swimming";
    }
}