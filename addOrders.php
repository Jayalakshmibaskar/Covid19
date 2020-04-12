<?php
include "header.php";
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
else{
    
    $order=$_POST['orders'];
    $myObj=(object)null;
    $insertorder="insert into orders('Orders')values('$order)";
    $ins_res=mysqli_query($conn,$insertorder);
        $myObj->error = "false";
        $myObj->message = "sucessfully added to cart";
        $myJSON = json_encode($myObj);
        echo $myJSON;
}