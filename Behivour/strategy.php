<?php

/**
 * 
 *  
 */


interface PaymentStrategy{
    public function pay($amount);
}

class CIBPayment implements PaymentStrategy{
    public function pay($amount){
        echo "Payment of $amount done with CIB!";
    }
}
class NBECPayment implements PaymentStrategy{
    public function pay($amount){
        echo "Payment of $amount done with NBEC!";
    }
}

class VFCashPayment implements PaymentStrategy{
    public function pay($amount){
        echo "Payment of $amount done with VF Cash!";
    }
}

class QNBPayment implements PaymentStrategy{
    public function pay($amount){
        echo "Payment of $amount done with QNB!";
    }
}


class PaymentService{
    private $strategy;
    public function __construct(PaymentStrategy $strategy){
        $this->strategy = $strategy;
    }
    public function pay($amount){
        $this->strategy->pay($amount);
    }

}


$payemnt = new PaymentService(new CIBPayment());
$payemnt->pay(100);
$payment2 = new PaymentService(new NBECPayment());
$payment2->pay(200);
$payment3 = new PaymentService(new VFCashPayment());
$payment3->pay(300);
$payment4 = new PaymentService(new QNBPayment());
$payment4->pay(400);
