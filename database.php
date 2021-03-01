<?php

class Database{

    private $host="localhost";
    private $dbName="work5";
    private $user = "root";
    private $password = "";

    public $conn;

    public function getConn(){
        $this->conn=null;

        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName, $this->user, $this->password);
    
        } catch(PDOException $e){
            echo "Connection could not be established!";
        }

        return $this->conn;
    }

}


?>
 