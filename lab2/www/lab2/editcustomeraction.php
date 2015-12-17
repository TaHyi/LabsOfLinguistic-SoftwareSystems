<?php

    $id = $_GET['id'];

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

    $sql = "UPDATE $tbl_name SET Customer_ID = '$CustomerID', Address_ID='$AddressID',First_Name='$FirstName',
            Other_Name = '$OtherName', Last_Name='$LastName',Birth_Date='$BirthDate',Reg_Date='$RegDate',
            Telephone='$Telephone', Passport_Number='$PassportNumber' WHERE Customer_ID='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managecustomer.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managecustomer.php'> <em> GO TO CUSTOMERS </em> </a>";
    }
?>
