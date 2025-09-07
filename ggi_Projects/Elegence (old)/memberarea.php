<html>
<head>
<title></title>
</head>
<body>
    <form name="form1" method="post" action="login_into_form.php">
    <?php
        session_start();
        if ($_SESSION['username'])
        {
            $sncname=$_SESSION['username'];
            echo "<strong>Wecome to </strong>".$sncname;
            echo "<h1>Successfully loged in...</h1>";
            echo "<br/><a href='logout_form.php'>Log Out</a></b>";
        }
    ?>
    </form>
</body>
</html>