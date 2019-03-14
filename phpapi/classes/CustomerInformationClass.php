<?php
class CustomerInformationClass{
   
    public $db="";
    function __construct($db){
        $this->db=$db;
    }
    
    function insertQuery($qry){
        if(mysqli_query($this->db,$qry)){
            return mysqli_insert_id($this->db);
        } else {
            return 0;
        }
        
    }
    
    function saveCustomerInfo($requestdata){
  
    }
    
}
?>