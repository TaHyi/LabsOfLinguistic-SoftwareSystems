<?php

    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once __DIR__ . '/db_connect.php';
    $conn = new DB_CONNECT();

    $tbl_name="transactiontb"; // Table name



    // Get values from form
    $TransactionID=$_POST["txtTransactionID"];
    $AccountID=$_POST["txtAccountID"];
    $TransactionTypeID=$_POST["txtTransactionTypeID"];
    $TransactionAmount=$_POST["txtTransactionAmount"];

    $sql="INSERT INTO $tbl_name(Transaction_ID,Account_ID,Transaction_Type_ID,Transaction_Amount)
            VALUES('$TransactionID','$AccountID','$TransactionTypeID','$TransactionAmount')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managetransaction.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managetransaction.php'> <em> VIEW TRANSACTION </em> </a>";
    }


?>
