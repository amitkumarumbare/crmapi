<?php
include_once 'DBConnect.php';
class RequestData extends Dbconnection{

    public $db=null;
    public $requestdata='';
    function getConnection(){
       $this->db=$this->dbconnect();
    }
    function getInputContent(){
        $this->data= file_get_contents('php://input');
    }
}
$obj=new RequestData();
$obj->getConnection();
?>