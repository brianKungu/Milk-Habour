<?php
/**
 * 
 */

class Customer
{
	public $db=null;
	function __construct(DbConnect $db)
	{
		if (!isset($db->conn))return null; 
		$this->db=$db;
	}


	// fetch customer data using getData method
	public function getCustomer($table='customers'){
		$result=$this->db->conn->query("SELECT * FROM {$table}");

		$resultArray=array();
		// fetch data one by one
		while ($customer=mysqli_fetch_array($result,$resulttype=MYSQLI_ASSOC)) {
			$resultArray[]=$customer;
		}

		return $resultArray;
	}  
}

?>