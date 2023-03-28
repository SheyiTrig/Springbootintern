if (isset($_POST("submitlogin"))){
    $localhost = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "anyname";

    $conn = mysqli_connect( $localhost, $username, $password, $dbname);
    if (!$conn){
        die("connection failed: ".mysqli_connct_errno());
    }
}