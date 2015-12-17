<?php

    $id = $_GET['id'];

error_reporting(E_ALL ^ E_DEPRECATED);
require_once __DIR__ . '/db_connect.php';
$conn = new DB_CONNECT();
    $tbl_name="transactiontb"; // Table name


    // Get values from form
    $TransactionID=$_POST["txtTransactionID"];
    $AccountID=$_POST["txtAccountID"];
    $TransactionTypeID=$_POST["txtTransactionTypeID"];
    $TransactionAmount=$_POST["txtTransactionAmount"];

    $sql = "UPDATE $tbl_name SET Transaction_ID = '$TransactionID', Account_ID='$AccountID',Transaction_Type_ID='$TransactionTypeID',
            Transaction_Amount = '$TransactionAmount' WHERE Transaction_ID='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managetransaction.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managetransaction.php'> <em> GO TO TRANSACTION </em> </a>";
    }

?>
