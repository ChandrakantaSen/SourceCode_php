<?php
    session_start();
    session_destroy();
?>
<html>
<head>
    <meta http-equiv="refresh" content="1; URL=LogIn.php">
</head>
<body>
<?php
    echo "<b>You Have Been Successfully Logged Out...";
?>
</body>
</html>