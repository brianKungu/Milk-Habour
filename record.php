<?php
        include 'header.php';
        require_once 'database/functions.php';
        $customer_shuffle=$customer->getCustomer();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk_Habour</title>  
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            <a href=""><svg width="1em" height="10em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
                </svg>Back
            </a>
            </div>
            <div class="col-sm-6 mt-3">
                <h2 class="text-center">Order Summary</h2>
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
                            <?php foreach($customer_shuffle as $customer){?>
                        <tr>

                            <td><?php echo $customer['id'];?></td>
                            <td><?php echo $customer['customer_name'];?></td>
                            <td><?php echo $customer['quantity'];?></td>
                            <td><?php echo $customer['price'];?></td>
                            <td><?php echo $customer['date'];?></td>

                            <?php };?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3"></div>   
        </div>
    </div>
</body>
</html>