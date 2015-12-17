<?php

    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once __DIR__ . '/db_connect.php';
    $conn = new DB_CONNECT();
    $tbl_name="cardtb"; // Table name

    // Get values from form
    $CardID=$_POST["txtCardID"];
    $CardRegDate=$_POST["txtCardRegDate"];
    $AccountID=$_POST["txtAccountID"];
    $CardTypeID=$_POST["txtCardTypeID"];

    $sql="INSERT INTO $tbl_name(Card_ID,Card_Reg_Date,Account_ID,Card_Type_ID)
            VALUES('$CardID','$CardRegDate','$AccountID','$CardTypeID')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managecard.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managecard.php'> <em> VIEW CARDS </em> </a>";
    }

?>
