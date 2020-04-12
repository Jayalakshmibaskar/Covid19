
<?php
include "header.php";
if(!$conn){
    die("Connecton failed:" .mysqli_connect_error());
}
else{
    $output=array();
    $select="select * from user where usertype='trader'";
    $result= mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        array_push($output,array("UserId"=>$row["UserId"],"name"=>$row["Name"],"email"=>$row["Email"],"phone"=>$row["Phone"],"address"=>$row["Address"],"locality"=>$row["Locality"]));
        }
    echo json_encode($output,JSON_PRETTY_PRINT);
    
    }
    }
mysqli_close($conn);

?>