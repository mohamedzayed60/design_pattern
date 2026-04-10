<?php


class OldPayment{
   public function makePayment(){
        echo "Payment done!";
    }
}


interface PayemntInterface{
    public function pay();
}

class PayemntAdapter implements PayemntInterface{

    private $oldPayment;
    public function __construct(OldPayment $oldPayment)
    {
        $this->oldPayment = $oldPayment;
    }

    public function pay(){
        $this->oldPayment->makePayment();
    }

}


$old = new OldPayment();
$adapter = new PayemntAdapter($old);
echo $adapter->pay();