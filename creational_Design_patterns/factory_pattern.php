<?php

interface PaymentInterface{
    public  function pay();
}

class PaypalPayment implements PaymentInterface{
    public function pay(){
        echo "Payment done with paypal!";
    }
}

class StripePayment implements PaymentInterface{
    public function pay(){
        echo "Payment done with stripe!";
    }
}

class PaymentFactory{
    
    public static function createPayment($type){
        switch($type){
            case 'paypal':
                return new PaypalPayment();
            case 'stripe':
                return new StripePayment();
            default:
                throw new InvalidArgumentException("Invalid payment type");
        }
    }

}

$payemnt = PaymentFactory::createPayment('paypal');
$payemnt->pay();