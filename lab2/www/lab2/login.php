<?php

$username=$_POST["username"];
$password=$_POST["password"];

if(empty($username) || empty($password))
{
    header("location:welcome.php");
}
else{

    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once __DIR__ . '/db_connect.php';
    $conn = new DB_CONNECT();
    $tbl_name="accountstb"; // Table name

    // To protect MySQL injection
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    $sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'and acctype='admin'";

    $result=mysql_query($sql);

    //
    if(!$result){
        die("ERROR CHECKING DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    //
    $count=mysql_num_rows($result);

    // If result matched username and password, table row must be 1 row
    if($count==1){

        session_start();

        // Register $myusername, $mypassword and redirect
        $_SESSION['username'] = $username;
        header("location:home.php");
    }
    else{
        echo "WRONG USERNAME OR USERNAME. PLEASE <a href='welcome.php'> <em>LOG IN</em></a> AGAIN";
    }

}

?>
