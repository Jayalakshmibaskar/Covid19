<?php
include "header.php";
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
else{
    $select="select * from orders";
    $result= mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        array_push($output,array("orderid"=>$row["OrderId"],"orders"=>$row["Order"]));
        }
    echo json_encode($output,JSON_PRETTY_PRINT);
    }
}
mysqli_close($conn);
?>