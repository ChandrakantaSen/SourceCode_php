<?php
    session_start();
    #session_destroy();
?>
<html>
<head>
    <meta http-equiv="refresh">
    <title>User Login</title>
    <link rel="stylesheet" href="css/style_1.css" media="screen" type="text/css"/>
    <link rel="stylesheet" href="css/style_2.css" media="screen" type="text/css"/>
</head>
<body>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
        <tr>
            <td align="center">User Dashboard</td>
        </tr>
        <tr>
            <td>
            <?php
            if ($_SESSION['username'])
            {
                $sncuser=$_SESSION['username'];
                $sncpwd=$_SESSION['password'];
				$sncname=$_SESSION['name'];
                echo "Wecome to "."<strong>$sncname</strong>";
                echo "<br/>"."Your UserId is: "."<strong>$sncuser</strong>";
                echo "<br/>"."Your Password is: "."<strong>$sncpwd</strong>";
                echo "<br/><a href='Logout.php'>Log Out</a></b>";
            }
            ?>
            </td>
        </tr>
</body>
</html>    