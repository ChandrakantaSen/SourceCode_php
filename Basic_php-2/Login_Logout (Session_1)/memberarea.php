<?php
    session_start();
    #session_destroy();
?>
<html>
<head>
    <title>User Login</title>
    <!--<meta http-equiv="refresh" content="1; URL=login_form.php">-->
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
        <tr class="tableheader">
            <td align="center">User Dashboard</td>
        </tr>
        <tr class="tablerow">
            <td>
            <?php
            if ($_SESSION['username'])
            {
                $sncname=$_SESSION['username'];
                echo "<strong>Wecome to </strong>"."<strong>$sncname</strong>"."<strong> & you are successfully logged in...</strong>";
                echo "<br/><a href='logout_form.php'>Log Out</a></b>";
            }
            ?>
            </td>
        </tr>
</body>
</html>    