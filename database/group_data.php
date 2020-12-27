<?php
 require_once 'functions.php';

global $data;
class GroupData{
    public $db=null;
    function __construct(DbConnect $db)
    {
        if(!isset($db->conn))return null;
        $this->db=$db;
        
    }

    // group rows that have the same value
    public function group_data(){
        $rows=$this->data->get_results("SELECT * FROM 'customers' ORDER BY 'customer_name' ASC");
        $customers=[];
        foreach($rows as $row)
        {
            $customers[$row->$customers][]=$row;
        }
    }
}

?>
<!-- 
$current_customer=null;
        foreach($rows as $row)
        {
            if($row->cusomer_name !== $current_customer){
                // create table
                $current_customer = $row->customer_name;
            }
            // add row to table
        } -->