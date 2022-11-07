<?php
namespace App\classes;

class Database {
    public $dbhost, $dbUserName, $dbPass, $dbName;
    public function __construct (){
        $this->dbhost = 'localhost';
        $this->dbUserName = 'root';
        $this->dbPass = '';
        $this->dbName = 'z_man';

    }
    public function dbConnection(){
        return $this->connection = mysqli_connect($this->dbHost, $this->dbUserName, );
    }
   
}


    
     