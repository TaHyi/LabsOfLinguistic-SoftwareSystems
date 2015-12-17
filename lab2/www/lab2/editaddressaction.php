<?php

    $id = $_GET['id'];

error_reporting(E_ALL ^ E_DEPRECATED);
require_once __DIR__ . '/db_connect.php';
$conn = new DB_CONNECT();
    $tbl_name="addresstb"; // Table name

    // Get values from form
    $AddressID=$_POST["txtAddressID"];
    $Address=$_POST["txtAddress"];
    $City=$_POST["txtCity"];
    $State=$_POST["txtState"];
    $ZipCode=$_POST["txtZipCode"];
    $Country=$_POST["txtCountry"];

    $sql = "UPDATE $tbl_name SET Address_ID = '$AddressID', Address='$Address',City='$City',
            State = '$State', Zip_Code='$ZipCode', Country='$Country' WHERE Address_ID='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:manageaddress.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='manageaddress.php'> <em> GO TO CUSTOMERS ADDRESS </em> </a>";
    }

?>
