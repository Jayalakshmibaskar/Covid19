<?php
include "header.php";
if(!$conn){
    die("Connecton failed:" .mysqli_connect_error());
}
else{
   Global $messages;
   $userid=array();
    $name=$_POST['name'];
     $email=$_POST['email'];
     $password=$_POST['pwd'];
     $phone=$_POST['phone'];
     $address=$_POST['address'];
     $locality=$_POST['locality'];
     $usertype=$_POST['usertype'];
     $select="select Email from user where Email='$email'";
     $myObj=(object)null;
     $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
        $myObj->error = "true";
        $myObj->message = "User already exists";
        $myJSON = json_encode($myObj);
        echo $myJSON;
                  
    }
}
    else{
        $insert="insert into user(Name,Password,Email,Phone,Address,Locality,usertype) values ('$name','$password','$email','$phone','$address','$locality','$usertype')";
        $ins_res=mysqli_query($conn,$insert);
        if($ins_res){
            
        $select1="select UserId from user where Email = '$email'";
        $result1=mysqli_query($conn,$select1);
            if(mysqli_num_rows($result1)>0){
                while ($row = mysqli_fetch_object($result1)) {                    
                    array_push($userid,$row->UserId);
                }
        $myObj->userid=$userid;
        $myObj->error = "false";
        $myObj->message = "sign up successful";
        $myJSON = json_encode($myObj);
        echo $myJSON;
            }
            }
            
    }
    }
mysqli_close($conn);
?>
