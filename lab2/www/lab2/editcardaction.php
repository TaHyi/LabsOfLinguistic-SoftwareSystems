<?php

    $id = $_GET['id'];

error_reporting(E_ALL ^ E_DEPRECATED);
require_once __DIR__ . '/db_connect.php';
$conn = new DB_CONNECT();
    $tbl_name="cardtb"; // Table name

    // Get values from form
    $CardID=$_POST["txtCardID"];
    $CardRegDate=$_POST["txtCardRegDate"];
    $AccountID=$_POST["txtAccountID"];
    $CardTypeID=$_POST["txtCardTypeID"];

    $sql = "UPDATE $tbl_name SET Card_ID = '$CardID', Card_Reg_Date='$CardRegDate',Account_ID='$AccountID',
            Card_Type_ID = '$CardTypeID' WHERE Card_ID='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managecard.php");
    }
    else{
        die("ERROR EDITING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managecard.php'> <em> GO TO CARD </em> </a>";
    }

?>
