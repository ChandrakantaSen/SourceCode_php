<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body><label>
<div align="center">
    <label><u>CALCULATOR</u></label>
    <form name="form1" method="post" action="cal_result.php">
      <input name="radiobutton" type="radio" value="add">
ADD    
<input name="radiobutton" type="radio" value="sub">
SUBTRACT   
<input name="radiobutton" type="radio" value="mul"> 
MULTIPLICATION 
<input name="radiobutton" type="radio" value="div">
DIVISION  
<input name="radiobutton" type="radio" value="mod"> 
MOD
    
  <p align="left">&nbsp;<BR>
    <label>ENTER 1ST NO : 
    <input type="text" name="text1">
    </label><label>ENTER 2ND NO : </label> <input name="text2" type="text">
</p>
  <p align="left">
    <input type="submit" name="Submit" value="Submit">
    <input type="reset" name="Submit2" value="Reset">
  </p>

</form>
</div>
<?php

?>

</body>
</html>
