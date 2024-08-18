<?php
// Bad example: A large interface with unrelated methods

interface Worker
{
    public function work();

    public function eat();
}

class HumanWorker implements Worker
{
    public function work()
    {
        return "Working";
    }

    public function eat()
    {
        return "Eating";
    }
}

class RobotWorker implements Worker
{
    public function work()
    {
        return "Working";
    }

    public function eat()
    {
        // do nothing
    }
}

// Good example: Segregating interfaces
interface Workable {
    public function work();
}

interface Eatable {
    public function eat();
}

class HumanWorker2 implements Workable, Eatable {
    public function work() {
        return "Working";
    }

    public function eat() {
        return "Eating";
    }
}

class RobotWorker2 implements Workable {
    public function work() {
        return "Working";
    }
}