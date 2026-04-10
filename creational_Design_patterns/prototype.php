<?php

/**
 * 
 * user1 = new User("John", "Doe", 30);
 * user2 = user1.clone();
 * user2 = new User("John", "Doe", 30);
 */

class UserClass{
    public $name ;
    public $email;

    public function __construct($name, $email){

    echo "User created successfully!";
        $this->name = $name;
        $this->email = $email;
    }

    public function __clone(){
        echo "User cloned successfully!";
    }


}


$user1 = new UserClass("mohamed","m@g.com");
$user2 = clone $user1;