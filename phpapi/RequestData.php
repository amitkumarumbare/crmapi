<?php
include_once 'DBConnect.php';
class RequestData extends Dbconnection{

    public $db=null;
    function getConnection(){
       $this->db=$this->dbconnect();
       if(!$this->db){
           $this->errorResponse('Connection Error','','400');
       }
       return $this->db;
    }
    
    function errorResponse($msg,$data,$code){
        $arr=array('StatusCode'=>$code,'Status'=>'error','Message'=>$msg,'Response'=>$data);
        echo json_encode($arr);
    }
    
    function successResponse($msg,$data,$code){
        $arr=array('StatusCode'=>$code,'Status'=>'Success','Message'=>$msg,'Response'=>$data);
        echo json_encode($arr);
    }
    
    function getInputContent(){
        return json_decode(file_get_contents('php://input'));
    }
}
$obj=new RequestData();
//$obj->getConnection();
?>