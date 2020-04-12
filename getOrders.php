<?php
include "header.php";
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
else{
    $userid=$_GET['userid'];
    $obj=(object)null;
    $output=array();
    $output1=array();
    $myObj=(object)null;
    $select="select * from orders where UserId='$userid'";
    $result= mysqli_query($conn,$select);
    $test=array();
    if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $orderId =$row['OrderId'];
        $orders = $row['Orders'];  
        $obj->orderId=$orderId;        
        $newOrders = str_replace(array("\r\n", "\r", "\n"), "", $orders); 
        $norders=json_decode($newOrders);
        $obj->orders=$norders;
       
    array_push($output,json_encode($obj));
        
    }        
        echo stripslashes(json_encode($output));       
    }
}
mysqli_close($conn);
?>