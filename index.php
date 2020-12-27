<?php include 'header.php';

// require_once 'database/connect.php';

    $conn=mysqli_connect('localhost',"root",'','milk_habour');
    $query=mysqli_query($conn," SELECT * FROM quantity");
    $quantity=[];
    while($row=mysqli_fetch_array($query)){
        $quantity[]=[
            'id'=>$row['id'],
            'quantity'=>$row['quantity'],
            'cost'=>$row['cost'],
        ];
    }

?>


<body>
    <script>
        function validate(){

            details=['customer_name','quantity','cost'];
            for(var i=0;i<details.length;i++){
                field=details[i];
                value=document.contact_form[field].value;
                if(value==""){
                    alert("Enter"+" "+field+" "+"field");
                return false;
                }

            }
        }

    </script>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5">
                <form name="contact_form" method="POST" action="database/input.php" onsubmit="return validate()">
                    
                    <div class="container-fluid">
                    <h3 class="text-center">Input details</h3>
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input type="text" class="form-control" placeholder="Mkisii" name="customer_name">
                        </div>
                    
                    
                        <div class="form-group">
                            <label>Quantity</label>
                            <select class="form-control" name="quantity" placeholder="1litre">
                                <?php 
                                    foreach ($quantity as $key=>$quantity)
                                    {
                                        echo "<option value=".$quantity['id'].">".$quantity['quantity']."</option>";

                                    }
                                ?>
                                
                            </select>
                        </div>
                    
                    
                        <div class="form-group">
                            <label>Cost</label>
                            <input type="text" class="form-control"  name="price">
                            
                        </div>
                        <input type="submit" name="submit" value="submit" class="btn btn-success">
                                    
                                
                    </div>
                            
                        
                
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <!--main javascript file  -->
    <script src="main.js"></script>
</body>
</html>