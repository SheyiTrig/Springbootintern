<?php
include 'connect.php';
include 'customMessage.php';
$sql = "SELECT * FROM TABLENAME";
$result = mysqli_query($conn, $sql);
if (mysqli_fetch_assoc($result)){
    $email = $row['email'];
    $passwrd = $row['passerd'];
    // session start
    $_SESSION['email']= $row['email'];
    $_SESSION['password']= $row['password'];
}
else{
    ErrorMsg1();
    exit();
}


?>