<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>
<body>
<?php
// require_once 'database/connect.php';

class Fetch{
    public function displayall($tbname){
        $conn=mysqli_connect('localhost',"root",'','milk_habour');
        echo "<table border='1'>";
        echo "<tr>
            <th>quantity</th>
            <th>price</th>

            </tr>";
        $query=mysqli_query($conn,"SELECT * FROM $tbname");
        while($res=mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$res['quantity']."</td>";
            echo "<td>".$res['cost']."</td>";
            echo "</tr>";

        }
    }
}
$obj=new Fetch();
$obj->displayall('quantity');
?>
</body>
</html>