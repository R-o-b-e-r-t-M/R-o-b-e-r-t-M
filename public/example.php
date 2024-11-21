<?php

class Person {
    public string $name;
    public string $hairColor;

    public function __construct(string $name, string $hairColor) {
        $this->name = $name;
        $this->hairColor = $hairColor;
    }

    public function getName() {
        //
    }

    public static function fetchUsers(){
        //A way of creating functions without instantiation
    }
}

// Person::fetchUsers();
$person1 = new Person("Robert", "Black");
// $person2 = new Person();

// $person1->getName();
// $person2->getName();

echo $person1->name;

// class Database
// {
//     public function fetchData()
//     {
//         return "Fetching data from MySQL";
//     }
// }

class DatabaseMysql  {
    public function fetchData() {
        return "Fetching data from MySQL";
    }
}

class DatabasePostgres
{
    public function fetchData()
    {
        return "Fetching data from MySQL";
    }
}

class User{
    public $database;

    public function __construct()
    {
        public $database;
        $this->database = $database;
    }

    public function ()
    {
        $this-database->fetchData();
    }
}

$database = new DatabasePostgres();
$user = new User($database)