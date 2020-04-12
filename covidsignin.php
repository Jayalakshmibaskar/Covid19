<?php
include "header.php";
if(!$conn){
    die("Connecton failed:" .mysqli_connect_error());
}
else{
     $output=array();
     $userid=$_POST['userid'];
     $password=$_POST['pwd'];
     $select="select email,password from user where userid='$userid'and password='$password'";
     $result=mysqli_query($conn,$select);
     $myObj=(object)null;

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $messages=array();
            $selectmsg="select Msg from messages";
            $result1=mysqli_query($conn,$selectmsg);
            if(mysqli_num_rows($result1)>0){
                while ($row = mysqli_fetch_object($result1)) {                    
                    array_push($messages,$row->Msg);
                }
            
            $myObj->error = "false";
            $myObj->messages = $messages;
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
