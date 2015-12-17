<?php

    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once __DIR__ . '/db_connect.php';
    $conn = new DB_CONNECT();

    $tbl_name="customertb"; // Table name

    // Get values from form
    $CustomerID=$_POST["txtCustomerID"];
    $AddressID=$_POST["txtAddressID"];
    $FirstName=$_POST["txtFirstName"];
    $OtherName=$_POST["txtOtherName"];
    $LastName=$_POST["txtLastName"];
    $BirthDate=$_POST["txtBirthDate"];
    $RegDate=$_POST["txtRegDate"];
    $Telephone=$_POST["txtTelephone"];
    $PassportNumber=$_POST["txtPassportNumber"];

    $sql="INSERT INTO $tbl_name(Customer_ID,Address_ID,First_Name,Other_Name,Last_Name,Birth_Date,Reg_Date,Telephone,Passport_Number)
            VALUES('$CustomerID','$AddressID','$FirstName','$OtherName','$LastName','$BirthDate','$RegDate','$Telephone','$PassportNumber')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managecustomer.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managecustomer.php'> <em> VIEW CUSTOMERS </em> </a>";
    }


?>
