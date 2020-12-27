<?php
class DbConnect{
    // db connection propreties

    protected $servername="localhost";
    protected $username="root";
    protected $password='';
    protected $dbName="milk_habour";


    public $conn=null;

    public function __construct()
    {
        $this->conn=mysqli_connect($this->servername,$this->username,$this->password,$this->dbName);
        if($this->conn->connect_error){
            echo "Fail".$this->conn->connect_error;
        }
    }

public function __destruct(){
    $this->closeConnection();
}

    protected function closeConnection(){
        if ($this->conn!=null) {
            $this->conn->close();
            $this->conn=null;
        }
    }
}


?>