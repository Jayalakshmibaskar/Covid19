<?php
include "header.php";
if(!$conn){
    die("Connecton failed:" .mysqli_connect_error());
}
else{
     
     $email=$_POST['email'];
     $password=$_POST['pwd'];
     $select="select Email,Password from user where Email='$email'and Password='$password'";
     $result=mysqli_query($conn,$select);
     $myObj=(object)null;
     

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $messages=array();
            $id=array();
            $selectmsg="select Msg from messages";
            $result1=mysqli_query($conn,$selectmsg);
            if(mysqli_num_rows($result1)>0){
                while ($row = mysqli_fetch_object($result1)) {                    
                    array_push($messages,$row->Msg);
                }
                $myObj->error = "false";
                $myObj->messages = $messages;
            }
            $selectid="select UserId from user where UserId='$userid'";
            $result2=mysqli_query($conn,$selectmsg);
            if(mysqli_num_rows($result2)>0){
               //while ($row1 = mysqli_fetch_object($result2)) {                    
                   array_push($id,$row1->UserId);
                //}

            
            $myObj->Userid = $id;
            
            $myJSON = json_encode($myObj);
            echo $myJSON;  
        }   
       
}      
    }else{        
        $myObj->error = "true";
        $myObj->message = "Username does not exists";
        $myJSON = json_encode($myObj);
        echo $myJSON;            
        }
    }
mysqli_close($conn);
?>