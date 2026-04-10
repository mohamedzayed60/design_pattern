<?php



class MySQlDatabase{
    public function connect(){
        echo "Connected to MySQL database!";
    }

}

class UserService{
    private $database ;
    public function __construct(MySQlDatabase $database){
        $this->database = $database;
    }
}


interface DatabaseInterface{
    public function connect();
}

class MysqlDatabaseClass implements DatabaseInterface{
    public function connect(){
        echo "Connected to MySQL database!";
    }

}

class SQLServcerDatabaseClass implements DatabaseInterface{
    public function connect(){
        echo "Connected to SQLServcer database!";
    }

}


class MongoDBClass implements DatabaseInterface{
    public function connect(){
        echo "Connected to MongoDB database!";
    }

}


class PostgresDatabaseClass implements DatabaseInterface{
    public function connect(){
        echo "Connected to Postgres database!";
    }

}

class UserServiceClass {
    private $database ;
    public function __construct(DatabaseInterface $database){
        $this->database = $database;
    }
    public function getConnect(){
        return $this->database->connect();
    }

}

$db = new MongoDBClass();
$mysql = new MysqlDatabaseClass();
$userService = new UserServiceClass($db);
$userService->getConnect();