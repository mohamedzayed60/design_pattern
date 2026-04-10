<?php


class PaymentService{
    public function pay($type){
        if( $type =="paypal"){
            echo "Payment done with paypal!";

        }else if( $type =="stripe"){
            echo "Payment done with stripe!";
        }
    }
}


///
interface PaymentMethod{
     public function pay();
}

class PaypalPayment  implements PaymentMethod{

    public function pay(){
        echo "Payment done with paypal!";
    }

}


class StripePayment  implements PaymentMethod{

    public function pay(){
        echo "Payment done with stripe!";
    }

}

class VFCashPayment  implements PaymentMethod{
    public function pay(){
        echo "Payment done with VF Cash!";
    }

}
class CIBPayment implements PaymentMethod{
    public function pay(){
        echo "Payment done with CIB!";
    }

}