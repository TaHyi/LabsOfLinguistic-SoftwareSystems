<?php

    $id = $_GET['id'];
error_reporting(E_ALL ^ E_DEPRECATED);
require_once __DIR__ . '/db_connect.php';
$conn = new DB_CONNECT();


    $tbl_name="addresstb"; // Table name



    $sql = "DELETE FROM $tbl_name WHERE Address_ID='$id' ";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:manageaddress.php");
    }
    else{
        die("ERROR DELETING ADDRESS:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo " <a href='manageaddress.php'> <em> GO TO ADMIN ACCOUNT </em> </a>";
    }

?>
