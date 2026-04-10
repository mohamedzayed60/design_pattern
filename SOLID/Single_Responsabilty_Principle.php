<?php

//SOLID Principles in PHP

echo "Hello, World!";


//Before applying Single responsabilty principles
class UserService {

    public function createUser(){
        echo "User created successfully!";
    }
    public function sendEmail(){
        echo "Email sent successfully!";
    }
    public function log(){
        echo "UserService log function!";
    }

}


class UserServiceClass{
    public function createUser(){
        echo "User created successfully!";
    }
}


class EmailServiceClass{
    public function sendEmail(){
        echo "Email sent successfully!";
    }

}

class LoggerServiceClass{
    public function log(){
        echo "UserService log function!";
    }
}
