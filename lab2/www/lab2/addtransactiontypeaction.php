<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once __DIR__ . '/db_connect.php';
    $conn = new DB_CONNECT();


    $tbl_name="transactiontypetb"; // Table name



    // Get values from form
    $TransactionTypeID=$_POST["txtTransactionTypeID"];
    $TransactionType=$_POST["txtTransactionType"];

    $sql="INSERT INTO $tbl_name(Transaction_Type_ID,Transaction_Type)
            VALUES('$TransactionTypeID','$TransactionType')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managetransactiontype.php");
    }
    else{
        die("ERROR EDITING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managetransactiontype.php'> <em> VIEW TRANSACTION </em> </a>";
    }

?>
