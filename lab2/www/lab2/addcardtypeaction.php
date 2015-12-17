<?php

    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once __DIR__ . '/db_connect.php';
    $conn = new DB_CONNECT();
    $tbl_name="cardtypetb"; // Table name

    // Get values from form
    $CardTypeID=$_POST["txtCardTypeID"];
    $CardType=$_POST["txtCardType"];

    $sql="INSERT INTO $tbl_name(Card_Type_ID,Card_Type)
            VALUES('$CardTypeID','$CardType')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managecardtype.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managecardtype.php'> <em> VIEW CARD TYPE </em> </a>";
    }

?>
