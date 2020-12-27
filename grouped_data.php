<?php
include 'header.php';
require 'database/functions.php';

$group->group_data();
foreach($current_customer as $customer=>$data){
?>

<table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Customer_Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach($data as $datum){?>
                        <tr>

                            <td><?php echo $datum['id'];?></td>
                            <td><?php echo $datum['customer_name'];?></td>
                            <td><?php echo $datum['quantity'];?></td>
                            <td><?php echo $datum['price'];?></td>
                            <td><?php echo $datum['date'];?></td>

                            <?php };?>  
                        </tr>
                    </tbody>
                            </table><?php  }; ?>