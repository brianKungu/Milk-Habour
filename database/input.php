<?php
// require 'functions.php';
class Input{
    public $db=null;

    function __construct(DbConnect $db)
    {
        if(!isset($db->conn))return null;
        $this->db=$db;
    }

    // add data to customers table
    public function inputData(){
        if(isset($_POST['submit']))
        {
            $id=['id'];
            $customer_name=['customer_name'];
            $quantity=['quantity'];
            $price=['price'];
            $date=['date'];

            $query=("INSERT INTO customers(id,customer_name,quantity,price,date)VALUES(NULL,?,?,?,?)");
            $stmt=$this->db->conn->prepare($query);
            $stmt->bind_param("sssss",$id,$customer_name,$quantity,$price,$date);
            $stmt->execute();
            
            if($stmt){
                echo 'success';
                header('refresh,0,url=../index.php');
            }echo 'failed';
            header('refresh,0,url=.../index.php');
            $stmt->close();
        }else{
            ?>
            <script>
            window.location.href='../index.php';
            </script>
            <?php
        }
        
    }
}

?>


