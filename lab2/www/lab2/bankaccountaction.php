<?php

error_reporting(E_ALL ^ E_DEPRECATED);
require_once __DIR__ . '/db_connect.php';
$conn = new DB_CONNECT();
    $tbl_name="bankaccounttb"; // Table name

    // Get values from form
    $AccountID=$_POST["txtAccountID"];
    $CustomerID=$_POST["txtCustomerID"];
    $Status=$_POST["txtStatus"];
    $AccountTypeID=$_POST["txtAccountTypeID"];
    $CurrentBalance=$_POST["txtCurrentBalance"];

    $sql="INSERT INTO $tbl_name(Account_ID,Customer_ID,Status,Account_Type_ID,Current_Balance)
            VALUES('$AccountID','$CustomerID','$Status','$AccountTypeID','$CurrentBalance')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managebankaccount.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managebankaccount.php'> <em> VIEW TICKETS </em> </a>";
    }


?>
