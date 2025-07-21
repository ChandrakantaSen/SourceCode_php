<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
	<body>
		<form name='form1' action='login_mailer.php' method='post'>
			<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
                <tr class="tableheader">
                    <td align="center" colspan="2">Enter Login Details</td>
                </tr>
                <tr class="tablerow"> <!-- Username -->
                    <td align="right">Username:&nbsp;</td>
                    <td><input type="text" name="usrid"></td>
                </tr>
                <tr class="tablerow"> <!-- Password -->
                    <td align="right">Password:&nbsp;</td>
                    <td><input type="password" name="pwd"></td>
                </tr>
                <tr class="tableheader">
                    <td align="center" colspan="2"><input type="submit" name="login" value="Submit"></td>
                </tr>
            </table>
		</form>
		<!--php include_once 'login_mailer.php'; --> 
	</body>
</html>