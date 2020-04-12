<?php
include "header.php";
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
else{
    $obj=(object)null;
    $output=array();
    $output1=array();
    $myObj=(object)null;
    $select="select * from orders";
    $result= mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_object($result)){
        // array_push($output,$row->OrderId);
        
        // array_push($output1,$row->Orders);
        // json_encode($output1,JSON_UNESCAPED_SLASHES);
        $orderId =$row->OrderId;
        $orders = $row->Orders;       
        $obj->orderId=$orderId;        
        $newOrders = str_replace(array("\r\n", "\r", "\n"), "", $orders); 
        $norders=json_decode($newOrders);
        $obj->orders=$norders;
        array_push($output,$obj);
    
        
        //$myObj=(object)null;

    }
        // $myObj->orderid = $output;
        // $myobj->Orders=$output1;     
        $myJSON = json_encode($output);
        
        //$str=preg_replace('/\\\"/',"\"",$myJSON);
        echo $myJSON;
    
    //echo json_encode($output,JSON_UNESCAPED_SLASHES);
    }
}
mysqli_close($conn);
?>