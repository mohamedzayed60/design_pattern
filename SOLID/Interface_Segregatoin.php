<?php
interface Worker{
    public function work();
    public function eat();
}

class Humen implements Worker{
    public function work(){

    }
    public function eat(){

    }

}

class Robot implements Worker{
    public function work(){

    }
    public function eat(){

    }

}

/////
interface Workable{
    public function work();
}

interface Eatable{
    public function eat();
}

class HumenClass implements Workable,Eatable{
    public function work(){

    }
    public function eat(){

    }

}

class RonotClass implements Workable{
    public function work(){

    }

}