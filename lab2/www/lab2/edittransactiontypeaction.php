<?php

    $id = $_GET['id'];

error_reporting(E_ALL ^ E_DEPRECATED);
require_once __DIR__ . '/db_connect.php';
$conn = new DB_CONNECT();
    $tbl_name="transactiontypetb"; // Table name



    // Get values from form
    $TransactionTypeID=$_POST["txtTransactionTypeID"];
    $TransactionType=$_POST["txtTransactionType"];

    $sql = "UPDATE $tbl_name SET Transaction_Type_ID = '$TransactionTypeID', Transaction_Type='$TransactionType'
            WHERE Transaction_Type_ID='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managetransactiontype.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managetransactiontype.php'> <em> GO TO TRANSACTION TYPE </em> </a>";
    }
?>
