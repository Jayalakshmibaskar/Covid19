<?php
include "header.php";
if(!$conn){
    die("Connecton failed:" .mysqli_connect_error());
}
else{
    $userid=$_GET['userid'];
    $output=array();
    $select="select * from user where userid='$userid'";
    $result= mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        array_push($output,array("name"=>$row["Name"],"email"=>$row["Email"],"phone"=>$row["Phone"],"address"=>$row["Address"]));
        }
    echo json_encode($output,JSON_PRETTY_PRINT);
    
    }
    else{
        array_push($output,array("error"=> "Userid does not exist"));
        echo json_encode($output,JSON_PRETTY_PRINT);
    }
    }
mysqli_close($conn);

?>