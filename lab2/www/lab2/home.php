
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:welcome.php");
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="en" xml:lang="en">
<head>
	<title>DATABASE HOME</title>
	<meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="files/styles.css?v=59969665">
    <script type="text/javascript" src="files/validateInput.js?v=7788"></script>

</head>

<body>
	<div id="head">
         <header>
           <h2 > DATABASE HOME </h2>
             <ul class="list" style="margin-top: 50px; ">
                 <li style="float: right; font-size: 14px; "><a style="color: #3366FF" href="logout.php"><b><i>LOGOUT</i></b></a></li>
             </ul>
         </header>
	</div>

    <div >
         <h3 > <a href="managebankaccount.php"> Bank Accounts  </a></h3><br>
         <h3 > <a href="manageaddress.php"> Customers Address  </a></h3><br>
         <h3 > <a href="managecard.php"> Card  </a></h3><br>
         <h3 > <a href="managecardtype.php"> Card Type </a></h3><br>
         <h3 > <a href="managecustomer.php"> Customer Information </a></h3><br>
         <h3 > <a href="managetransaction.php"> Transaction </a></h3><br>
         <h3 > <a href="managetransactiontype.php"> Transaction Type </a></h3><br>
	</div>

	<ul id="foot" >
		<li ><a href="contactus.html">Contact Us</a></li> -
        <li><a href="faq.html">FAQ</a></li> -
		<li><a href="terms.html">Terms and Conditions</a></li>
	</ul>
</body>
</html>

