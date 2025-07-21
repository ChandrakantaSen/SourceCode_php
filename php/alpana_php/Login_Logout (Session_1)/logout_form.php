<?php
    session_start();
    session_destroy();
?>
<html>
<head>
    <meta http-equiv="refresh" content="1; URL=login_form.php">
</head>
<body>
<?php
    
    echo "<b>You Have Been Successfully Logged Out...";
    #<br/><a href='login_form.php'>Logged In Again</a></b>";
?>
</body>
</html>