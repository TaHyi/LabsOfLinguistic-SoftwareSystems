<?php

    $id = $_GET['id'];

error_reporting(E_ALL ^ E_DEPRECATED);
require_once __DIR__ . '/db_connect.php';
$conn = new DB_CONNECT();

    $tbl_name="bankaccounttb"; // Table name

    $sql = "DELETE FROM $tbl_name WHERE Account_ID='$id' ";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managebankaccount.php");
    }
    else{
        die("ERROR DELETING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo " <a href='managebankaccount.php'> <em> GO TO ADMIN ACCOUNT </em> </a>";
    }

?>
