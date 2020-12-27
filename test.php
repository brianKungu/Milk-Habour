<?php require 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h2 class="text-center mt-5">Test</h2>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>


// require 'header.php';
    // $conn=mysqli_connect('localhost',"root",'','milk_habour');
    // $query=mysqli_query($conn," SELECT * FROM quantity");
    // $quantity=[];
    // while($row=mysqli_fetch_array($query)){
    //     $quantity[]=[
    //         'id'=>$row['id'],
    //         'quantity'=>$row['quantity'],
    //         'cost'=>$row['cost'],
    //     ];
    // }

    // $query2=mysqli_query($conn," SELECT * FROM prices");
    // $cost=[];
    // while($row=mysqli_fetch_array($query2)){
    //     $cost[]=[
    //         'id'=>$row['price_id'],
    //         'price'=>$row['price'],
    //     ];
    // }


    $quantity[]=[
            'id'=>$row['id'],
            'quantity'=>$row['quantity'],
            'cost'=>$row['cost'],
        ];


<!-- group data -->

        $results = $conn->query('SELECT * FROM activitybook');

$students = []

foreach ( $results->fetch_array() as $activity ) {
    $students[$activity['sid']][] = $activity;
}

foreach($students as $sid=>$activities) {
    foreach($activities as $activity) {
         echo
                    "<table><tr>
                        <th>SID</th>
                        <th>Date</th>
                        <th>FName</th>
                        <th>LName</th>
                        <th>activity</th>
                        <th>time</th>
                        <th>score</th>
                        </tr>
                <tr>
                    <td>" . $sid . "</td>
                    <td>" . $activity['fname'] . "</td>
                    <td>" . $activity['lname'] . "</td>
                    <td>" . $activity['activity'] .  "</td>
                    <td>" . $activity['atime'] .  "</td>
                    <td>" . $activity['ascore'] .  "</td>
                </tr></table>";
    }
}
