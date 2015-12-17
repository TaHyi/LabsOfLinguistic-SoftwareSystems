
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xml:lang="en">
<head>
	<title>WELCOME</title>
	<meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="files/styles.css?v=59969665">
    <script type="text/javascript" src="files/validateInput.js?v=7788"></script>

</head>

<body>
	<div id="head">
       <h2 > WELCOME TO THE SERVER MAIN PAGE </h2>
	</div>

    <div >
         <h3 > PLEASE LOGIN WITH YOUR USERNAME/E-MAIL AND PASSWORD </h3>
	</div>


        <center>
            <table cellpadding='2' cellspacing='5px' border='5px' id='ap_table'style= 'margin-top: 3.8em'>
            <tr><td bgcolor="blue" style='width: 400px'>
                <table cellpadding='0' cellspacing='5px' border='5px' width='100%'>
                    <tr>
                        <td bgcolor="blue" align=center style="padding:2;padding-bottom:4">
                        <b>
                           <font size=-1 color="white" face="verdana,arial">
                               <b>Enter your login and password</b>
                           </font></th></b>
                    </tr>
                        <tr><td bgcolor=#eee style="padding:8px"><br>
                            <form method="post" action="login.php" name="login" target="_top" onsubmit="return validateLogin()">
                                <center>
                                    <table>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>Login </font></td>
                                            <td><input type="text" name="username"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>Password</font></td>
                                            <td><input type="password" name="password"></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td style="padding:4px" ><input style="padding:4px" type="submit" value="Enter">
                                            <input style="padding:4px" type="button" value="Cancel" name="btnCancel" onclick="javascript:location.href='welcome.php'"></td>
                                        </tr>
                                        <tr>
                                            <td colspan=2>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan=2> <a href="forgotpass"></a></td>
                                        </tr>
                                    </table>
                                </center>
                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


	<ul id="foot">
		<li><a href="contactus.html">Contact Us</a></li> -
        <li><a href="faq.html">FAQ</a></li> -
		<li><a href="terms.html">Terms and Conditions</a></li>
	</ul>
</body>
</html>

