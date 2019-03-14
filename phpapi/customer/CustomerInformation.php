<?php
error_reporting('E_ALL');
include_once '../RequestData.php';
include_once '../classes/CustomerInformationClass.php';
class CustomerInformation extends RequestData{
   
    public $requestdata="";
    public $db=null;
    function __construct(){
        $this->requestdata=$this->getInputContent();
    }
    
    function init(){
        $this->db=$this->getConnection();
        $obj=new CustomerInformationClass($this->db);
        $response=$obj->saveCustomerInfo($this->requestdata);
        if($response=='0'){
            $this->errorResponse('Insert Error','','500');
        } else {
            $this->successResponse('Insert Success',$response,'200');
        }
    }
    
    function validateRequestData(){
        
    }
}
$obj=new CustomerInformation();
$obj->init();
?>