<!-- connection file -->
<?php 
require_once 'connect.php';
require 'fetch.php';
require 'input.php';
require 'group_data.php';


 // connection object
$db=new DbConnect();

// customer object
$customer=new Customer($db);
// $customer->getCustomer('customers');


//$input=new Input($db);
// $input->inputData();

$group=new GroupData($db);
  
?>