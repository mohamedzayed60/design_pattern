<?php



/// 
///

class BirdClass{
    public function fly(){
        echo "Bird is flying!";
    }

}
class Ostrih extends BirdClass{
    public function fly(){
        echo "Ostrih cannot fly!";
    }
}


interface BirdInterface{
    public function eat();
    public function move();
}
interface FlyableInterface{
    public function fly();
}
class Sparrow implements BirdInterface ,FlyableInterface{

    public function eat(){
        
    }

    public function fly(){
        
    }
    public function move(){

    }
} 


class OstrihClass implements BirdInterface {
    public function eat(){

    }
    public function move(){

    }

}


/////


class Payment {
    public function Pay(){

    }

}


class CashPayemtn extends Payment{
    public function Pay(){
        echo "Payment done with cash!";
    }
}


interface PaymentMethodInterface{
    public function Pay();
}

class OnlinePayment implements PaymentMethodInterface{
    public function Pay(){
        echo "Payment done online!";
    }
}

class CashPayment {
    public function PayOnDelivery(){
        echo "Payment done with cash!";
    }
}