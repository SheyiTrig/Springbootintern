<?php
include 'connect.php' ;
include 'customMessage.php';
$email = $_POST("email");
$password = $_POST("password");
$sql = "INSERT INTO TableName (email , password) values('$email' , '$password')";
$result = mysqli_query($conn, $sql);
if($result){
   SuccessMsg1();
   exit();
}else{
    ErrorMsg2();
}

?>