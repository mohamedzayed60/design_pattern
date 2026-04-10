<?php



///$obj = new Object();

/*

$user = new User( ,  , , , ,  , );

*/ 

class User{
    public $name;
    public $email;
    public $phone;
    public $address;

}

class UserBuilder{
    private $user ;
    public function __construct(){
        $this->user = new User();
    }
    public function setName($name){
        $this->user->name = $name;
        return $this;
    }
    public function setEmail($email){
        $this->user->email = $email;
        return $this;
    }
    public function setPhone($phone){
        $this->user->phone = $phone;
        return $this;
    }
    public function setAddress($address){
        $this->user->address = $address;
        return $this;
    }
    public function build(){
        return $this->user;
    }

}
 

$user = (new UserBuilder())
->setName("John Doe")
->setEmail("m@g.com)")
->setPhone("1234567890")
->setAddress("123 Main St")
->build();

