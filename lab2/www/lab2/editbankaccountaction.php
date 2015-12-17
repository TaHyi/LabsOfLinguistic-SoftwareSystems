<?php

    $id = $_GET['id'];

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

    $sql = "UPDATE $tbl_name SET Account_ID = '$AccountID', Customer_ID='$CustomerID',Status='$Status',
            Account_Type_ID = '$AccountTypeID', Current_Balance='$CurrentBalance' WHERE Account_ID='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managebankaccount.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managebankaccount.php'> <em> GO TO BAANK ACCOUNT </em> </a>";
    }
?>
