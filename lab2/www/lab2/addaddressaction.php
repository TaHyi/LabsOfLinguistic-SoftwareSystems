<?php

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

    $sql="INSERT INTO $tbl_name(Address_ID,Address,City,State,Zip_Code,Country)
            VALUES('$AddressID','$Address','$City','$State','$ZipCode','$Country')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:manageaddress.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='manageaddress.php'> <em> VIEW TICKETS </em> </a>";
    }

?>
