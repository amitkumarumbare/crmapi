<?php

class Dbconnection{
    private $host='localhost';
    private $port="3306";
    private $username="root";
    private $password='root';
    private $database='test';
    private $db=null;
    function dbconnect(){
        if($this->db==null){
            $this->db= mysqli_connect($this->host.':'.$this->port,$this->username,$this->password,$this->database);
        }
        return $this->db;
    }
}
?>