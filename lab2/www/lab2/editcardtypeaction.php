<?php

    $id = $_GET['id'];

error_reporting(E_ALL ^ E_DEPRECATED);
require_once __DIR__ . '/db_connect.php';
$conn = new DB_CONNECT();
    $tbl_name="cardtypetb"; // Table name

    // Get values from form
    $CardTypeID=$_POST["txtCardTypeID"];
    $CardType=$_POST["txtCardType"];

    $sql = "UPDATE $tbl_name SET Card_Type_ID = '$CardTypeID', Card_Type='$CardType' WHERE Card_Type_ID='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managecardtype.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managecardtype.php'> <em> GO TO CARD TYPE </em> </a>";
    }

?>
